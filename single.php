


<?php get_header(); ?>

<div class="container single-wrapper">



<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?><small><?php the_time('Y m d'); ?></small></h2>

    <p><?php the_content(); ?></p>


  <?php endwhile; ?>

<?php else : ?>

  <p>記事がありませんでした</p>

<?php endif; ?>


</div>



<?php get_footer(); ?>
