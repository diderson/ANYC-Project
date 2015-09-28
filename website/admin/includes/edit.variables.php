<?php
//Common edit form variables
$formAction = ( isset( $_POST['editform-action'] ) && $_POST['editform-action'] != '' ) ? $_POST['editform-action']: '';
$id = ( isset( $_GET['id'] ) && $_GET['id'] != '' ) ? $_GET['id']: '';

?>