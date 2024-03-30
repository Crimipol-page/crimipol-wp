<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head() ?>
</head>

<body>
  <header class="header shadow">

    <div class="container header-menus">


      <?php
      $args = array(
        'theme_location' => 'menu-principal-izq',
        'container' => 'nav',
        'container_class' => 'menu-principal'
      );
      wp_nav_menu($args)
      ?>
      <a href="/">
        <h1 class="header_heading">Crimipol</h1>
      </a>

      <?php
      $args1 = array(
        'theme_location' => 'menu-principal-der',
        'container' => 'nav',
        'container_class' => 'menu-principal'
      );
      wp_nav_menu($args1)
      ?>
    </div>
  </header>