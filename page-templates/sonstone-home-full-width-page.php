<?php
/*
*
* Template Name: Sonstone Home Full Width Page With no Sidebar
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

		<div id="content-home" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
			
		</div><!-- #content -->
			
	</div>
	
</div>
			
<div id="override-page" class="hfeed site">
			
	<div class="major">
		<h2>Sonstone Recent Projects</h2>
	</div><!--major-->
			
	<div id="projects">
		<?php 
			$thumbnails = get_posts('numberposts=6');
				foreach ($thumbnails as $thumbnail) {
					if ( has_post_thumbnail($thumbnail->ID)) {?>
						<div class="image-holder"><?php  echo '<a href="' . get_permalink( $thumbnail->ID ) . '" title="' . esc_attr( $thumbnail->post_title ) . '">';
							echo get_the_post_thumbnail($thumbnail->ID, 'singlepost-thumb', array('class' => 'rollover'));
							echo '</a></div>';
					}
				}
		?>		
	</div>	<!--projects-->

</div><!--override-page-->

<?php get_footer(); ?>