<?php
/*
Template Name: media
*/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage WP-advocate
 * @since 1.0
 * @version 1.0
 */
  get_header();


?>

<h1 id="titre">Galerie Photos</h1>


<?php echo photo_gallery(2); ?>







<?php
  get_footer();
  ?>