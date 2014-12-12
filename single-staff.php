<?php

get_header();

 ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    $background_color = get_field('background_color');
    $text_color = get_field('text_color');
    $layout = get_field('layout');
  ?>
  <style type="text/css">
    .staff-<?php echo get_the_id(); ?>{
      background: <?php echo $background_color; ?>;
      color: <?php echo $text_color; ?>;
    }
    .staff-<?php echo get_the_id(); ?> h2 a:link{
     color: <?php echo $text_color; ?>;
    }
    .staff-<?php echo get_the_id(); ?> h2 a:hover{
     color: <?php echo $text_color; ?>;
    }
  </style>

  <div class="staff-member <?php echo 'staff-'.get_the_id(); ?>" >
    <div class="container">
      <div class="row">
        <div class="staff-photo col-md-5">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="staff-content col-md-7">
            <h2>
              <?php the_title(); ?>
            </h2>
            <div class="">
              <?php the_content(); ?>
            </div>
          </div>
      </div>
    </div>
  </div>


<?php endwhile; ?>
<!-- post navigation -->

<?php else: ?>
<!-- no posts found -->
<div>
  <?php get_template_part( 'content', 'none' ); ?>
</div>
<?php endif; ?>

<?php
get_footer();