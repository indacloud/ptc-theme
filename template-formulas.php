<?php
/*
Template Name: Formulas
*/

 get_header();
 ?>

  <div class="container">
    <?php
      $header_text = get_field('formulas_header_text');
      if(!empty($header_text)):
    ?>
      <div class="row pre-content">
        <?php echo $header_text; ?>
      </div>
    <?php endif; ?>
    <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php
      $sidebar_text = get_field('formulas_sidebar_text');
      if(!empty($sidebar_text)):
    ?>
      <div class="col col-md-4 sidebar">
        <div class="inner-col">
          <div class="text">
            <?php echo $sidebar_text; ?>
          </div>
          <div class="sidebar-link">
            <a href="<?php echo get_field('formulas_sidebar_link'); ?>">
              <?php echo get_field('formulas_sidebar_link_text'); ?>
            </a>
          </div>
        </div>
      </div>
      <div class="col col-md-8 content">
    <?php
      else:
    ?>
      <div class="col col-md-12 content">
    <?php
      endif;
    ?>
    <!-- post -->
      <div class="inner-col">
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