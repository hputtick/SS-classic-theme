<?php
/*
*
* Template Name: Sonstone Right Hand Sidebar layout 
*
* Custom build with content area are on the left hand side
* Complete with latest post, pulled posts (Max 5)
* And a list of pulled pages
*
* © Sonstone Custom Build Page
*
*/
?>

<?php get_header(); ?>

<div id="override-page" class="hfeed site">
		
	<div id="main" class="wrapper">

		<section class="content-home" role="main">
		
			<article class="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
			
			</article>
			
			<aside>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'sidebar_custom' ); ?>
			<?php endwhile; // end of the loop. ?>

			</aside>
		
		</section>
			
	</div>
	
</div>
      		
<?php get_footer(); ?>
