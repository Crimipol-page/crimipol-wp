<?php

// Registrar Custom Post Type para el carrusel
function registrar_carrusel_post_type()
{
  register_post_type('carrusel', array(
    'labels' => array(
      'name' => __('Carrusel'),
      'singular_name' => __('Carrusel')
    ),
    'public' => true,
    'has_archive' => false,
    'supports' => array('title', 'thumbnail'),
  ));
}
add_action('init', 'registrar_carrusel_post_type');

// Creamos la funcion de setup

function crimipol_setup()
{
  // Imagenes Destacadas
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'crimipol_setup');

function crimipol_menus()
{
  register_nav_menus(array(
    'menu-principal-izq' => __('Menu Principal Izquierda', 'crimipol'),
    'menu-principal-der' => __('Menu Principal Derecha', 'crimipol'),
    'redes-sociales' => __('Redes Sociales', 'crimipol')
  ));
}

add_action('init', 'crimipol_menus');

function crimipo_scripts_styles()
{
  // Enqueue Normalize CSS
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');

  // Enqueue Tailwind CSS
  wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/base.min.css', array(), '3.4.1');

  // Enqueue your custom styles
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'tailwind'), '1.0.0');

  // scripst
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'crimipo_scripts_styles');
