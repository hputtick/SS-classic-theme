<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * .container for folding footer transition
 *
 * DO NOT MODIFIY
 *
 */
?>
	</div>
	
</div>

<footer>
			
	<ul>
				
		<li>
			<h3>Sonstone Pages</h3>				
			<?php wp_page_menu() ?>					
		</li>
						
		<li>
			<h3>Sonstone Projects</h3>
			<ul>
			<?php
			$args = array( 'numberposts' => '5' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){
			echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
			}
			?>
			</ul>
		</li>
						
		<li>
			<h3>Contact Sonstone</h3>
			<ul class="contact">
			<li ><a data-contact="admin@sonstone.co.uk" href="mailto:test@gmail.com">Email :</a></li>
			<li><a data-contact="012345678901" href="tel:01234567890">Phone :</a></li>
			<li><a data-contact="Fill In Form" href="http://www.sonstone.co.uk/contact/">Contact Now</a></li>
			<li><p>Sunstone are a UK, London based stone restoration firm that offer ....</p></li>
			</ul>
		</li>
					
	</ul>
			
	<div id="copyright">
		<ul class="links">
			<li>© Sonstone 2013</li>
			<li>Built On <a href="http://wordpress.org/">Wordpress</a> + Hosted By <a href="http://www.bigwetfish.co.uk/">Big Wet Fish</a></li>
			<li>Designed and Developed By <a href="http://html5up.net">Henry Puttick </a>& Josh Harris</li>
		</ul>
	</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>