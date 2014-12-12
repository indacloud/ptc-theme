<?php
class ptc_home_widget extends WP_Widget {

  /**
   * Sets up the widgets name etc
   */
  public function __construct() {
    parent::__construct(
      'ptc_home_widget', // Base ID
      __( 'PTC Home widget', 'ptc' ), // Name
      array( 'description' => __( 'Home page card with link', 'ptc' ), ) // Args
    );
  }

  /**
   * Outputs the content of the widget
   *
   * @param array $args
   * @param array $instance
   */
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '<div class="hw-content">';
    echo '<div class="hw-image">';
    if( ! empty( $instance['image'] ))
      echo '<a href="'.$instance['link'].'">';
      echo '<img src="'.$instance['image'].'" />';
      echo '</a>';
    if( ! empty( $instance['icon'] )){
      echo '<div class="hw-icon">';
      echo '<img src="'.$instance['icon'].'" />';
      echo '</div>';
    }
    echo '</div>';
    echo '<div class="hw-title">';
    if ( ! empty( $instance['title'] ) )
      echo apply_filters( 'widget_title', $instance['title'] );
    echo '</div>';
    echo '<div class="hw-text">';
    if( ! empty( $instance['text'] ))
      echo $instance['text'];
    echo '</div>';
    echo '<div class="hw-link">';
    if( ! empty( $instance['link'] ))
      echo '<a href="'.$instance['link'].'">'.$instance['link_text'].'</a>';
    echo '</div>';
    echo '</div>';

    echo $args['after_widget'];
  }

  /**
   * Outputs the options form on admin
   *
   * @param array $instance The widget options
   */
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'ptc' );
    $image = ! empty( $instance['image'] ) ? $instance['image'] : 'http://';
    $icon = ! empty( $instance['icon'] ) ? $instance['icon'] : 'http://';
    $text = ! empty( $instance['text'] ) ? $instance['text'] : '';
    $link = ! empty( $instance['link'] ) ? $instance['link'] : 'http://';
    $link_text = ! empty( $instance['link_text'] ) ? $instance['link_text'] : '';
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image url:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" type="text" value="<?php echo esc_attr( $image ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'icon' ); ?>"><?php _e( 'Icon url:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'icon' ); ?>" name="<?php echo $this->get_field_name( 'icon' ); ?>" type="text" value="<?php echo esc_attr( $icon ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" type="text" value="<?php echo esc_attr( $text ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'link_text' ); ?>"><?php _e( 'Link text:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'link_text' ); ?>" name="<?php echo $this->get_field_name( 'link_text' ); ?>" type="text" value="<?php echo esc_attr( $link_text ); ?>">
    </p>
  <?php
  }

  /**
   * Processing widget options on save
   *
   * @param array $new_instance The new options
   * @param array $old_instance The previous options
   */
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
    $instance['icon'] = ( ! empty( $new_instance['icon'] ) ) ? strip_tags( $new_instance['icon'] ) : '';
    $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';
    $instance['link'] = ( ! empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
    $instance['link_text'] = ( ! empty( $new_instance['link_text'] ) ) ? strip_tags( $new_instance['link_text'] ) : '';

    return $instance;
  }
}

add_action( 'widgets_init', function(){
     register_widget( 'ptc_home_widget' );
});

// sidebar
$args = array(
  'name'          => __('Home page widgets', 'ptc'),
  'id'            => "home-widgets",
  'description'   => '',
  'class'         => 'home-widgets',
  'before_widget' => '<div id="%1$s" class="col-sm-4 widget %2$s">',
  'after_widget'  => "</div>\n",
  'before_title'  => '',
  'after_title'   => '',
);
register_sidebar( $args );


class ptc_home_social_widget extends WP_Widget {

  /**
   * Sets up the widgets name etc
   */
  public function __construct() {
    parent::__construct(
      'ptc_home_social_widget', // Base ID
      __( 'PTC Home Social widget', 'ptc' ), // Name
      array( 'description' => __( 'Home page social', 'ptc' ), ) // Args
    );
  }

  /**
   * Outputs the content of the widget
   *
   * @param array $args
   * @param array $instance
   */
  public function widget( $args, $instance ) {
    echo $args['before_widget'];
    echo '<div class="hw-content row">';
    echo '<div class="col col-md-8">';
    echo '<div class="hw-title">';
    if ( ! empty( $instance['title'] ) )
      echo apply_filters( 'widget_title', $instance['title'] );
    echo '</div>';
    echo '<div class="hw-text">';
    if( ! empty( $instance['text'] ))
      echo $instance['text'];
    echo '</div>';
    echo '</div>';
    echo '<div class="col col-md-4">';
    echo '<ul class="hw-social">';
    foreach (get_social_links() as $key => $link) {
      echo "<li class='social-item'>";
      echo "<a href='$link->url' title='$link->title' target='_blank'><i class='fa $link->icon_square'></i></a>";
      echo "</li>";
    }
    echo '</ul>';
    echo '</div>';
    echo '</div>';

    echo $args['after_widget'];
  }

  /**
   * Outputs the options form on admin
   *
   * @param array $instance The widget options
   */
  public function form( $instance ) {
    $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'ptc' );
    $text = ! empty( $instance['text'] ) ? $instance['text'] : '';
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text:', 'ptc' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" type="text" value="<?php echo esc_attr( $text ); ?>">
    </p>
  <?php
  }

  /**
   * Processing widget options on save
   *
   * @param array $new_instance The new options
   * @param array $old_instance The previous options
   */
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['text'] = ( ! empty( $new_instance['text'] ) ) ? strip_tags( $new_instance['text'] ) : '';

    return $instance;
  }
}

add_action( 'widgets_init', function(){
     register_widget( 'ptc_home_social_widget' );
});

// sidebar
$args_social = array(
  'name'          => __('Home page social widgets', 'ptc'),
  'id'            => "home-social-widgets",
  'description'   => '',
  'class'         => 'home-social-widgets',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => "</div>\n",
  'before_title'  => '',
  'after_title'   => '',
);
register_sidebar( $args_social );

 ?>