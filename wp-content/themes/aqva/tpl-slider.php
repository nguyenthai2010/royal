<?php
	$i = 0;
	$args_slider = array(
		'post_type' 	 => 'slider',
		'posts_per_page' => 5 ,
		'order'			 => 'asc'
	);
	$querySlider = get_posts($args_slider);


?>
                <div class="row">
                	<div id="slidercontainer" class="twelve columns">
                        <section id="slider">
                            <div id="slideritems">
							<?php
                                foreach ($querySlider as $slider) {
                                    $i++;
									$url = wp_get_attachment_url( get_post_thumbnail_id($slider->ID) );
									$selling = get_post_meta($slider->ID, '_cmb_selling_slider', true);
                            ?>
                                <div class="slider-img" data-src="<?php echo $url;?>"></div>
                            <?php }?>                            
							</div>
                            <div class="clear"></div>
                        </section>
                    </div>
                </div>