<?php
/*
*
* Template Name: Sonstone Project Gallery
*
* Custom build with content area thats pulls evry
* Post from to build a gallery
* © Sonstone Custom Build Page
*
*/
?>

<?php get_header(); ?>

<div id="override-page" class="hfeed site">
		
	<div id="main" class="wrapper">


	<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content-projects', get_post_format() ); ?>
	<?php endwhile; ?>

	<!-- Displays All Recent posts -->
	
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
		</div>	
		
	</div>
	
</div>

<?php get_footer(); ?>
