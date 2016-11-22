<?php 
/*
Plugin Name: oik post type support 
Plugin URI: http://www.oik-plugins.com/oik-plugins/oik-post-type-support
Description: Post type support plugin - excerpts for pages
Version: 0.0.4
Author: bobbingwide
Author URI: http://www.oik-plugins.com/author/bobbingwide
License: GPL2

    Copyright 2012-2016 Bobbing Wide (email : herb@bobbingwide.com )

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License version 2,
    as published by the Free Software Foundation.

    You may NOT assume that you can use any other version of the GPL.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    The license for this software can likely be found here:
    http://www.gnu.org/licenses/gpl-2.0.html

*/
add_post_type_support( 'page', 'excerpt' );

add_action( "oik_admin_menu", "oikpts_admin_menu" );

/**
 * Implement "oik_admin_menu" action for oik post type support 
 */
function oikpts_admin_menu() {
  oik_register_plugin_server( __FILE__ );
}

