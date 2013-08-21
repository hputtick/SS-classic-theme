<?php
/*
*
* Template Name: Sonstone Deafult Layout, Full Width Page With no Sidebar
*
* Custom build with content area on top with a seperate 
* Gallery showcase of pulled posts form all categories
*
* © Sonstone Custom Build Page
*
*/
?>

<?php get_header(); ?>

<div id="page" class="hfeed site">
		
	<div id="main" class="wrapper">

	<div id="primary" class="site-content">
	
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
		
	</div><!-- #primary -->	
	
	</div>
	
</div>

<?php get_footer(); ?>