<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Image extends Tree {

    protected $_has_many = array(
        'users' => array('model' => 'user', 'through' => 'images_users'),
        'products' => array('model' => 'products', 'through' => 'images_products'),
	  'colors'	 => array('model' => 'colors', 'through' => 'images_colors')

    );
    var $basedir = 'datastore/events/';
    const PATHF  = 'datastore/events/';
    const DEPTH = 3;
    const FILES_PER_DIR = 1000;
    const MAX_SIDE_SIZE = 750;
    
    const WIDTH         = 960;
    const HEIGTH        = 640;
     
    const SMALL_W       = 323;
    const SMALL_h       = 187;
    
    protected $empty_path = "/media/images/no-logo.png";
    protected $extensions = array(1 => 'gif', 2 => 'jpg', 3 => 'png');

    
    public function save_image($filenamePath) 
    {
        
        if (file_exists($filenamePath)) 
        {
            $filename = basename($filenamePath);
            list($file_width, $file_height, $type, $attr) = getimagesize($filenamePath);
            $image = Image::factory($filenamePath);
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            list($name, $ext) = explode('.'.$ext, $filename);
            $name = uniqid($name);
//            if ($file_width >= self::WIDTH && $file_height >= self::HEIGTH) 
//            {C
                $imagepath      = DOCROOT.$this->basedir.trim($name).'.jpg';
                $image->resize(self::WIDTH, self::HEIGTH, Image::NONE);
                $this->isbk     = 1;
//            }
//            else
//            {
//                $image->resize(self::WIDTH, self::HEIGTH, Image::NONE);
//                $this->isbk    = 1;
//            }
            $image->save($imagepath, 70);
            $this->path     = $name;
            $this->width    = $file_width;
            $this->height   = $file_height;
            $this->save();
            $this->_generate_thumb($filenamePath, $name, '.jpg');
          
        } 
        else 
        {
            throw new Exception("$filenamePath is not a valid image path.");
        }
    }
    
    
    public function save_image_form($files) 
    {
        
//        if (file_exists($filenamePath)) 
//        {
//            $filename = basename($filenamePath);
//            list($file_width, $file_height, $type, $attr) = getimagesize($filenamePath);
//            $image = Image::factory($filenamePath);
//            $ext = pathinfo($filename, PATHINFO_EXTENSION);
//            list($name, $ext) = explode('.'.$ext, $filename);
            $path = upload::save($files, $files['name'], DOCROOT.'datastore/upload/', 0750);
            $this->save_image($path);
//            dumper($path);die
//            if ($file_width >= self::WIDTH && $file_height >= self::HEIGTH) 
//            {C
//                $imagepath      = DOCROOT.$this->basedir.trim($name).'.jpg';
//                $image->resize(self::WIDTH, self::HEIGTH, Image::NONE);
//                $this->isbk     = 1;
////            }
////            else
////            {
////                $image->resize(self::WIDTH, self::HEIGTH, Image::NONE);
////                $this->isbk    = 1;
////            }
//            $image->save($imagepath, 70);
//            $this->path     = $name;
//            $this->width    = $file_width;
//            $this->height   = $file_height;
//            $this->save();
//            $this->_generate_thumb($filenamePath, $name, '.jpg');
          
//        } 
//        else 
//        {
//            throw new Exception("$filenamePath is not a valid image path.");
//        }
    }
    
    
    public function get_images_event ($size = null, $path = true)
    {
        if(is_null($size))
        {
            return '/datastore/events/'.trim($this->path).'.jpg';
        }
        else
        {
            return '<img src="/datastore/events/'.$this->path.'thumb.jpg" />';
        }
    }
    
    private function _generate_thumb($filenamePath, $filename, $ext)
    {
        $image  = Image::factory($filenamePath);
        $image->resize(self::SMALL_W, self::SMALL_h, Image::NONE);
//        list($name, $ext) = explode('.'.$ext, $filename);
        $imagepath = DOCROOT.$this->basedir.$filename.'thumb'.$ext;
        $image->save($imagepath, 100);
        return true;
    }
    
    
    /**
     * _getDirName
     *
     * @param int $id id
     *
     * @return string
     */
    private function _getDirName($id)
    {
        $directoryPath = array();
        $n = $id;
        for ($i = 0; $i < self::DEPTH - 1; $i++)
        {
            $directoryPath[] = $n % self::FILES_PER_DIR;
            $n = (int) ($n / self::FILES_PER_DIR);
        }

        $path = $this->basedir;
        $directoryPath = array_reverse($directoryPath);
        foreach ($directoryPath as $dir)
        {
            $path .= "/$dir";
        }

        $path.="/";

        $fullPath = getcwd() . $path;

        if (is_dir($fullPath) == false)
        {
            $mkdirRes = mkdir($fullPath, 0755, true);
//dumper($fullPath,is_dir($fullPath),$path,is_dir($path));
            if (!$mkdirRes)
            {
                throw new Exception(get_class($this) . " -> mkdir error creating path : '$fullPath'");
            }
        }

        return $path;
    }

    /**
     * _hashFileName
     *
     * @return string
     */
    private function _hashFileName()
    {
        return substr(md5(time() . rand()), 0, 8);
    }

    public function setBasedir($dir)
    {
//        if(is_dir($dir)){
        $this->basedir = "/datastore/" . $dir;
//            return true;
//        }
//        return false;
    }

    public function is_empty()
    {
//	return!file_exists(".".$this->path);
        return is_null($this->path) || $this->path == $this->emptyPath();
    }

    /**
     * getImage
     *
     * @param int $bigger_side_size bigger side size
     *
     * @return string
     */
    public function getImage($bigger_side_size=0)
    {
        if (!$this->loaded() || $this->is_empty())
        {
            return $this;
        }

        $max_side_size = ($this->width > $this->height) ? $this->width : $this->height;

        if ($bigger_side_size == 0 || $max_side_size <= $bigger_side_size)
        {
            return $this;
        }

//dumper($this->path,$this->has_childs());
        if ($this->has_childs())
        {
            $imgObj = $this->new_node()
                            ->where('pid', '=', $this->id)
                            ->where_open()
                                ->or_where_open()
                                    ->where('width', '=', $bigger_side_size)
                                    ->and_where('width', '>=', DB::expr('height'))
                                ->or_where_close()
                                ->or_where_open()
                                    ->where('height', '=', $bigger_side_size)
                                    ->and_where('height', '>=', DB::expr('width'))
                                ->or_where_close()
                            ->where_close()
//                            ->where(new Database_Expression("((width=$bigger_side_size and width>=height) or (height=$bigger_side_size and height>=width))"))
                            ->find();
//            dumper($imgObj->last_query);die;
//dumper($imgObj->loaded,$imgObj->id,$imgObj->as_array(),$this->last_query());
            if ($imgObj->loaded())
            {
                if (!file_exists("." . $imgObj->path))
                {
                    $imgObj->path = $this->emptyPath();
                }
                return $imgObj;
            }
        }

        if (!file_exists("." . $this->path))
        {
            $tmpObj = $this->new_node();
            $tmpObj->path = $this->emptyPath();
            return $tmpObj;
        }
        elseif (
                is_null($this->pid) &&
                (($this->width < $bigger_side_size && $this->width >= $this->height) ||
                ($this->height < $bigger_side_size && $this->height > $this->width))
        )
        {
            return $this;
        }
        else
            return $this->_resize($bigger_side_size, $this->id);
    }

    /**
     * _resize
     *
     * @param int $bigger_side_size bigger side size
     * @param int $pid              pid
     *
     * @return string
     */
    private function _resize($bigger_side_size, $pid=0)
    {
//dumper($this->path, $this->width, $this->height,$this->pid);
        $nome_foto = $this->_hashFileName();
//dumper("nome foto:".$nome_foto);
        $thumbPath = dirname($this->path) . "/" . $nome_foto . "." . $this->type;
//dumper($pid." - ".$bigger_side_size);
//dumper("thumb:".$thumbPath,"source:".$this->path);
        $sourceImage = ((substr($this->path, 0, 1) == ".") ? "" : ".") . $this->path;

        $image = Image::factory($sourceImage);
        if ($image->width >= $bigger_side_size or $image->height > $bigger_side_size)
        {
            @$image->resize($bigger_side_size, $bigger_side_size);
        }
        $image->save("." . $thumbPath, 100);
        $thumbImage = Image::factory("." . $thumbPath);

        $thumb = $this->new_node();
        $thumb->pid = $pid;
        $thumb->size = filesize("." . $thumbPath);
        $thumb->path = $thumbPath;
        $thumb->width = $thumbImage->width;
        $thumb->height = $thumbImage->height;
        $thumb->type = $this->extensions[$thumbImage->type];
        $thumb->created = date('Y-m-d H:i:s');
        $thumb->save();

        return $thumb;
    }

    public function crop($width, $height, $x=null, $y=null, $x2=null, $y2=null)
    {
//	dumper($this->path, $this->loaded(), $this->is_empty());
        if (!$this->loaded() || $this->is_empty())
        {
            return $this;
        }

        if ($x === null && $y === null && $x2 === null && $y2 === null)
        {
            //horizontal
            if ($this->width > $this->height)
            {
                $x = (int) round(($this->width - $this->height) / 2);
                $y = 0;
                $x2 = (int) $x + $this->height;
                $y2 = (int) $this->height;
            }
            //vertical
            elseif ($this->width < $this->height)
            {
                $y = (int) round(($this->height - $this->width) / 2);
                $x = 0;
                $x2 = (int) $this->width;
                $y2 = (int) $y + $this->width;
            }
            //quadrado
            else
            {
                $x = 0;
                $y = 0;
                $x2 = (int) $this->width;
                $y2 = (int) $this->height;
            }
        }
//        if ($width == 176)
//            dumper($this->id, $width, $height, $this->width, $this->height, $x, $y, $x2, $y2);
//dumper($x, $y, $x2, $y2,$x2 - $x, $y2 - $y);die;
        if (!is_numeric($width) || !is_numeric($height)
                || !is_numeric($x) || !is_numeric($y)
                || !is_numeric($x2) || !is_numeric($y2)
                || $x >= $x2 || $y >= $y2)
        {
            return $this->new_node();
        }

        if ($this->has_childs())
        {
            $imgObj = $this->new_node()
                            ->where('pid', '=', $this->id)
                            ->where('width', '=', $width)
                            ->where('height', '=', $height)
                            ->where('y', '=', $y)
                            ->where('x', '=', $x)
                            ->where('y2', '=', $y2)
                            ->where('x2', '=', $x2)
                            ->find();

            if ($imgObj->loaded())
            {
                if (!file_exists("." . $imgObj->path))
                {
                    $imgObj->path = $this->emptyPath();
                }
//                dumper($imgObj->loaded,$imgObj);die;
                return $imgObj;
            }
//            else{
//                dumper($imgObj->loaded,$imgObj);die;
//            }
        }

        $nome_foto = $this->_hashFileName();
//dumper("nome foto:".$nome_foto);
        $thumbPath = dirname($this->path) . "/" . $nome_foto . "." . $this->type;
//dumper($pid." - ".$bigger_side_size);
//dumper("thumb:".$thumbPath,"source:".$this->path);
        $sourceImage = ((substr($this->path, 0, 1) == ".") ? "" : ".") . $this->path;

        $image = Image::factory($sourceImage);
        $image->crop($x2 - $x, $y2 - $y, $x, $y);
        $image->resize($width, $height);
        $image->save("." . $thumbPath);
        $thumbImage = Image::factory("." . $thumbPath);

        $thumb = $this->new_node();
        $thumb->pid = $this->id;
        $thumb->size = filesize("." . $thumbPath);
        $thumb->path = $thumbPath;
        $thumb->width = $width;
        $thumb->height = $height;
        $thumb->type = $this->extensions[$thumbImage->type];
        $thumb->created = DB::expr('now()');
        $thumb->y = $y;
        $thumb->x = $x;
        $thumb->y2 = $y2;
        $thumb->x2 = $x2;
        $thumb->save();

        return $thumb;
    }

    /**
     * adicionar uma imagem a partir de um ficheiro no sistema de ficheiros do servidor
     *
     * @param string $filenamePath filename path
     * @param int    $content_id   content id
     *
     * @return void
     */
    function addImg($filenamePath, $content_id)
    {
        $nome_foto = $this->_hashFileName();
        $fileDir = $this->_getDirName($content_id);
        $remote = false;

        //$filenamePath=((substr($filenamePath, 0, 1)==".")?"":".").$filenamePath;
        $ext = "";
        if (is_numeric(strpos($filenamePath, 'http://')) || is_numeric(strpos($filenamePath, 'ftp://')))
        {
            $ext = pathinfo($filenamePath, PATHINFO_EXTENSION);
            $ch = curl_init($filenamePath);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
            $rawdata = curl_exec($ch);
            curl_close($ch);
            $filenamePath = './datastore/tmp_img/' . $nome_foto . "." . $ext;
            $fp = fopen($filenamePath, 'x');
            fwrite($fp, $rawdata);
            fclose($fp);
            $remote = true;
        }


        if (file_exists($filenamePath))
        {
            $filename = basename($filenamePath);
            list($file_width, $file_height, $type, $attr) = getimagesize($filenamePath);

            if ($file_width > self::MAX_SIDE_SIZE)
            {
                $file_width = self::MAX_SIDE_SIZE;
            }
            if ($file_height > self::MAX_SIDE_SIZE)
            {
                $file_height = self::MAX_SIDE_SIZE;
            }

//            list($name, $ext)=explode('.', $filename);
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
        }
        else
        {
            throw new Exception("$filenamePath is not a valid image path.");
        }

        $imgPath = $fileDir . $nome_foto . "." . $ext;
        //$imgPath=((substr($imgPath, 0, 1)==".")?"":".").$imgPath;

        try
        {
            $image = Image::factory($filenamePath);
            $image->resize($file_width, $file_height);
//dumper("." . $imgPath);
            $image->save("." . $imgPath);

            $thumb = $this->new_node();
            $thumb->pid = null;
            $thumb->size = filesize("." . $imgPath);
            $thumb->path = $imgPath;
            $thumb->width = $image->width;
            $thumb->height = $image->height;
            $thumb->type = $this->extensions[$image->type];
            $thumb->created = date('Y-m-d H:i:s');
            $thumb->save();
//dumper($thumb);die;
            if ($remote)
            {
                unlink($filenamePath);
            }

            return $thumb;
        }
        catch (Exception $e)
        {
            kohana_log::instance()->add('Model_Image error', $e->getMessage());
            return null;
        }
    }

    function delete_childs()
    {
        foreach ($this->get_childs() as $child)
        {
            if ($child->has_childs())
            {
                $child->clear_childs();
            }

            unlink("." . $child->path);
            $child->delete();
        }
    }

    function toHTML($title='', $fullpath=false, $style="")
    {
        $path = $this->emptyPath();
        if ($this->loaded())
        {
            $path = $this->path;
        }

        if ($fullpath)
        {
            $path = substr(url::base(false, true), 0, -1) . $path;
        }

        return '<img title="' . $title . '" alt="' . $title . '" src="' . $path . '"' . ((!empty($style)) ? 'style="' . $style . '"' : '') . '/>';
    }

    function emptyPath()
    {
        return $this->empty_path;
    }

    function setEmptyPath($path)
    {
        if (is_file($path))
        {
            $this->empty_path = $path;
        }
    }

}
