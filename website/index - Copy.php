<?php
/*	======================================================
	Diderson Baka Web Developer Developer - www.diderson.com
	------------------------------------------------------
	NOTE: This code is intellectual property of
	Diderson Baka  and may not be
	reproduced or used without prior permission.
	------------------------------------------------------
	Copyright 2014 Diderson Baka Web Developer 
	======================================================	*/
	
/******************************************************************************/
// Define includes
/******************************************************************************/
require_once( 'includes/bootstrap.php' );

/******************************************************************************/
// object and content
/******************************************************************************/

$newsObj = new News();
$newsObj->GetHomeNews( $newsData, $newsDataSize );
$smarty->assign('newsData',$newsData);

$testimonyObj = new Testimony();
$testimonyObj->GetHomeTestimony( $testimonyData, $testimonyDataSize );
$smarty->assign('testimonyData',$testimonyData);

$publiciteObj = new Publicite();
$publiciteObj->GetHomePub( $publiciteData, $publiciteDataSize );
$smarty->assign('publiciteData',$publiciteData);

$fournisseurObj = new Fabricant();
$fournisseurObj->GetFabricant( $fournisseurData, $fournisseurDataSize );
$smarty->assign('fournisseurDataSize',$fournisseurDataSize);

$fournisseurObj = new Produit();
$fournisseurObj->GetProduit( $medicamentData, $medicamentDataSize );
$smarty->assign('medicamentDataSize',$medicamentDataSize);
/******************************************************************************/
/******************************************************************************/
$smarty->assign( 'contentTemplate', 'templates/content/index.tpl' );
$smarty->assign( 'sectionid', 'index' ); 
$smarty->assign( 'pageid', 'index' );
$smarty->assign( 'htmlpagetitle', 'Medicament.cd' );
$smarty->assign( 'pagetitle', 'Accueil' );

/******************************************************************************/
// Display the template
/******************************************************************************/
$smarty->display( 'templates/container.tpl');

/******************************************************************************/
// Clear up
/******************************************************************************/
unset($smarty);

?>