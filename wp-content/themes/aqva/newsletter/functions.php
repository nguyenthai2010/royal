<?php
add_action('wp_ajax_sub_newsletter', 'tt_ajax_sub_newsletter');
add_action('wp_ajax_nopriv_sub_newsletter', 'tt_ajax_sub_newsletter');

function tt_ajax_sub_newsletter()
{
	//check_ajax_referer('security');
	$email=$_POST['email'];
	$errors=null;
	
	if($email=='')
	{
		$errors .='Email is not null';	
	}else{
		
		if(!is_email($email))
		{
			$errors .='- Email is invalid';
		}
	}
	
     if(!empty($errors))
     {
     	   $json='{"error" : "'.$errors.'"}';
     	 
     	echo ($json);
     }
     else 
     {
     	  $add=add_agent($email);
     	  if($add) { 
     	     $json='{"error":""}';
     	     echo ($json);
     	  } else{
     	  	 $json='{"error":"current can not insert data. Please again." }';
     	  	 echo ($json);
     	 
     	  }
     }
	die();
}
function add_agent($email)
{
	global $wpdb;
	$tbl_newsletter=$wpdb->prefix."newsletter";
	$data=array(
		'id'			=> 0,
		'email'	=>	$email
	);
	 $ok=$wpdb->insert($tbl_newsletter, $data);
	if($ok) return $ok;return false;
}

