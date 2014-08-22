<?php
/**
 * The template for displaying posts in the Aside post format
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
            <div class="entry-content">
                <div class="aside">

                        <?php the_content(); ?>
                   
                </div><!-- .aside -->
            </div><!-- .entry-content -->
            <div class="clear"></div>
        </div>
	</article><!-- #post -->
