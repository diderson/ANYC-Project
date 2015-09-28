<?php
/******************************************************************************/
/* Common list form variables
/******************************************************************************/

$id = ( isset( $_GET['id'] ) && $_GET['id'] != '' ) ? $_GET['id']: '';
$action = ( isset( $_GET['action'] ) && $_GET['action'] != '' ) ? $_GET['action']: '';
$field = ( isset( $_GET['field'] ) && $_GET['field'] != '' ) ? $_GET['field']: '';
$value = ( isset( $_GET['value'] ) && $_GET['value'] != '' ) ? $_GET['value']: '';
$currentPage = ( isset( $_GET['page'] ) && $_GET['page'] != '' ) ? $_GET['page']: '1';
$sort = ( isset( $_GET['sort'] ) && $_GET['sort'] != '' ) ? $_GET['sort']: '';
$export = ( isset( $_GET['export'] ) && $_GET['export'] != '' ) ? $_GET['export']: '';
$formAction = ( isset( $_POST['listform-action'] ) && $_POST['listform-action'] != '' ) ? $_POST['listform-action']: '';
$search_data = ( isset( $_POST['search_data'] ) && is_array( $_POST['search_data'] ) && sizeof( $_POST['search_data'] ) > 0 ) ? $_POST['search_data']: array();
$performListSearch = ( isset( $_POST['search_data']['perform_list_search'] ) && $_POST['search_data']['perform_list_search'] != '' ) ? $_POST['search_data']['perform_list_search']: '';
$pageSize = ( isset( $_POST['select-pagesize'] ) && $_POST['select-pagesize'] != '' ) ? $_POST['select-pagesize']: '';

if( $pageSize != '' && $pageSize == 'all' ) $pageSize = '100000000';

/******************************************************************************/
/* Store search and page size in session
/******************************************************************************/

if( $pageSize != '' ) $_SESSION[$backend_ID]['search_data'][$search_session_id.'_pagesize'] = $pageSize;
else $pageSize = $_SESSION[$backend_ID]['search_data'][$search_session_id.'_pagesize'];

if( $sort != '' ) $_SESSION[$backend_ID]['search_data'][$search_session_id.'_sort'] = $sort;
else $sort = $_SESSION[$backend_ID]['search_data'][$search_session_id.'_sort'];

if( $performListSearch != '' ) $_SESSION[$backend_ID]['search_data'][$search_session_id]['perform_list_search'] = $performListSearch;
$performListSearch = $_SESSION[$backend_ID]['search_data'][$search_session_id]['perform_list_search'];
$smarty->assign( 'performListSearch', $performListSearch ); 

if( $formAction == 'clear-search' ) {
	$search_data = array();
	unset($_SESSION[$backend_ID]['search_data'][$search_session_id]);	
	session_write_close ();	
} elseif( is_array( $search_data ) && sizeof( $search_data ) > 0 ) {
	//$_SESSION[$backend_ID]['search_data'] += array($search_session_id=>$search_data);
	$_SESSION[$backend_ID]['search_data'][$search_session_id] = $search_data;
} elseif( isset ( $_SESSION[$backend_ID]['search_data'][$search_session_id] ) ) {
	$search_data = $_SESSION[$backend_ID]['search_data'][$search_session_id];
}

?>