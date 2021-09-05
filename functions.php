<?php

function testtheme_enqueue_style() {
    wp_enqueue_style("test-style", get_stylesheet_uri());

}
add_action("wp_enqueue_scripts", "testtheme_enqueue_style");

?>