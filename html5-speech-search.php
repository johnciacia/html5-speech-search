<?php
/*
Plugin Name: HTML5 Speech Search
Plugin URI: http://www.johnciacia.com/projects/google-contacts-importer/
Description: This plugin allows your users to use a voice search
Version: 0.3
Author: John Ciacia
Author URI: http://www.johnciacia.com

Copyright 2011  John Ciacia  (email : software [at] johnciacia [dot] com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

wp_enqueue_script( 'jquery' );
wp_register_script('html5-speech-search', plugins_url('/script.js', __FILE__));
wp_enqueue_script('html5-speech-search', array('jquery'));

?>
