<?php
  add_action('admin_menu', 'create_theme_option');
  function create_theme_option()
  {
    add_menu_page("Custom option", "Custom option",1, basename(__FILE__), 'my_theme_options');
  }
  function my_theme_options()
  {
    ?>
       <div class="wrap">
            <?php screen_icon(); ?>
	        <h2>Information</h2>
             <!-- Update nick yahoo -->
            <?php
              if ( !empty($_POST) && wp_verify_nonce($_POST['yahoo_online'],'yahoo_online') )
              {
                  	
              		update_option( 'social_google',($_POST['social_google']));
              		update_option( 'social_feed',($_POST['social_feed']) );
              		update_option( 'social_facebook',($_POST['social_facebook']));
              		update_option( 'social_twitter',($_POST['social_twitter']) );
              		

            ?>
              		<div id="index_message" name="index_message" class="updated">Updated successful!</div><br/>
              		<?php
              }
            ?>

            <!-- Update banner và logo -->
            <?php
              if ( !empty($_POST) && wp_verify_nonce($_POST['theme_option'],'theme_option') )
              {
                  //	update_option( 'theme_logo',($_POST['theme_logo']));
                  //	update_option( 'theme_footer',($_POST['theme_footer'])); 
                  	//update_option( 'left_banner_image_2',($_POST['left_banner_image_2']));
                  	//update_option( 'right_banner_image_1',($_POST['right_banner_image_1'])); 
                  	//update_option( 'right_banner_image_2',($_POST['right_banner_image_2']));
                  	//update_option( 'left_banner_link_1',($_POST['left_banner_link_1'])); 
                  	//update_option( 'left_banner_link_2',($_POST['left_banner_link_2']));
                  	//update_option( 'right_banner_link_1',($_POST['right_banner_link_1'])); 
                  	//update_option( 'right_banner_link_2',($_POST['right_banner_link_2']));
                  	//update_option( 'header_menu',($_POST['header_menu']));

            ?>
              		<div id="index_message" name="index_message" class="updated">Updated successful!</div><br/>
              		<?php
              }
            ?>
			<!-- Update thông tin liên hệ -->
            <?php
              if ( !empty($_POST) && wp_verify_nonce($_POST['contact_option'],'contact_option') )
              {
                  	update_option( 'contact_website',($_POST['contact_website']));
              		update_option( 'contact_address',($_POST['contact_address']));
              		
              		update_option( 'contact_phone',($_POST['contact_phone']));
              		//update_option( 'contact_hotline',($_POST['contact_hotline']));
              		update_option( 'contact_fax',($_POST['contact_fax']));
              		update_option( 'contact_email',($_POST['contact_email']));
              		//update_option( 'contact_name',($_POST['contact_name']));
                   
            ?>
              		<div id="index_message" name="index_message" class="updated">Updated successful!</div><br/>
              		<?php
              }
            ?>
             <?php
              if ( !empty($_POST) && wp_verify_nonce($_POST['contact_option2'],'contact_option2') )
              {
                  
              		
              		update_option( 'contact_hotline',($_POST['contact_hotline']));
              		update_option( 'email_to_viewer',($_POST['email_to_viewer']));
              		
              		
                   
            ?>
              		<div id="index_message" name="index_message" class="updated">Updated successful!</div><br/>
              		<?php
              }
            ?>
            <!-- Update SEO -->
            <?php
            if ( !empty($_POST) && wp_verify_nonce($_POST['seo_index'],'seo_index_update') )
              {
                  	update_option( 'seo_title',($_POST['seo_title']));
                    update_option( 'google_analytics',($_POST['google_analytics'])  );
              		update_option( 'seo_description',($_POST['seo_description']) );
              		update_option( 'seo_keywords',($_POST['seo_keywords'])  );

              		?>
              		<div id="index_message" name="index_message" class="updated">Updated successful!</div><br/>
              		<?php
              }
            ?>
             <?php
            if ( !empty($_POST) && wp_verify_nonce($_POST['social'],'social') )
              {
                  	update_option( 'url_facebook',($_POST['url_facebook']));
                    update_option( 'url_twitter',($_POST['url_twitter'])  );
              		update_option( 'url_youtube',($_POST['url_youtube']) );
              		update_option( 'url_other',($_POST['url_other'])  );

              		?>
              		<div id="index_message" name="index_message" class="updated">Updated successful!</div><br/>
              		<?php
              }
            ?>
 <?php
            if ( !empty($_POST) && wp_verify_nonce($_POST['support'],'support') )
              {
                    if(isset($_POST['supportcontent']) && is_array($_POST['supportcontent']))
                    {
                    	update_option('support',$_POST['supportcontent']);
                    	
                    }
                   //print_r($_POST['supportcontent']);
                    
              		?>
              		<div id="index_message" name="index_message" class="updated">Updated successful!</div><br/>
              		<?php
              }
            ?>

 		<ul class="tabs">
    	<li><a href="#tab1">1.Information Contact</a></li>
    	 <li><a href="#tab5">2.Social</a></li>
    	 <li><a href="#tab6">3.Support</a></li>
	</ul>     
 
           <div class="tab_container">
       <div id="tab1" class="tab_content">
       <form action="" method="post" id="theme_option">
              		
                   <label for="contact_address">Address</label><br/>
                   <input name="contact_address" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('contact_address') ); ?>"/><br /><br />
                   <label for="contact_website">Website</label><br/>
                   <input name="contact_website" size="35" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('contact_website') ); ?>"/><br /><br />
                   <label for="contact_phone">Phone</label><br/>
                   <input name="contact_phone" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('contact_phone') ); ?>"/><br />
                   <label for="contact_fax">Fax</label><br/>
                   <input name="contact_fax" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('contact_fax') ); ?>"/><br />
                   <label for="contact_email">Email</label><br/>
                   <input name="contact_email" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('contact_email') ); ?>"/><br />
                   <input type="submit" name="contact_submit" value="Update" style="border-style:outset;border-width: 2px;font-weight: bold"/>
                   
            
                  <?php wp_nonce_field('contact_option','contact_option'); ?>
              </form>
       </div>
        
       <div id="tab3" class="tab_content">
       <form action="" method="post" id="theme_option">
              		     <label for="contact_hotline">Hotline</label><br/>
                   <input name="contact_hotline" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('contact_hotline') ); ?>"/><br />
                    <label for="email_to_viewer">Email Send Information To Viewer</label><br/>
                   <input name="email_to_viewer" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('email_to_viewer') ); ?>"/><br />
                   
                   <input type="submit" name="contact_submit" value="Update" style="border-style:outset;border-width: 2px;font-weight: bold"/>
                   
            
                  <?php wp_nonce_field('contact_option2','contact_option2'); ?>
              </form>
       </div>
        <div id="tab4" class="tab_content">
        <form action="" method="post" id="seo_index_page" >
                  <label for="seo_title"><strong>Title</strong><em>(Maximum 70 characters)</em></label>
                  <br/>
                  <input type="text" name="seo_title" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('seo_title') ); ?>"/>&nbsp;  &nbsp;  &nbsp;
                  <label for="google_analytics"><strong>Google Analytics Code:</strong></label>
                  <input type="text" name="google_analytics" size="15" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('google_analytics') ); ?>"/>
                  <br/>
                  <label for="seo_description"><b>Description</b><em>(Maximum 160 characters)</em></label><br/>
          		<textarea name="seo_description"  rows="1" cols="100" style="with:100%;border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1"><?php echo esc_attr( get_option('seo_description') ); ?></textarea><br/>
                  <label for="seo_keywords"><b>Keywords</b><em>(Maximum 250 characters)</em></label><br/>
          		<textarea name="seo_keywords"  rows="2" cols="100" style="with:100%;border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" ><?php echo esc_attr( get_option('seo_keywords') ); ?></textarea><br/>
				
                <input type="submit" name="seo_submit" value="Update" style="border-style:outset;border-width: 2px;font-weight: bold" /></p>
                <?php wp_nonce_field('seo_index_update','seo_index'); ?>
               </form>
       </div>
        <div id="tab5" class="tab_content">
       <form action="" method="post" id="theme_option">
              		     <label for="url_facebook">URL Facebook</label><br/>
                   <input name="url_facebook" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_facebook') ); ?>"/><br />
                     <label for="url_twitter">URL Twitter</label><br/>
                   <input name="url_twitter" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_twitter') ); ?>"/><br />
                      <label for="url_youtube">URL Youtube</label><br/>
                   <input name="url_youtube" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_youtube') ); ?>"/><br />
                    <label for="url_orther">URL Other</label><br/>
                   <input name="url_other" size="30" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo esc_attr( get_option('url_other') ); ?>"/><br />
                   
                   <input type="submit" name="contact_submit" value="Update" style="border-style:outset;border-width: 2px;font-weight: bold"/>
                   
            
                  <?php wp_nonce_field('social','social'); ?>
              </form>
       </div>
       <div id="tab6" class="tab_content">
        <form action="" method="post" id="id-support" >
                 <div class="insert">
                 <?php 
                  $suport=get_option('support');
                  if(!empty($suport))
                  {
                  	 foreach ($suport as $key=>$item)
                  	 {
                  	?>
                  <div class="support-class" style="border:1px solid #ddd;padding:10px;margin-bottom:10px;" >
                  <label for="support"><strong>Support Name:&nbsp;&nbsp;</strong></label>
                 
                  <input type="text" name="supportcontent[<?php echo $key ?>][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo $item[0]?>"/><br/>
                    <label for="support"><strong>Support Phone: </strong></label>
                 
                  <input type="text" name="supportcontent[<?php echo $key ?>][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo $item[1]?>"/><br/>
                  <label for="support"><strong>Support Yahoo: </strong></label>
                 
                  <input type="text" name="supportcontent[<?php echo $key ?>][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo $item[2]?>"/><br/>
                  <label for="support"><strong>Support Skype:&nbsp;</strong></label>
                 
                  <input type="text" name="supportcontent[<?php echo $key ?>][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value="<?php echo $item[3]?>"/><br/>
               
                  </div>
                  	<?php 
                  	 }
                  }else 
                  {
                  	?>
                  <div class="support-class" style="border:1px solid #ddd;padding:10px;margin-bottom:10px;" >
                  <label for="support"><strong>Support Name:&nbsp;&nbsp;</strong></label>
                 
                  <input type="text" name="supportcontent[0][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value=""/><br/>
                    <label for="support"><strong>Support Phone: </strong></label>
                 
                  <input type="text" name="supportcontent[0][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value=""/><br/>
                  <label for="support"><strong>Support Yahoo: </strong></label>
                 
                  <input type="text" name="supportcontent[0][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value=""/><br/>
                  <label for="support"><strong>Support Skype:&nbsp;</strong></label>
                 
                  <input type="text" name="supportcontent[0][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #f1f1f1" value=""/><br/>
               
                  </div>
              
                  	
                  	<?php 
                  }
                 ?>
                 
                 
                 
                 </div>
                <input type="submit" name="support" class="sp-add" value="Update" style="border-style:outset;border-width: 2px;font-weight: bold" />
               
                <input type="submit" name="support" class="add-support" value="Add" style="border-style:outset;border-width: 2px;font-weight: bold" />
               
                 <?php wp_nonce_field('support','support'); ?>
              
               </form>
       </div>
      
       </div>
       </div>
     <style>
       <style>
#id-support .support-class{
	padding:10px;
    border:1px solid #ddd;
}


ul.tabs {
    margin: 0;
    padding: 0;
    float: left;
    list-style: none;
    height: 32px; /*--Set height of tabs--*/
    border-bottom: 1px solid #999;
    border-left: 1px solid #999;
    width: 100%;
}
ul.tabs li {
    float: left;
    margin: 0;
    padding: 0;
    height: 31px; /*--Subtract 1px from the height of the unordered list--*/
    line-height: 31px; /*--Vertically aligns the text within the tab--*/
    border: 1px solid #999;
    border-left: none;
    margin-bottom: -1px; /*--Pull the list item down 1px--*/
    overflow: hidden;
    position: relative;
    background: #e0e0e0;
}
ul.tabs li a {
    text-decoration: none;
    color: #000;
    display: block;
    font-size: 1.2em;
    padding: 0 20px;
    border: 1px solid #fff; /*--Gives the bevel look with a 1px white border inside the list item--*/
    outline: none;
}
ul.tabs li a:hover {
    background: #ccc;
}
html ul.tabs li.active, html ul.tabs li.active a:hover  { /*--Makes sure that the active tab does not listen to the hover properties--*/
    background: #fff;
    border-bottom: 1px solid #fff; /*--Makes the active tab look like it's connected with its content--*/
}
.tab_container {
    border: 1px solid #999;
    border-top: none;
    overflow: hidden;
    clear: both;
    float: left; width: 100%;
    background: #fff;
}
.tab_content {
    padding: 20px;
    font-size: 1.2em;
}


       </style> 
       <script type="text/javascript">
       
       jQuery(document).ready(function($) {
          
   	    //When page loads...
   	    $(".tab_content").hide(); //Hide all content
   	    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
   	    $(".tab_content:first").show(); //Show first tab content

   	    //On Click Event
   	    $("ul.tabs li").click(function() {

   	        $("ul.tabs li").removeClass("active"); //Remove any "active" class
   	        $(this).addClass("active"); //Add "active" class to selected tab
   	        $(".tab_content").hide(); //Hide all tab content

   	        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
   	        $(activeTab).fadeIn(); //Fade in the active ID content
   	        return false;
   	    });

           $(".add-support").click(function(){
        	   var count=$('#id-support .support-class').length-1;
                count++;
             var html='<div class="support-class" style="border:1px solid #ddd;padding:10px;margin-bottom:10px;" >'+
                 '<label for="support"><strong>Support Name:&nbsp;&nbsp;</strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+
                 '<label for="support"><strong>Support Phone: </strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+
                 '<label for="support"><strong>Support Yahoo: </strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+
                 '<label for="support"><strong>Support Skype:&nbsp;</strong></label>'+
                 '<input type="text" name="supportcontent['+count+'][]" size="65" style="border-style:inset;border-width: 2px;color: #909090;background-color: #CCCCFF" value=""/><br/>'+ 
                 '</div>';
               //  alert(count);
               $('.insert').append(html);
                return false;


               });
   	    

   	});
       
       </script>
   
    <?php
  }

