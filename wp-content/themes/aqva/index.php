<?PHP
	get_header();
?>

<body class="page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer">
		<?php
            get_template_part('tpl','header'); 
        ?>    
     
		<!-- AFTERHEADER -->
        <!-- SLIDER -->
        <div id="outerslider">
            <div class="container">
				<?php
                    get_template_part('tpl','slider'); 
                ?>

				<div class="row">
                	<div class="eight columns center">
                    <div id="afterheader">
	<?php
		$page_data = get_page_by_title( 'home' );
		//print_r($page_data);
		$desc=get_post_meta($page_data->ID,'_cmb_page_description_text',true);
	?>  
						<?php echo $desc?>
                        
                        <span class="pagedesc">
                        	<?php echo $page_data->post_content?>
                        </span>                        <div class="clear"></div>
                    </div>
					<div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SLIDER -->        
		<!-- END AFTERHEADER -->


        <!-- MAIN CONTENT -->

        <!-- END MAIN CONTENT -->
        
		<?php
            get_template_part('tpl','footer'); 
        ?>         
<?php 
	get_footer();
?>
