<?php

/* 
Plugin Name: Events Listing in Sidebar
Plugin URI: https://www.presstigers.com 
Description: Plugin to show widgets to show events in sidebar
Version: 1.0
Author: PressTigers
Author URI: https://www.presstigers.com
License: GPLv2
*/

// called when widgets are initialized
add_action( 'widgets_init', 'brw_create_widgets' );
function brw_create_widgets() {
    register_widget( 'FundRising_Events' );
	register_widget( 'Conference_Events' );
}

class Conference_Events extends WP_Widget {
    // Construction function
    function __construct () {
        parent::__construct( 'conference_events', 'Conference Events',
                             array( 'description' => 'Displays list of conference events list' ) );
    }
    
    function form( $instance ) {
        // Retrieve previous values from instance or set default values if not present
        $widget_title = ( !empty( $instance['widget_title'] ) ? esc_attr( $instance['widget_title'] ) : 'Confenrece Events' );
		$conference_event_count = ( !empty( $instance['conference_event_count'] ) ? $instance['conference_event_count'] : 2 );
        
        ?>

        <!-- Display fields to specify title and item count -->
        <p>
            <label for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                <?php echo 'Widget Title:'; ?>           
                <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'widget_title' );?>"
                    name="<?php echo $this->get_field_name( 'widget_title' ); ?>"
                    value="<?php echo $widget_title; ?>" />           
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'conference_event_count' ); ?>">
                <?php echo 'Number of reviews to display:'; ?>           
                <input class="widefat" type="number" id="<?php echo $this->get_field_id( 'conference_event_count' ); ?>"
                    name="<?php echo $this->get_field_name( 'conference_event_count' ); ?>"
                    value="<?php echo $conference_event_count; ?>" />           
            </label>
        </p>
    <?php }
    
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        // Only allow numeric values
        if ( is_numeric ( $new_instance['conference_event_count'] ) )
            $instance['conference_event_count'] = intval( $new_instance['conference_event_count'] );
        else
            $instance['conference_event_count'] = $instance['conference_event_count'];

        $instance['widget_title'] = strip_tags( $new_instance['widget_title'] );
        
        return $instance;
    }
    
    function widget( $args, $instance ) {
		// Extract members of args array as individual variables
		extract( $args );
		
		// Retrieve widget configuration options
		$conference_event_count =  ( !empty( $instance['conference_event_count'] ) ? $instance['conference_event_count'] : 2 );
		$widget_title = ( !empty( $instance['widget_title'] ) ? esc_attr( $instance['widget_title'] ) : 'Book Reviews' );

		// Preparation of query string to retrieve book reviews
		$query_array = array(
			'post_type' => 'tribe_events',
			'post_status' => 'publish',
			'posts_per_page' => $conference_event_count,
			'tax_query' => array(
				array(
					'taxonomy' => 'tribe_events_cat',
					'field' => 'slug',
					'terms' => 'conference',
				),
			),
		);

		// Execution of post query
		$book_review_query = new WP_Query();
		$book_review_query->query( $query_array ); 
		
		// Display widget title
		echo '<div class="conference-calander"><div class="conf-heading"><h3>';
		echo apply_filters( 'widget_title', $widget_title );
		echo "</h3></div>";
		// Check if any posts were returned by query
		if ( $book_review_query->have_posts() ) {           
			
			// Cycle through all items retrieved
			while ( $book_review_query->have_posts() ) {
				$book_review_query->the_post();
				
				$_eventStart = get_post_meta(get_the_ID(), '_EventStartDate', true);
				$_eventEnd = get_post_meta(get_the_ID(), '_EventEndDate', true);
				$eventTimeZone = get_post_meta(get_the_ID(), '_EventTimezone', true);
				
				$_eventStartObj = strtotime($_eventStart);
				$_eventEndObj = strtotime($_eventEnd);
				
				$_eventStart = explode(" ", $_eventStart);
				$_eventEnd = explode(" ", $_eventEnd);
				
				if( $_eventStart[0] == $_eventEnd[0] ) {
					$time = '<p>'. date('F d', $_eventStartObj) .' @ '. date('h:i a', $_eventStartObj) .' - '.date('h:i a', $_eventEndObj).' '.$eventTimeZone.'</p>';
				} else {
					$time = '<p>'. date('F d', $_eventStartObj) .' @ '. date('h:i a', $_eventStartObj) .' - '.date('F d', $_eventEndObj).' @ '.date('h:i a', $_eventEndObj).' '.$eventTimeZone.' </p>';
				}
				
				echo '<div class="conf-box-section">';
				echo 	'<div class="conf-box">';
				echo		'<div class="conf-date">';
				echo			'<span>'. date('D', $_eventStartObj) .'</span>'.date('d', $_eventStartObj);
				echo		'</div>';
				echo		'<div class="conf-info">';
				echo			'<a href="' . get_permalink() . '">'. get_the_title( get_the_ID() ) .'</a>';
				echo			$time;
				echo		'</div>';
				echo	'</div>';
				echo '</div>';
				
				
			}
		} else {
			
		}
		echo "</div>";
		wp_reset_query(); 
		echo $after_widget;
    }    
}

class FundRising_Events extends WP_Widget {
    // Construction function
    function __construct () {
        parent::__construct( 'fundrising_events', 'FundRising Events',
                             array( 'description' => 'Displays list of fundrising events list' ) );
    }
    
    function form( $instance ) {
        // Retrieve previous values from instance or set default values if not present
        $widget_title = ( !empty( $instance['widget_title'] ) ? esc_attr( $instance['widget_title'] ) : 'FundRising Events' );
		$fundrising_event_count = ( !empty( $instance['fundrising_event_count'] ) ? $instance['fundrising_event_count'] : 1 );
        
        ?>

        <!-- Display fields to specify title and item count -->
        <p>
            <label for="<?php echo $this->get_field_id( 'widget_title' ); ?>">
                <?php echo 'Widget Title:'; ?>           
                <input class="widefat" type="text" id="<?php echo $this->get_field_id( 'widget_title' );?>"
                    name="<?php echo $this->get_field_name( 'widget_title' ); ?>"
                    value="<?php echo $widget_title; ?>" />           
            </label>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'fundrising_event_count' ); ?>">
                <?php echo 'Number of reviews to display:'; ?>           
                <input class="widefat" type="number" id="<?php echo $this->get_field_id( 'fundrising_event_count' ); ?>"
                    name="<?php echo $this->get_field_name( 'fundrising_event_count' ); ?>"
                    value="<?php echo $fundrising_event_count; ?>" />           
            </label>
        </p>
    <?php }
    
    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;

        // Only allow numeric values
        if ( is_numeric ( $new_instance['fundrising_event_count'] ) )
            $instance['fundrising_event_count'] = intval( $new_instance['fundrising_event_count'] );
        else
            $instance['fundrising_event_count'] = $instance['fundrising_event_count'];

        $instance['widget_title'] = strip_tags( $new_instance['widget_title'] );
        
        return $instance;
    }
    
    function widget( $args, $instance ) {
		// Extract members of args array as individual variables
		extract( $args );
		
		// Retrieve widget configuration options
		$fundrising_event_count =  ( !empty( $instance['fundrising_event_count'] ) ? $instance['fundrising_event_count'] : 5 );
		$widget_title = ( !empty( $instance['widget_title'] ) ? esc_attr( $instance['widget_title'] ) : 'Book Reviews' );

		// Preparation of query string to retrieve book reviews
		$query_array = array(
			'post_type' => 'tribe_events',
			'post_status' => 'publish',
			'posts_per_page' => $fundrising_event_count,
			'tax_query' => array(
				array(
					'taxonomy' => 'tribe_events_cat',
					'field' => 'slug',
					'terms' => 'fundrising',
				),
			),
		);

		// Execution of post query
		$book_review_query = new WP_Query();
		$book_review_query->query( $query_array ); 

		// Display widget title
		echo '<div class="conference-calander"><div class="conf-heading"><h3>';
		echo apply_filters( 'widget_title', $widget_title );
		echo "</h3></div>";
		// Check if any posts were returned by query
		if ( $book_review_query->have_posts() ) {           
			
			// Cycle through all items retrieved
			while ( $book_review_query->have_posts() ) {
				$book_review_query->the_post();
				
				$_eventStart = get_post_meta(get_the_ID(), '_EventStartDate', true);
				$_eventEnd = get_post_meta(get_the_ID(), '_EventEndDate', true);
				$eventTimeZone = get_post_meta(get_the_ID(), '_EventTimezone', true);
				
				$_eventStartObj = strtotime($_eventStart);
				$_eventEndObj = strtotime($_eventEnd);
				
				$_eventStart = explode(" ", $_eventStart);
				$_eventEnd = explode(" ", $_eventEnd);
				
				if( $_eventStart[0] == $_eventEnd[0] ) {
					$time = '<p>'. date('F d', $_eventStartObj) .' @ '. date('h:i a', $_eventStartObj) .' - '.date('h:i a', $_eventEndObj).' '.$eventTimeZone.'</p>';
				} else {
					$time = '<p>'. date('F d', $_eventStartObj) .' @ '. date('h:i a', $_eventStartObj) .' - '.date('F d', $_eventEndObj).' @ '.date('h:i a', $_eventEndObj).' '.$eventTimeZone.' </p>';
				}
				
				echo '<div class="conf-box-section">';
				echo 	'<div class="conf-box">';
				echo		'<div class="conf-date">';
				echo			'<span>'. date('D', $_eventStartObj) .'</span>'.date('d', $_eventStartObj);
				echo		'</div>';
				echo		'<div class="conf-info">';
				echo			'<a href="' . get_permalink() . '">'. get_the_title( get_the_ID() ) .'</a>';
				echo			$time;
				echo		'</div>';
				echo	'</div>';
				echo '</div>';
				
				
			}
		} else {
			
		}
		echo "</div>";
		wp_reset_query(); 
		echo $after_widget;
    }    
}