<?php

defined('SYSPATH') or die('No direct access allowed.');

/**
 * Event Model
 *
 * @package    Kohana/Auth
 * @author     Kohana Team
 * @copyright  (c) 2007-2010 Kohana Team
 * @license    http://kohanaframework.org/license
 */
class Model_Photo extends ORM
{
	var $basedir = 'datastore/places/';
	var $thumbdir = 'datastore/thumbs/';
	const PATHF = 'datastore/places/';
	const DEPTH = 3;
	const FILES_PER_DIR = 1000;
	const MAX_SIDE_SIZE = 750;
	const WIDTH = 960;
	const HEIGTH = 640;
	const SMALL_W = 323;
	const SMALL_h = 187;

	protected $empty_path = "/media/images/no-logo.png";
	protected $extensions = array(1 => 'gif', 2 => 'jpg', 3 => 'png');

	 protected $_belongs_to = array(
        'event'	=> array('model' => 'event'), 
    );
	
	public function save_image_form($files, $campaign_id=null, $is_background=0)
	{
		$path = upload::save($files, $files['name'], DOCROOT.'datastore/upload/', 0777);
//		var_dump($path);die;
		$this->save_image($path, $campaign_id, $is_background);
	}

	public function save_image($filenamePath, $campaign_id, $is_background)
	{
		if (file_exists($filenamePath)) {
			$filename = basename($filenamePath);
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			
			list($file_width, $file_height, $type, $attr) = getimagesize($filenamePath);
			$image = Image::factory($filenamePath);
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			list($name, $ext) = explode('.'.$ext, $filename);
			$name = uniqid($name);
			
//			if ($file_width >= self::WIDTH && $file_height >= self::HEIGTH)
//			{
//                $imagepath      = DOCROOT.$this->basedir.trim($name).'.jpg';
//                $image->resize(self::WIDTH, self::HEIGTH, Image::NONE);
//            }
//            else
//            {
				$imagepath      = DOCROOT.$this->basedir.trim($name).'.jpg';
                $image->resize(self::WIDTH, self::HEIGTH, Image::NONE);
//            }
			
			$image_copy = $image;
			$this->path = $name.'.jpg';
			$this->house_id = $campaign_id;
//			$this->is_background = $is_background;
			$this->save();
			$imagepath      = DOCROOT.$this->basedir.trim($this->id).'.jpg';
			$image->save($imagepath, 100);
			$this->createThumb($image_copy, $this->id);
			//var_dump($is_background);
			return true;
		} else {
			return false;
//			throw new Exception("$filenamePath is not a valid image path.");
		}
	}

	public function createThumb($image, $id) {
		try {
			$image->resize(125, 125, Image::NONE);
			$imagepath = DOCROOT.$this->thumbdir.trim($id).'.jpg';
			$image->save($imagepath, 70);
		} catch(Exception $e) {
			dumper("ERRO");die;
		}
		
	}
	
	public function deleteImg($id=NULL) {
		try {
			unlink(DOCROOT.$this->basedir.trim($this->path));
		}catch(Exception $e) {
			
		}
		$this->delete($this->id);
	}
	
	
}
