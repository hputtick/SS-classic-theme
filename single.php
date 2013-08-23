<?php

?>

<?php get_header(); ?>

<div id="override-page" class="hfeed site">
		
	<div id="main" class="wrapper">

		<section class="content-home" role="main">
		
			<div class="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				
			<?php endwhile; // end of the loop. ?>
			
			</div>
			
			<aside>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'sidebar_custom' ); ?>
			<?php endwhile; // end of the loop. ?>

			</aside>
		
		</section>
			
	</div>
	
</div>

<?php get_footer(); ?>