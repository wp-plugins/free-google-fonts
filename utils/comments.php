<?php
print "<div id=\"gfcustomizedcomments\">";
//$th = wp_get_theme();
//$name = $th->get('Name');
//$f = get_option('gf_customizator_theme_' . $name);
$f = COMMENT_INCLUDE_FILE;
if (file_exists($f)) {
    require($f);
}
print "</div>";
