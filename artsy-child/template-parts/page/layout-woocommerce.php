<?php while( have_posts() ) : the_post(); ?>

  <div id="content">
    <div class="container">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; ?>
