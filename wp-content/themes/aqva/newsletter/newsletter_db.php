<?php 
add_action('admin_init','create_table_newsletter');
function  create_table_newsletter()
{
	global $wpdb;
	$tb_country=$wpdb->prefix .'newsletter';
if ($wpdb->get_var("SHOW TABLES LIKE '$tb_country'") != $tb_country) {
		$wpdb->query("CREATE TABLE {$tb_country}(
			id char(2)  PRIMARY KEY,
			email varchar(128) NOT NULL
		)ENGINE=MyISAM DEFAULT CHARSET=utf8");

	}
}