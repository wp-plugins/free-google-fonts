<?php
/*
Plugin Name: KAPlugins GFonts - Google Fonts For WordPress
Plugin URI: http://powerposts.net/
Description: Easy add fonts from Google Fonts to your TinyMCE and WordPress!
Author: KAPlugins
Version: 1.2
Author URI: http://powerposts.net/
*/

require_once 'engine/GFonts.Engine.php';
require_once 'engine/GFonts.DB.php';
require_once 'engine/GFonts.UI.php';

define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_BASENAME', plugin_basename(__FILE__));
$gfe = new GFontsEngine();
$gfe->Run(__FILE__);

//+ dorobić informacje ile w koszu jest

?>