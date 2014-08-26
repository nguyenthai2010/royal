       <!-- HEADER -->
        <div id="outerheader">
        	<div id="headercontainer">
                <div class="container">
                    <header id="header">
                        <div class="row">
                        	<div class="twelve columns">
                            	<div class="header-wrap">
                                    <div id="logo">		        	
            <div id="logoimg">
            <a href="<?php echo bloginfo('home');?>" title="Royal" >
                <img src="images/logo.png" alt="" />
            </a>
            </div>
            
		</div>
                                    <div class="clear"></div>
        
                                    <section id="navigation">
                                        <nav id="nav-wrap">
         	<?php
				
				$defaults = array(
				  'container'       => 'ul', 
				  'menu_class'      => 'sf-menu',
				  'menu_id'         => 'topnav', 
				  'depth'           => 0,
				  'sort_column'    => 'menu_order',
				  'fallback_cb'     => 'nav_page_fallback',
				  'theme_location' => 'menu_top' 
				);
				
				wp_nav_menu( $defaults );
				
			?>                                          
                                                                                      
                                           <!-- <form method="get" id="search-icon" action="http://demowordpress.templatesquare.com/royal/">
                                                <input type="text" name="s" id="s" value="" autocomplete="off" />
                                                <input type="submit" id="searchbutton" value="" />
                                            </form>-->
                                            <div class="clear"></div>
                                        </nav><!-- nav -->	
                                    </section>
                                </div>
                        	</div>  
                        </div>
                    </header>
                </div>
                <div class="clear"></div>
            </div>
		</div>
        <!-- END HEADER -->