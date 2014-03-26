<?php defined('SYSPATH') or die('No direct script access.');

Class Sprig_Field_Tinymce extends Sprig_Field_Char
{
	public function input($name, $value, array $attr = NULL)
	{
		$input[] = '<script type="text/javascript">';
		$input[] = 'tinyMCE.init({';
		
		$input[] = 'mode: "exact",';
    	$input[] = 'elements : "'.$name.'",';
		
		$options = Kohana::config('tinymce');

		foreach( $options as $key => $option )
		{
			$input[] = $key.' : "'.$option.'",';
		}
				
		$input[] = '});';
		$input[] = '</script>';
		
		if(! isset($attr['id']) )
		{
			$attr['id'] = $name;
		}
		
		$input[] = Form::textarea($name, $value, $attr);
		
		return "\n".implode("\n", $input)."\n";
	}
	
}