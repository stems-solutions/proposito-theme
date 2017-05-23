<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blankTheme
 */

if ( is_active_sidebar( 'pt_sidebar' ) ) {
    dynamic_sidebar('pt_sidebar');
	return;
}
?>


