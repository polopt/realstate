<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Shindig_Media extends Controller {

	public function action_get()
	{
		// Get the file path from the request
		$file = $this->request->param('file');

		// Find the file extension
		$ext = pathinfo($file, PATHINFO_EXTENSION);

		// Remove the extension from the filename
		$path = substr($file, 0, -(strlen($ext) + 1));

		// Find the full path to the file
		$path = Kohana::find_file('media', $path, $ext);

		if ( ! $path)
		{
			throw new Shindig_Exception('File does not exist: :file', array(':file' => $file));
		}

		// Set the content type for this extension
		$this->request->headers['Content-Type']   = File::mime_by_ext($ext);
		$this->request->headers['Content-Length'] = filesize($path);

		// Open the file and send the entire contents
		$file = fopen($path, 'rb');
		fpassthru($file);
		fclose($file);
	}

}