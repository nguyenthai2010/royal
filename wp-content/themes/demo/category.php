<?php
	get_header();
	$queried_object = get_queried_object();
	//category, tag cloud
	//print_r($queried_object->term_id);
?>
     <div class="content" style="height:500px;background:#000;color:#fff;">
     	ahdd
         <ul>
<?php
	$args = array( 'posts_per_page' => 5,'category' => $queried_object->term_id);
	$myposts = get_posts( $args );
	//print_r($myposts);
	foreach ( $myposts as $post ) : 
	  setup_postdata( $post ); ?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
	<?php endforeach;
	wp_reset_postdata(); ?>
</ul>
     </div>
<?php 
	get_footer();
?>