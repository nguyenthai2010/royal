<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Royal
 * @since Royal 1.0
 */

get_header(); ?>
            
	<div id="singlepost">
    
         <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			$custom = get_post_custom($post->ID);
			$cf_disablemeta = (isset($custom["klasik_disable_meta"][0]))? $custom["klasik_disable_meta"][0] : "";
			
			$format = get_post_format($post->ID);
			
			if($format=='image'){
				$posticon = 'format-image.png';
			}elseif($format=='video'){
				$posticon = 'format-video.png';
			}elseif($format=='quote'){
				$posticon = 'format-quote.png';
			}elseif($format=='link'){
				$posticon = 'format-link.png';
			}elseif($format=='audio'){
				$posticon = 'format-audio.png';
			}elseif($format=='gallery'){
				$posticon = 'format-gallery.png';
			}elseif($format=='aside'){
				$posticon = 'format-aside.png';
			}else{
				$posticon = 'format-image.png';
			}

			if($cf_disablemeta==""){
				$hasmetaclass = 'hasmeta';
			?>
          
			<div class="entry-utility">

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
          
			<?php
			}else{
				$hasmetaclass = 'nometa';
			}
			?>
            
			<div class="articlecontainer <?php echo $hasmetaclass; ?>">
		
				<?php
                $format = get_post_format($post->ID);
                
                if(false === $format){
                    $format = "standard";
                }
                
                $showtheimg = true;
                $showcontent = true;
                $showtitle = true;
                
                if(!is_search() && $showtheimg){
    
                    $cf_thumb = (isset($custom["klasik_thumb"][0]))? $custom["klasik_thumb"][0] : "";
        
                    $pregvid = preg_match_all('/(\<video.*\<\/video\>)/is', get_the_content(), $videos);
                    $pregobj = preg_match_all('/(\<object.*\<\/object\>)/is', get_the_content(), $objects);
                    $pregemb = preg_match_all('/(\<embed.*\<\/embed\>)/is', get_the_content(), $embeds);
                    $pregaud = preg_match_all('/(\<audio.*\<\/audio\>)/is', get_the_content(), $audios);
                    $pregifr = preg_match_all('/(\<iframe.*\<\/iframe\>)/is', get_the_content(), $iframes);
                    $pregvsh = preg_match_all('/(\[video.*\[\/video\])/is', get_the_content(), $vshorts);
                    $pregash = preg_match_all('/(\[audio.*\[\/audio\])/is', get_the_content(), $ashorts);
                    $video = (isset($videos[1][0]))?$videos[1][0] : "";
                    $object = (isset($objects[1][0]))?$objects[1][0] : "";
                    $embed = (isset($embeds[1][0]))?$embeds[1][0] : "";
                    $iframe = (isset($iframes[1][0]))?$iframes[1][0] : "";
                    $vshort = isset($vshorts[1][0])? $vshorts[1][0]: "";
                    $audio = (isset($audios[1][0]))?$audios[1][0] : "";
                    $ashort = isset($ashorts[1][0])? $ashorts[1][0] : "";
                    $media = "";
                    $mediaaud = "";
                    
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
                    
                    if(!empty($ashort)){
                        $mediaaud = $ashort;
                    }elseif(!empty($audio)){
                        $mediaaud = $audio;
                    }
                    
                    //get post-thumbnail attachment
                    $attachments = get_children( array(
                    'post_parent' => $post->ID,
                    'post_type' => 'attachment',
                    'orderby' => 'menu_order',
                    'post_mime_type' => 'image')
                    );
                    
                    $cf_thumb2 = "";
                    $lislides = "";
                    $x = 0;
                    $cols = 3;
                    $colclass = 'four columns';
                    foreach ( $attachments as $att_id => $attachment ) {
                        $x++;
                        
                        if($x%$cols==0){
                            $omega = "omega";
                        }elseif($x%$cols==1){
                            $omega = "alpha";
                        }else{
                            $omega = "";
                        }
                        
                        $getimage = wp_get_attachment_image_src($att_id, 'thumb-blog', true);
                        $theimage = $getimage[0];
                        $cf_thumb2 = '<img src="'.$theimage.'" alt="'. get_the_title() .'" />';
                        $lislides  .= '<div class="'.$colclass.' '.$omega.'">'.$cf_thumb2.'</div>';
                    }
                    
                    $displayheader = "";
                    
                    if($format == "video"){
                        $showcontent = false;
                        if(!empty($media)){
                            $displayheader = '<div class="mediacontainer">'.do_shortcode($media).'</div>';
                        }
                    }elseif($format == "gallery"){
                        $showcontent = true; 
                        
                        $thethumblb = '';
                        foreach ( $attachments as $att_id => $attachment ) {
                            $getimage = wp_get_attachment_image_src($att_id, 'large', true);
                            $thumbimage  = $getimage[0];
                            $thumbwidth  = $getimage[1];
                            $thumbheight = $getimage[2];
                            $cf_thumb2 ='<img src="'.$thumbimage.'" class="" width="'. $thumbwidth .'" height="'. $thumbheight .'" alt="" />';
							$thethumblb .= '<li>'.$cf_thumb2.'</li>';
                        }
                         
                        if($thethumblb!=''){
                            $thethumblb = '<div id="postgallery" class="flexslider"><ul class="slides">'. $thethumblb .'</ul></div>';
                        }
                        $displayheader .= $thethumblb;
                    }elseif($format == "audio"){
                        $showcontent = false; 
                        if(!empty($mediaaud)){
                            $displayheader = '<div class="mediacontainer">'.do_shortcode($mediaaud).'</div>';
                        }
                    }elseif($format == "image"){
                        if($cf_thumb!=""){
                            $cf_thumb = "<img src='" . $cf_thumb . "' alt='". get_the_title() ."' class=''  />";
                        }elseif(has_post_thumbnail($post->ID)){
                            $cf_thumb = get_the_post_thumbnail($post->ID, 'thumb-blog', array('class' => ''));
                        }else{
                            $cf_thumb = $cf_thumb2;
                        }
                        $displayheader .= $cf_thumb;
                    }
                    
                    if($displayheader!=""){
                        echo '<div class="postimg '.$hasmetaclass.'">';
                            echo '<div class="">';
                                echo $displayheader;
                                echo '<div class="clear"></div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    
                }// end if(!is_search())
                
                ?>
                
                <div class="entry-content">
					<?php
                    $custom = get_post_custom($post->ID);
                    
                    if(!$showcontent){
                        the_excerpt();
                    }else{
                        the_content();
                        wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) );
                    }
                    ?>
                </div> 
                <?php if($cf_disablemeta==""){?>
                <div class="tag"><?php _e('In ','klasik'); ?> <?php the_category(', '); ?></div>
                
                
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'klasik' ), TRUE ); ?></div>
                    <div class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'klasik' ), TRUE ); ?></div>
                    <div class="clear"></div>
                </div><!-- #nav-below -->
                <?php } ?>
            </div>
            

                <?php

				// If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) && $cf_disablemeta=="" ) : ?>
				<div id="entry-author-info">
                	
					<div id="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'klasik_author_bio_avatar_size', 74 ) ); ?>
					</div><!-- author-avatar -->
					<div id="author-description">
                    	<h2><span class="author"><?php _e( 'About The Author', 'klasik' ); ?></span></h2>
						<span class="authorname"><?php printf( __( '%s', 'klasik' ), get_the_author() ); ?></span>
						<?php the_author_meta( 'description' ); ?>
					</div><!-- author-description	-->
                    <div class="clear"></div>
				</div><!-- entry-author-info -->
                
				<?php endif; ?>

                <?php comments_template( '', true ); ?>
            
            
         </article>
        <?php endwhile; ?>
    
    </div><!-- singlepost --> 
    <div class="clear"></div><!-- clear float --> 

<?php get_footer(); ?>