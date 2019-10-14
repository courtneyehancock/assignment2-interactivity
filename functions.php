<?php
//Adds featured imgs to posts
  add_theme_support('post-thumbnails');

/*-------------------------------------

Adds style sheet and JavaScript files

-----------------------------------------*/

  function custom_theme_scripts() {
  //Bootstrap integration
    wp_enqueue_style('bootstrap', get_template_directory_uri() . 'css/bootstrap.min.css');

  //main CSS
    wp_enqueue_style('main-styles', get_stylesheet_uri());

  //Javascript files
    wp_enqueue_script('custom-js', get_template_directory_uri() . 'js/main.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . 'js/bootstrap.min.js');

  }

  add_action('wp-enqueue_scripts', 'custom_theme_scripts');

  /*-------------------------------------

  Custom Header Logo -- creates the option to add a header image in the WordPress dashboard

  -----------------------------------------*/

  $custom_image_header = array(
    'width' => 225,
    'height' => 120,
    'uploads' => true,
  );

  add_theme_support('custom-header', $custom_image_header);

  ?>
?>
