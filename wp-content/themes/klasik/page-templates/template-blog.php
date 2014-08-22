<?php
/**
 * Template Name: Blog Template
 *
 * @package WordPress
 * @subpackage Klasik
 * @since Klasik 0.6.5
 */

get_header(); ?>

                        
<div id="template-blog" class="narrowcolumn">
<?php
if ( is_page() ) {
    $category = get_post_meta( $posts[0]->ID, 'category-include', true );
	$showpost = get_post_meta( $posts[0]->ID, 'showpost', true );
    $cat = get_cat_ID( $category );
}

    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $post_per_page = $showpost; // -1 shows all posts
  	
    $args=array (
      'cat' => $cat,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged,
      'posts_per_page' => $post_per_page
    );
    $temp = $wp_query; // assign original query to temp variable for later use  
    global $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query( $args ); 
    if ( $wp_query->have_posts() ) : 
            while ( have_posts() ) : the_post();

              // Display content of page
              get_template_part( 'content', get_post_format() ); 
              wp_reset_postdata();
  
            endwhile;
	?>
		<?php /* Display navigation to next/previous pages when applicable */ ?>
        <?php if (  $wp_query->max_num_pages > 1 ) : ?>
         <?php if(function_exists('wp_pagenavi')) { ?>
             <?php wp_pagenavi(); ?>
         <?php }else{ ?>
            <div id="nav-below" class="navigation">
                <div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Previous', 'klasik' ) ); ?></div>
                <div class="nav-next"><?php previous_posts_link( __( 'Next <span class="meta-nav">&rarr;</span>', 'klasik' ) ); ?></div>
                <div class="clear"></div>
            </div><!-- #nav-below -->
        <?php }?>
        <?php endif; ?>
        
 	<?php endif; // if ( $wp_query->have_posts() ) ?>
	<?php $wp_query = $temp; //reset back to original query ?>



</div><!-- #content -->


        
<?php get_footer(); ?>