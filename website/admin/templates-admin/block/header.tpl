<p class="f-left box">
    <!-- Switcher -->
    <span class="f-left" id="switcher">
        <a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a>
        <a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="2 Columns" /></a>
    </span>        
	<span class="cmstitle">{#adminTitle#|escape:"html"}</span>
</p>
<p class="f-right header">
	<span class="header-user">User: <strong>{$smarty.session.TIMESHEET_ADMIN.ADMIN_FIRSTNAME|escape:"html"} {$smarty.session.TIMESHEET_ADMIN.ADMIN_LASTNAME|escape:"html"}</strong></span>
	<span class="header-lastlogin">Last Login: <strong>{$smarty.session.TIMESHEET_ADMIN.ADMIN_LASTLOGINDATE|date_format:"%e %B %Y %H:%M:%S"|escape:"html"}</strong></span>
	<span class="header-logout"><strong><a href="index.php?action=logout" id="logout">Log out</a></strong></span>
</p>