<?php
// check if profile is completed
if ( isset( $_SESSION[$backend_ID]['ADMIN_PROFILESTATUS'] ) && $_SESSION[$backend_ID]['ADMIN_PROFILESTATUS'] != 1 ) { 
	header( "Location: /admin/member-info-edit?pc=not" ); 
}

?>