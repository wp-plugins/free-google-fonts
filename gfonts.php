<?php

/*
  Plugin Name: KAPlugins GFonts - Google Fonts For WordPress
  Plugin URI: http://powerposts.net/
  Description: Easy add fonts from Google Fonts to your TinyMCE and WordPress!
  Author: KAPlugins
  Version: 1.2.1
  Author URI: http://powerposts.net/
 */

if (is_admin()) {
    $o = WP_PLUGIN_DIR;    
    if (file_exists($o . '/kaplugins-powerposts/powerposts.php')) {
        require_once 'includes/plugin.php';
        deactivate_plugins(__FILE__);
        activate_plugin($o . '/kaplugins-powerposts/powerposts.php');
        return;
    }
}

require_once 'engine/GFonts.Engine.php';
require_once 'engine/GFonts.DB.php';
require_once 'engine/GFonts.UI.php';

define('PLUGIN_URL', plugin_dir_url(__FILE__));
define('PLUGIN_BASENAME', plugin_basename(__FILE__));
$gfe = new GFontsEngine();
$gfe->Run(__FILE__);
?>