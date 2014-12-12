<?php
  // Index file

 get_header();
 ?>

  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- post -->
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php endwhile; ?>
    <!-- post navigation -->
    <?php ptc_paging_nav(); ?>
    <?php else: ?>
    <!-- no posts found -->
    <div>
      <?php get_template_part( 'content', 'none' ); ?>
    </div>
    <?php endif; ?>
  </div>

<?php
get_footer();
