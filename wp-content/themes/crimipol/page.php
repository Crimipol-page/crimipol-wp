<?php get_header(); ?>
<main class="container section">
  <?php
  while (have_posts()) : the_post();

    the_title('<h1 class="text-primary text-center">', '</h1>');

    the_post_thumbnail('full', array('class' => 'imagen-destacada'));

    the_content();
  endwhile;
  ?>
</main>
</body>

</html>