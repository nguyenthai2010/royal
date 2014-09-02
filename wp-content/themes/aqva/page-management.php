<?PHP
	get_header();
?>

<body class="page page-template-default klasikt">

<div id="bodychild">
	<div id="outercontainer" class="magagementpage">
		<?php
            get_template_part('tpl','header'); 
        ?>    
     
		<!-- AFTERHEADER -->
		<div id="outerafterheader">
        	<div class="container">
            	<div class="row">
                	<div class="twelve columns">
                		<div id="afterheader">
	                		<h1 class="pagetitle"><?= the_title();?></h1>
	                		<div class="pagedesc center">
	                			<?php
								$page = get_page_by_title( 'mangement' );
								$content = apply_filters('the_content', $page->post_content); 
								echo $content;
								?>
	                		</div>
	                	</div>
					<div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>       
		<!-- END AFTERHEADER -->

        
		<?php
            get_template_part('tpl','footer'); 
        ?>         
<?php 
	get_footer();
?>
