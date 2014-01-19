<?php

class GFontsUI {

    static public function Success($txt) {
        print "<div style=\"min-height: 40px; font-weight: bold; border: 1px solid #000; background-image: url(" . PLUGIN_URL ."assets/40x40/successsq.png); background-size: 40px 40px; background-position: left center; background-position-x: 10px; background-repeat: no-repeat; background-color: #E1F6A8; margin: 10px; padding: 5px 5px 5px 55px; font-family: HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,sans-serif; border-radius: 5px; -moz-border-radius: 5px;\">";
        print $txt;
        print "</div>";
    }
    
    static public function Error($txt) {
        print "<div style=\"min-height: 40px; font-weight: bold; border: 1px solid #000; background-image: url(" . PLUGIN_URL . "assets/40x40/errorsq.png); background-size: 40px 40px; background-position: left center; background-position-x: 10px; background-repeat: no-repeat; background-color: #FFA8A8; margin: 10px; padding: 5px 5px 5px 55px; font-family: HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,sans-serif; border-radius: 5px; -moz-border-radius: 5px;\">";
        print $txt;
        print "</div>";
    }
    
    static public function Notice($txt) {
        print "<div style=\"min-height: 40px; font-weight: bold; border: 1px solid #000; background-image: url(" .  PLUGIN_URL ."assets/40x40/infosq.png); background-size: 40px 40px; background-position: left center; background-position-x: 10px; background-repeat: no-repeat; background-color: #C8E6EE; margin: 10px; padding: 5px 5px 5px 55px; font-family: HelveticaNeue-Light,Helvetica Neue Light,Helvetica Neue,sans-serif; border-radius: 5px; -moz-border-radius: 5px;\">";
        print $txt;
        print "</div>";
    }

}

?>
