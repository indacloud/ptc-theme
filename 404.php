<?php
  // Index file

 get_header();
 ?>

  <div class="container">
    <h1>There's something wrong with the link</h1>
    <p>
      Try going back to the
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page</a>
      .
    </p>
  </div>

<?php
get_footer();
