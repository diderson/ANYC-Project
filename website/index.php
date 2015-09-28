<?php
  header('Location: /admin/');
$server_name = $_SERVER['SERVER_NAME'];

 if( $server_name == 'smart-user.local.diderson.com' ) {	
	header('Location: http://smart-user.local.diderson.com/admin/');
	exit();	
} elseif( $server_name == 'smart-user.diderson.com' ) {	
	header('Location: http://smart-user.diderson.com/admin/');
	exit();	
}
?>