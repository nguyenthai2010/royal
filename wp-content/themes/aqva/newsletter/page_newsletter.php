<?php
  add_action('admin_menu', 'bt_add_newsletter');
    function bt_add_newsletter(){   
        add_menu_page( 'News letter', 'News letter', 'edit_posts', 'news-letter', 'bt_news_letter', get_bloginfo('template_url') . '/images/newsletter-icon.png', 10 );
    }
 function bt_news_letter(){
	 global $wpdb;
	 $table_name='wp_newsletter';
	 if(isset($_GET['ID']))
	 {
	 	$term_id=$_GET['ID'];
	 	$wpdb->get_results( "DELETE FROM {$table_name} where ID={$term_id}");
	 }	
?>
<style>
.bang_audit table
{
width:98%;
}
.bang_audit table tr.hang
{
 background-color: #F1F1F1;
 
	 font-size: 14px;
    line-height: 1.3em;
	font-family: Georgia,"Times New Roman","Bitstream Charter",Times,serif;
}
.bang_audit table tr td
{
line-height:30px;
border-bottom:1px solid #666666;
text-indent:5px;
}
</style>
	<div class="bang_audit">
		<table cellpadding="0" cellspacing="0">
			<tr class="hang">
				<td></td>	
				<td>Email</td>
				<td>Delete</td>
			</tr>
			<?php 
			$i=1;
			$myrows2 = $wpdb->get_results( "SELECT * FROM {$table_name} order by ID DESC");		
			foreach ($myrows2 as $value){
			?>
			<tr>				
				<td><?php echo $i;?></td>
				<td style="display:none;"><?php echo $value -> id;?></td>
				<td><?php echo $value -> email ; ?></td>
				<td><a href="<?php bloginfo('url')?>/wp-admin/admin.php?page=news-letter&ID=<?php echo $value ->id;?>">Delete</a></td>
			</tr>
			<?php 
			$i++;
			}?>
			
		</table>
	</div>	
<?php	
}