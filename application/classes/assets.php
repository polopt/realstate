<?php

defined('SYSPATH') or die('No direct access allowed.');

class Assets {

    static protected $js = array();
    static protected $css = array();
    static protected $asset_counter = 0;
    static protected $static_domains = array();
    static protected $nr_static_domains = 0;

    static public function js()
    {
        return self::$js;
    }

    static public function css()
    {
        return self::$css;
    }

    /**
     * adds a file or array of files of a given type to the corresponding stack.
     *
     * @param string|array $file file path, or array of file paths
     * @param string       $type type of file: js|css
     *
     * @return bool
     */
    static protected function add($file, $type, $media=null)
    {
        if (!isset(self::$$type))
        {
            return false;
        }
        if (is_array($file))
        {
            foreach ($file as $f)
            {
                self::add($f, $type, $media);
            }
        }
        else
        {
            if (!in_array(array($file => $media), self::$$type))
            {
                self::${$type}[$file] = $media;
            }
        }
        return true;
    }

    /**
     * adds a javascript file to the assets.
     *
     * @param string|array $file file path, or array of file paths
     *
     * @return bool
     */
    static public function add_js($file, $media='text/javascript')
    {
        return self::add($file, 'js', $media);
    }

    /**
     * adds a css file to the assets.
     *
     * @param string|array $file file path, or array of file paths
     * @param string $media media type, screen;projection;print
     *
     * @return bool
     */
    static public function add_css($file, $media='screen')
    {
        return self::add($file, 'css', $media);
    }

    static public function add_plugin($plugins)
    {
        if (is_string($plugins))
            $plugins = array($plugins);

        foreach ($plugins as $plugin)
        {
            switch ($plugin)
            {
                case 'facebox':
                    self::add_css('media/css/facebox.css');
                    self::add_js('media/js/facebox.js');
                    break;

                case 'lightbox':
                    self::add_css('media/css/jquery.lightbox.css');
                    self::add_js('media/js/jquery.lightbox.js');
                    break;

                case 'alerts':
                    self::add_css('media/css/jquery.alerts.css');
                    self::add_js('media/js/jquery.alerts.js');
                    break;

                case 'carousel':
                    self::add_css('media/css/jquery.carousel.css');
                    self::add_js('media/js/jquery.carousel.js');
                    break;
                
                case 'grumble':
                    self::add_css('media/css/jquery.grumble.css');
                    self::add_js('media/js/jquery.grumble.js');
                    break;

                case 'jquery-ui':
                    self::add_css('media/css/jquery-ui-1.8.15.custom.css');
                    self::add_js('media/js/jquery-ui-1.8.15.custom.min.js');
                    break;

                case 'uploadify':
                    self::add_js('media/uploadify/swfobject.js');
                    self::add_js('media/uploadify/jquery.uploadify.v2.1.4.min.js');
                    self::add_css('media/uploadify/uploadify.css');
                    break;
                
                case 'jwysiwyg':
                    self::add_js('media/jwysiwyg/jquery.wysiwyg.js');
                    self::add_js('media/jwysiwyg/controls/wysiwyg.image.js');
                    self::add_js('media/jwysiwyg/plugins/wysiwyg.fileManager.js');
                    self::add_css('media/jwysiwyg/jquery.wysiwyg.css');
                    self::add_css('media/jwysiwyg/plugins/fileManager/wysiwyg.fileManager.css');
                    break;
            }
        }
    }

}
