<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Royal
 * @since Royal 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<div class="entry-utility">
            <div class="formatimgcont">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/format-image.png'; ?>" class="formatimg" alt="" />
            </div>
            <div class="user">
                <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'klasik_author_bio_avatar_size', 58 ) ); ?>
                <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author();?></a>
            </div>
            <div class="datecont">
                <div class="date"><?php the_time(get_option('date_format')); ?></div>  
                <div class="comment"><?php comments_popup_link(__('0', 'klasik'), __('1', 'klasik'), __('%', 'klasik')); ?></div>
            </div>
            <div class="clear"></div>  
        </div> 
        <div class="articlecontainer">
				<h2 class="posttitle"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'klasik' ), the_title_attribute( 'echo=0' ) ); ?>" data-rel="bookmark"><?php the_title(); ?></a></h2>
                <div class="entry-image">
                    <?php
                    $custom = get_post_custom($post->ID);
                    $cf_thumb = (isset($custom["klasik-thumb"][0]))? $custom["klasik-thumb"][0] : "";

                    //get post-thumbnail attachment
                    $attachments = get_children( array(
                    'post_parent' => $post->ID,
                    'post_type' => 'attachment',
                    'orderby' => 'menu_order',
                    'post_mime_type' => 'image')
                    );
                    
					$cf_thumb2 ='';
                    foreach ( $attachments as $att_id => $attachment ) {
                        $getimage = wp_get_attachment_image_src($att_id, 'image-blog', true);
                        $theimage = $getimage[0];
                        $cf_thumb2 ='<img src="'.$theimage.'" alt="" />';
                    }
                     
                    
                    //thumb image
                    if($cf_thumb!=""){
                        $cf_thumb = "<img src='" . $cf_thumb . "' alt='". get_the_title() ."'  />";
                    }elseif(has_post_thumbnail($post->ID)){
                        $cf_thumb = get_the_post_thumbnail($post->ID, 'image-blog');
                    }else{
                        $cf_thumb = $cf_thumb2;
                    }
					
					$thumbhtml = '';
					if($cf_thumb!=""){
						$thumbhtml .= '<div class="postimg">';
							$thumbhtml .= '<div class="thumbcontainer">';
								$thumbhtml .= '<a href="'.get_permalink($post->ID).'">'.$cf_thumb.'</a>';
							$thumbhtml .= '</div>';
						$thumbhtml .= '</div>';
					}
                    ?>
                    
                    <?php echo $thumbhtml; ?>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                         <a href="<?php the_permalink(); ?>" class="more-link"><?php _e('Read More','klasik'); ?></a>
                    </div><!-- .entry-content -->
                    <div class="tag"><?php _e('In','klasik'); ?> <?php the_category(', '); ?></div>
                </div>
            
            <div class="clear"></div>
        </div>
	</article><!-- #post -->