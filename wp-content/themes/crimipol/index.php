<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header class="header">
    <nav class="nav">
      <div class="links">
        <a href="./servicios.html" class="link">Servicios</a>
        <a href="./Blog.html" class="link">Blog</a>
      </div>
      <h1 class="header_nav">Crimipol</h1>
      <div class="links">
        <a href="./servicios.html" class="link">Nosotros</a>
        <a href="./Blog.html" class="link">Contactos</a>
      </div>
    </nav>
  </header>
  <main>
    <?php
    while (have_posts()) : the_post();

      the_title();

      the_content();
    endwhile;
    ?>
  </main>
</body>

</html>