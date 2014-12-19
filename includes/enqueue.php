<?php
function bower_dir(){
  return get_template_directory_uri() . '/bower_components';
}

// Register Style
function idt_styles() {

  if(WP_DEBUG){
    wp_register_style( 'bootstrap', bower_dir() . '/bootstrap/dist/css/bootstrap.css', false, false );
    wp_register_style( 'font-awesome', bower_dir() . '/font-awesome/css/font-awesome.css', false, false );
  }
  else{
    wp_register_style( 'bootstrap', bower_dir() . '/bootstrap/dist/css/bootstrap.min.css', false, false );
    wp_register_style( 'font-awesome', bower_dir() . '/font-awesome/css/font-awesome.min.css', false, false );

  }
  wp_register_style( 'awesome-bootstrap-checkbox', bower_dir() . '/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css', false, false );
  wp_register_style( 'swiper', bower_dir() . '/swiper/dist/idangerous.swiper.css', false, false );

  wp_register_style( 'ptc', get_template_directory_uri() . '/css/ptc.css', false, false );

  wp_enqueue_style( 'bootstrap' );
  wp_enqueue_style( 'awesome-bootstrap-checkbox' );
  wp_enqueue_style( 'font-awesome' );
  wp_enqueue_style( 'swiper' );
  wp_enqueue_style( 'ptc' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'idt_styles' );

// Register Script
function idt_scripts() {

  wp_deregister_script( 'jquery' );
  if(WP_DEBUG){
    wp_register_script( 'jquery',  bower_dir() . '/jquery/dist/jquery.js', false, false, true );
    wp_register_script( 'bootstrap',  bower_dir() . '/bootstrap/dist/js/bootstrap.js', ['jquery'], false, true );
    wp_register_script( 'swiper',  bower_dir() . '/swiper/dist/idangerous.swiper.js', ['jquery'], false, true );
    wp_register_script( 'freetile',  bower_dir() . '/brandymint-freetile/jquery.freetile.js', ['jquery'], false, true );
  }
  else{
    wp_register_script( 'jquery',  bower_dir() . '/jquery/dist/jquery.min.js', false, false, true );
    wp_register_script( 'bootstrap',  bower_dir() . '/bootstrap/dist/js/bootstrap.min.js', ['jquery'], false, true );
    wp_register_script( 'swiper',  bower_dir() . '/swiper/dist/idangerous.swiper.min.js', ['jquery'], false, true );
    wp_register_script( 'freetile',  bower_dir() . '/brandymint-freetile/jquery.freetile.min.js', ['jquery'], false, true );
  }

  wp_register_script( 'modernizr',  bower_dir() . '/modernizr/modernizr.js', false, false, true );

  wp_register_script( 'app',  get_template_directory_uri()  . '/js/app.js', ['jquery', 'bootstrap'], false, true );

  wp_enqueue_script( 'modernizr' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap' );
  wp_enqueue_script( 'swiper' );
  wp_enqueue_script( 'freetile' );
  wp_enqueue_script( 'app' );


}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'idt_scripts' );
 ?>