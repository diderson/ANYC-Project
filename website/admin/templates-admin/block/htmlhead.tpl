<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-language" content="en" />
<meta name="robots" content="noindex,nofollow" />

<link rel="stylesheet" media="screen,projection" type="text/css" href="/components/min/?b=admin&amp;f=css/reset.css,css/main_old.css,css/style.css,client/client.css,client/timesheet.css,/js/jquery/jquery.datePicker/datePicker.css,css/tinymce_reset.css" />
<link rel="stylesheet" media="screen,projection" type="text/css" href="/components/min/?f=admin/css/2col.css" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="/components/min/?f=admin/css/1col.css" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->    
<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="/components/min/?f=admin/css/main-ie6.css" /><![endif]-->
{*<script type="text/javascript" src="/components/min/?b=admin/js&amp;f=jquery/jquery-1.3.2.min.js,jquery/ui.core.js,jquery/jquery.validate/jquery.validate.pack.js,jquery/jquery.switcher.js,jquery/ui.tabs.js,jquery/jquery.dotimeout/jquery.ba-dotimeout.min.js,admin.skipjack.js"></script>*}
<script type="text/javascript" src="/components/min/?f=admin/js/jquery/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="/admin/js/tiny_mce/tiny_mce.js"></script>

{strip}
<title>
{if isset($pageObject->templateType) && $pageObject->templateType eq 'list'}
	{if isset($pageObject->listHtmlPageTitle) && $pageObject->listHtmlPageTitle ne ''}{$pageObject->listHtmlPageTitle|escape:"html"} :: {/if}
{elseif isset($pageObject->templateType) && $pageObject->templateType eq 'edit'}
	{if isset($pageObject->id) && $pageObject->id ne ''}
		{if isset($pageObject->editHtmlPageTitle) && $pageObject->editHtmlPageTitle ne ''}{$pageObject->editHtmlPageTitle|escape:"html"} :: {/if}
	{else}
		{if isset($pageObject->insertHtmlPageTitle) && $pageObject->insertHtmlPageTitle ne ''}{$pageObject->insertHtmlPageTitle|escape:"html"} :: {/if}
	{/if}
{elseif isset($pageObject->templateType) && $pageObject->templateType eq 'view'}    
		{if isset($pageObject->viewHtmlPageTitle) && $pageObject->viewHtmlPageTitle ne ''}{$pageObject->viewHtmlPageTitle|escape:"html"} :: {/if}
{elseif isset($htmlpagetitle) && $htmlpagetitle ne ''}
	{$htmlpagetitle|escape:"html"} :: {/if}
{#clientName#|escape:"html"} - {#adminTitle#|escape:"html"}</title>
{/strip}