<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php 
get_header(); 
?>

<?php 

get_template_part('template-parts/home/home', 'aboutme');

get_template_part('template-parts/home/home', 'aboutkurs');

get_template_part('template-parts/home/home', 'advantages');

get_template_part('template-parts/home/home', 'reviews');

?>

<?php 
get_footer(); 
?>