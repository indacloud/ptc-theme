<?php
/*
Template Name: Boxed
*/

 get_header();
 ?>

  <div class="container">
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- post -->
    <div class="col col-md-12 content">
      <div class="inner-col">
        <h1><?php the_title(); ?></h1>
        <div class="text">
        <?php the_content(); ?>
        </div>
      </div>
    </div>


    <?php endwhile; ?>

    <?php else: ?>
    <!-- no posts found -->
    <div>
      <?php get_template_part( 'content', 'none' ); ?>
    </div>
    <?php endif; ?>
    </div>
  </div>

<?php
get_footer();
?>