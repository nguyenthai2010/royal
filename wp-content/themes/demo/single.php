<?php
	get_header();
?>
     <div class="content" style="height:500px;background:#000;color:#fff;">
         detail
         <?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			else :
				echo wpautop( 'Sorry, no posts were found' );
			endif;
		?>
     </div>
<?php 
	get_footer();
?>