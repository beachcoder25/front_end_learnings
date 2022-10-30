<?php
/**
 * Plugin Name: Jonah Plugin Tutorial
 * Description: Handles the custom functions for a given site
 */

 // Remove the admin bar from the front end
 add_filter('show_admin_bar', '__return_false');