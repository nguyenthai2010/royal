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
						<h1 class="pagetitle">INVEST IN YOUR DREAMS</h1><span class="pagedesc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

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
