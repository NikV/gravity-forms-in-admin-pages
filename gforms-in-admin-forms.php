<?php
/**
 * Plugin Name: Gravity Forms for Admin Pages
 * Description: Show a Gravity Form on an admin page.
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * License: GNU GPLv2+
 */

add_action( 'admin_menu', 'get_support_admin_menu' );

//Create an admin menu which will also create a blank admin page
function get_support_admin_menu() {
	add_menu_page( 'Get Support', 'Get Support', 'manage_options', 'get-support.php', 'gravityforms_admin_page', 'dashicons-info', 6  );
}

//The main function which controls the output on the admin page
function gravityforms_admin_page() {

	echo "<div style='width: 60%'>";
	echo "<h2><span style='font-size: 20px;' class='dashicons dashicons-info'></span> How can we Assist you?</h2>";

	gravity_form_enqueue_scripts( 1, true ); //Enqueue form scripts (only for form with ID of 1)

	gravity_form( 1, false, true, false, null, false ); //Output a form with an ID of 1

	echo "</div>";

}