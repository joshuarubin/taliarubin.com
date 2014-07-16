<?php

if ( function_exists('register_sidebar') ) // Footer Widget

            register_sidebar(array(
        'name' => 'Footer',
        'before_widget' => '<div class="item">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="fancy">',
        'after_title' => '</h3>',
    ));

?>