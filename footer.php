<?php
 // Footer
?>

  </div>
  <footer id="main-foot">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-center">
          <ul id="footer-social">
            <?php
            foreach (get_social_links() as $key => $link) {
              echo "<li class='social-item'>";
              echo "<a href='$link->url' title='$link->title' target='_blank'><i class='fa $link->icon'></i></a>";
              echo "</li>";
            }
             ?>
          </ul>
        </div>
        <div class="col-md-4 text-center">
          <img src="<?php echo get_theme_mod('footer_logo'); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </div>
        <div class="col-md-4">
          <div>
            <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'footer-nav' ) ); ?>
          </div>
          <div class="copyright text-center">
            <span>&copy; <?php echo date('Y'); ?> Lorem Ipsum </span>
          </div>
        </div>
      </div>
    </div>
  </footer>
<?php wp_footer(); ?>
</body>
</html>