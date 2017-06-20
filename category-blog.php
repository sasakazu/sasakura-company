
<?php get_header(); ?>


<div class="container blog-wrapper">
<h2 id="blog-title">Blog</h2>

<?php if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>


    <a href="<?php echo get_permalink(); ?>">
      <h3><?php the_title(); ?><small><?php the_time('Y.m.d'); ?></small></h3>
    </a>

    <hr>




  <?php endwhile; ?>

<?php else : ?>

  <p>記事がありませんでした</p>

<?php endif; ?>


</div>



<?php get_footer(); ?>
