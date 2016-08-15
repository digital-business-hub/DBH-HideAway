<?php
/*
Plugin Name: Digital Business Hub HideAway
Description: Hides the default WordPress content editor for Digital Business Hub Clients
Version:     1.2
Author:      Digital Business Hub
Author URI:  http://digitalbusinesshub.com.au
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No dice! Please email josh@mayvintraining.com.au for assistance.' );

add_action('admin_head', 'DBH_Hide_Away');

function DBH_Hide_Away() {
  echo '<style> .post-type-page #postdivrich { display: none !important; }	</style>';
}
