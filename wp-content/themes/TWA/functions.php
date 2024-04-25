 <?php

function TWA_setup_theme () {
    //HTML5 para los formularios de búsqueda, comentarios, galerías...
$supports= [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
];

// Soporte para imágenes destacadas

add_theme_support( 'post-thumbnails', array("post", "page") );

// Soporte para etiqueta <title> dentro de <head>

add_theme_support( 'title-tag' );

// Soporte para Feed automático para posts y comentarios

add_theme_support( 'automatic-feed-links' );

// Anchura del contenido, sirve especialmente para videos.

$GLOBALS['content_width'] = 1130;
}
add_action( 'after_setup_theme', 'TWA_setup_theme' );

function TWA_enqueue_scripts() {

}

add_action( 'wp_enqueue_scripts', 'TWA_enqueue_scripts' ); 

register_nav_menus(); //Aquí se añadirán más cosas.

?>