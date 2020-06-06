<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_Wordpress
 */


/*
Template name: Home Page

*/ 

/*
==========CUSTOM FIELDS=======
*/

//Advanced custom fields


get_header(); ?>



<?php get_template_part('content', 'hero'); ?>

<?php get_template_part('content', 'optin') ?>	
	
<?php get_template_part('content', 'boost') ?>	
    
<?php get_template_part('content', 'benefits') ?>
    
<?php get_template_part('content', 'coursefeatures') ?>	

<?php get_template_part('content', 'projectfeatures') ?>
	
<?php get_template_part('content', 'featurette'); ?>	
    
<?php get_template_part('content', 'instructor'); ?>	

<?php get_template_part('content', 'testimonial'); ?>	
	 
	
<?php  
get_footer();
?>