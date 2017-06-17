

<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?>

    <?php the_content(); ?>

  <?php endwhile; ?>

<?php else : ?>

  <p>記事がありませんでした</p>

<?php endif; ?>





<?php get_footer(); ?>
