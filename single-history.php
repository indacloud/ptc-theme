<?php
  get_header();
?>
<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="history-container row">
    <?php if(has_post_thumbnail()): ?>
    <div class="col col-sm-4">
      <div class="picture text-center">
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      </div>
      <?php
      $testimonial = get_field('testimonial');
      if(!empty($testimonial)):
      ?>
        <div class="testimonial">
          <p class="testi-text">
            <?php echo '&laquo; '.$testimonial. ' &raquo;'; ?>
          </p>
        </div>
        <div class="text-right">
          <?php
            echo('<strong>'. get_field('testimonial_author') .'</strong>');
            $testimonial_author_description = get_field('testimonial_author_description');
            if(!empty($testimonial_author_description))
              echo ', '. $testimonial_author_description;
          ?>
        </div>
      <?php endif; ?>

    </div>
    <div class="col col-sm-8">
    <?php else: ?>
    <div class="col col-sm-12">
    <?php endif; ?>

      <h1><?php the_title(); ?></h1>
      </a>
      <div class="content">
        <?php the_content(); ?>
      </div>


    </div>

  </div>

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