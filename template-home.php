<?php
/*
Template Name: Home page
*/

 get_header();
 ?>

  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- post -->
    <div>
      <?php the_content(); ?>
    </div>
    <?php endwhile; ?>

    <!-- sidebar -->
    <?php if ( is_active_sidebar( 'home-widgets' ) ) : ?>
      <div id="home-widgets" class="row">
        <?php dynamic_sidebar( 'home-widgets' ); ?>
      </div>
    <?php endif; ?>

    <!-- Testimonials -->
    <?php
      $t_loop = get_testimonials();
      if( $t_loop->have_posts() ):
    ?>
      <div id="testimonials">
        <div class="swiper-container">
          <div class="swiper-wrapper">


    <?php
        while ( $t_loop->have_posts() ) : $t_loop->the_post();
     ?>
          <div class="swiper-slide">
            <div class="quote">
              <a href="testimonial">
                <?php the_excerpt(); ?>
              </a>
            </div>
            <div class="author">
              <?php
              echo "<span class='author-name'>" . get_field('testimonial_author') . "</span>";
              if( get_field('author_description') )
                echo ", " . get_field('author_description')

              ?>

            </div>
          </div>
    <?php
        endwhile;
    ?>
          </div>
        </div>
        <div class="swiper-ctrls">
          <div class="swiper-ctrl left">
            <i class="fa fa-chevron-circle-left"></i>
          </div>
          <div class="swiper-ctrl right">
            <i class="fa fa-chevron-circle-right"></i>
          </div>
        </div>
      </div>
    <?php
      endif;
    ?>

    <?php if ( is_active_sidebar( 'home-social-widgets' ) ) : ?>
      <div id="home-social-widgets" class="row">
        <?php dynamic_sidebar( 'home-social-widgets' ); ?>
      </div>
    <?php endif; ?>

    <?php else: ?>
    <!-- no posts found -->
    <div>
      <?php get_template_part( 'content', 'none' ); ?>
    </div>
    <?php endif; ?>
  </div>

<?php
get_footer();
?>