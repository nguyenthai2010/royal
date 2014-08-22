<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Royal
 * @since Royal 1.0
 */
?>
	<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
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

            <div class="entry-video">
                <?php
                $custom = get_post_custom($post->ID);
                $pregvid = preg_match_all('/(\<video.*\<\/video\>)/is', get_the_content(), $videos);
                $pregobj = preg_match_all('/(\<object.*\<\/object\>)/is', get_the_content(), $objects);
                $pregemb = preg_match_all('/(\<embed.*\<\/embed\>)/is', get_the_content(), $embeds);
                $pregifr = preg_match_all('/(\<iframe.*\<\/iframe\>)/is', get_the_content(), $iframes);
				$pregvsh = preg_match_all('/(\[video.*\[\/video\])/is', get_the_content(), $vshorts);
                $video = isset($videos[1][0])? $videos[1][0] : "";
				$object = isset($objects[1][0])? $objects[1][0] : "";
				$embed = isset($embeds[1][0])? $embeds[1][0] : "";
				$iframe = isset($iframes[1][0])? $iframes[1][0]: "";
				$vshort = isset($vshorts[1][0])? $vshorts[1][0]: "";
                $media = "";
                
                if(!empty($vshort)){
					$media = $vshort;
				}elseif(!empty($video)){
                    $media = $video;
                }elseif(!empty($object)){
                    $media = $object;
                }elseif(!empty($embed)){
                    $media = $embed;
                }elseif(!empty($iframe)){
                    $media = $iframe;
                }
                
				$mediahtml = '';
                if(!empty($media)){
                    $mediahtml = '<div class="mediacontainer">'.do_shortcode($media).'</div>';
                }
                ?>
                

                	<?php echo $mediahtml; ?>

                
                
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                         <a href="<?php the_permalink(); ?>" class="more-link"><?php _e('Read More','klasik'); ?></a>
                    </div>
            	   <div class="tag"><?php _e('In','klasik'); ?> <?php the_category(', '); ?></div>
            </div>
            <div class="clear"></div>
        </div>
		<div class="clear"></div>
	</article><!-- end post -->
    
    
