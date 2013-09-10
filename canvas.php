<?php
/*
Template Name: Canvas Page
*/
?>
<!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

			<?php while ( have_posts() ) : the_post(); ?>

            
             
                    <?php the_content(); ?>
              
				 
				
			<?php endwhile; // end of the loop. ?>



<?php // get_sidebar(); ?>



<?php get_footer(); ?>
