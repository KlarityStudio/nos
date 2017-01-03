<?php
/*

@package Nos

    ==============================
        Register our sidebars and widgetized areas.
    ==============================
*/


add_filter('widget_text', 'do_shortcode');

add_action( 'widgets_init', 'nos_widget_init' );

function nos_widget_init() {
	register_sidebar( array(
		'name'          => 'Home Filter Sidebar',
		'id'            => 'home_filter',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
    register_widget( 'nos_widget' );
}

class nos_widget extends WP_Widget{

    public function __construct(){
        $widget_details = array(
            'classname' => 'filter_widget',
            'description' => 'Pre Owned Car filter widget'
        );
        parent::__construct( 'nos_widget', 'Filter widget', $widget_details );
    }

    public function form( $instance ) {
		global $args;
		$title = '';

	    if( !empty( $instance['title'] ) ) {
	        $title = $instance['title'];
	    }

	    $text = '';
	    if( !empty( $instance['text'] ) ) {
	        $text = $instance['text'];
	    }?>

	    <p>
	        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	    </p>

	    <p>
	        <label for="<?php echo $this->get_field_name( 'text' ); ?>"><?php _e( 'Text:' ); ?></label>
	        <textarea class="widefat" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>" type="text" ><?php echo esc_attr( $text ); ?></textarea>
	    </p>

	    <div class='mfc-text'>

	    </div>

	    <?php

	    echo $args['after_widget'];
	}

    public function update( $new_instance, $old_instance ) {
        return $new_instance;

    }

    public function widget( $args, $instance ) { ?>
		<h2><?php echo $instance['title']; ?></h2>

		<div class="">
			<?php $html = $instance['text'];
			if(strpos($html,"<"."?php")!==false){ ob_start(); eval("?".">".$html);
			$html=ob_get_contents();
			ob_end_clean();
			}
			echo $html; ?>
		</div>

<?php }

}
