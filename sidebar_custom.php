<?php
/**
 * Custom Sidebar 
 *
 * Standalone Custom sidebar
 *
 * @Created by Henry Puttick
 * Part of the Sonstone Custom Theme
 * 
 * Shows the latest post with featured image and title, List of 5 recent posts and lists of all pages in nav menu
 */
?>
 	<div class="custom-sidebar-item">
	 <?php $the_query = new WP_Query('showposts=1&orderby=post_date&order=DESC'); ?> 
	     <?php while ($the_query->have_posts()) : $the_query->the_post(); ?> 
		     <div> <?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,300), array("class" => "")); } ?> 
		     	<div class="item">
		     	<ul>
		     	<h3>Latest Sonstone Project</h3>
			 	<li><a class="button" href="<?php the_permalink(); ?>">Read More</a></li>
		     	</ul>
		     </div>
		     </div>
     <?php endwhile;?>
 	</div>
	
	<div class="custom-sidebar-item">
		<div class="item">
			<h3>Prior Sonstone Projects</h3>
				<ul>
				<?php
					$args = array( 'numberposts' => '5' );
					$recent_posts = wp_get_recent_posts( $args );
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
					}
				?>
				</ul>
		</div>
	</div>
	
	<div class="custom-sidebar-item">
		<div class="item">
			<h3>Sonstone Links</h3>
				<?php wp_page_menu() ?>
		</div>
	</div>