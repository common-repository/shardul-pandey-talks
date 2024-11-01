<?php
/*
Plugin Name: Shardul Pandey Talks
Description: Dashboard widget showing all the latest interviews from Shardul Pandey Talks.
Version: 2.5
License: GPL
Author: Shardul Pandey
Author URI: http://sangkrit.net/talks
*/

function sptfeed_setup_function() {
    add_meta_box( 'shardulpandeytalks_widget', 'Shardul Pandey Talks', 'sptfeed_widget_function', 'dashboard', 'normal', 'high' );
}
function sptfeed_widget_function() {
    include ('feed.php'); 
}
 
add_action( 'wp_dashboard_setup', 'sptfeed_setup_function' );

class ShardulPandeyTalks extends WP_Widget {

	function ShardulPandeyTalks() {
		// Instantiate the parent object
		parent::__construct( false, 'Shardul Pandey Talks' );
	}

	function widget( $args, $instance ) {
                 // Heading
                 echo "<h4 style=\"text-align: justify;\"><a href=\"http://sangkrit.net/2013/03/24/shardul-pandey-talks-to-richard-matthew-stallman/\" target=\"_blank\">Shardul Pandey Talks To Richard Matthew Stallman</a></h4>\n";
                 // RMS Talks Text
                 echo "<a href=\"http://sangkrit.net/2013/03/24/shardul-pandey-talks-to-richard-matthew-stallman/\"><img alt=\"RMS\" src=\"http://sangkrit.net/wp-content/uploads/2013/04/RMS.png\" width=\"100%\" /></a>\n"; 
echo "<p style=\"text-align: justify;\"><a href=\"http://sangkrit.net/2013/03/24/shardul-pandey-talks-to-richard-matthew-stallman/\" target=\"_blank\">RMS talks about other side of Internet which seems still dark and reminds us fully well that the dangers of 1984 by George Orwell were not averted by an Apple advertisement which proved lucrative enough to Steve Jobs but big brother may still be watching you when you live online.</a></p>\n";
                 // Talks Heading
                 // Talks Feed
                 include ('feed.php');
                 echo "<p style=\"text-align: justify;\"><a href=\"http://sangkrit.net/category/s-a-n-g-k-r-i-t/shardul-pandey-talks/\">Shardul Pandey Talks</a> is international program for promoting those individuals, who register their domain to create virtual wealth in webspace so if you too want to get interviewed, simply email to shardulpandey@sangkrit.org considering any conversation upon this as subject to publication.</p>\n";
		// Widget output
	}

	function update( $new_instance, $old_instance ) {
		// Save widget options
	}

	function form( $instance ) {
		// Output admin widget options form
	}

}

function myplugin_register_widgets() {
	register_widget( 'ShardulPandeyTalks' );
}

add_action( 'widgets_init', 'myplugin_register_widgets' );
?>