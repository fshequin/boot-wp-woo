<?php
// Register some javascript files, because we love javascript files. Enqueue a couple as well

function boot_load_javascript_files() {

  //wp_register_script( 'info-caroufredsel', get_template_directory_uri() . '/js/jquery.carouFredSel-5.5.0-packed.js', array('jquery'), '5.5.0', true );
  //wp_register_script( 'info-carousel-instance', get_template_directory_uri() . '/js/info-carousel-instance.js', array('info-caroufredsel'), '1.0', true );
  //wp_register_script( 'imagesLoaded', get_template_directory_uri().'/js/imagesLoaded.min.js', array('jquery'), false, true );
  //wp_register_script( 'masonry', get_template_directory_uri().'/js/masonry.min.js', array('jquery'), false, true);
  wp_register_script( 'bootstrap-js', get_template_directory_uri().'/bower_components/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '3.3.1', true );
  //wp_register_script( 'vegas', get_template_directory_uri().'/js/vegas/jquery.vegas.min.js', array('jquery'), false, true );
  //wp_register_script( 'ddsmoothmenu-init', get_template_directory_uri().'/js/ddsmoothmenu-init.js', array('ddsmoothmenu'), '', true);
  //wp_register_script( 'pinterest', '//assets.pinterest.com/js/pinit.js', false, false, true );
  //wp_register_script( 'bootstrap-toolkit', get_template_directory_uri().'/js/bootstrap-toolkit.min.js', array('jquery'), '2.1.0', true );
  wp_register_script( 'site-js', get_template_directory_uri().'/js/site.min.js', array('jquery'), false, true );
  //wp_register_script( 'home-page-main-flex-slider', get_template_directory_uri().'/js/home-page-main-flex-slider.js', array('jquery.flexslider'), '1.0', true );

  //wp_enqueue_script( 'jquery' );
  //wp_enqueue_script( 'jquery-ui-core' );
  //wp_enqueue_script( 'imagesLoaded' );
  //wp_enqueue_script( 'masonry' );
  //wp_enqueue_script( 'thickbox' );
  wp_enqueue_script( 'bootstrap-js' );
  //wp_enqueue_script( 'vegas' );
  //wp_enqueue_script( 'pinterest' );
  //wp_enqueue_script( 'bootstrap-toolkit' );
  wp_enqueue_script( 'site-js' );

}

add_action( 'wp_enqueue_scripts', 'boot_load_javascript_files' );
