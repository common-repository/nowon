<?php
/*
* Plugin Name: autometa's NOWON
* Description: It generates current time and date in pages, posts, portfolios or products simply via: [nowon] and [nowadays].
* Version: 2.2
* Author: JorgeAmVF
* Author URI: https://profiles.wordpress.org/jorgeamvf/
* License: GPL2

autometa's NOWON is developed by JorgeAmVF in order to improve the quality of Quaestio.org
and it is freely provided with the intent to help other developers to fulfill
their needs.

autometa's NOWON is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

autometa's NOWON is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with autometa's NOWON. If not, see http://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
*/

// [nowon] = current time
function autometa_current_time() {
	$am_nowon = current_time( 'H:i:s' );
	return $am_nowon;
}
add_shortcode( "nowon", "autometa_current_time" );

// [nowadays] = current date
function autometa_current_date() {
	$am_nowadays = current_time( 'd M Y' );
	return $am_nowadays;
}
add_shortcode( "nowadays", "autometa_current_date" );
?>
