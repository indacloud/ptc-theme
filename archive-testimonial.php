<?php
  get_header();
?>
<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="testimonial-container row">
    <div class="col col-md-3 text-center">
      <div class="avatar">
        <?php if(has_post_thumbnail()): ?>
          <div>
          <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="author">
        <?php
        echo "<p class='author-name'>" . get_field('testimonial_author') . "</p>";
        echo "<p class='author-description'>" . get_field('author_description') . "</p>";
        ?>
      </div>

    </div>
    <div class="col col-md-9">
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