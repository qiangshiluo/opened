<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo ($site["SITE_INFO"]["name"]); ?></title>
		<meta name="author" content="<?php echo ($site["SITE_INFO"]["author"]); ?>" />
		<meta name="keywords" content="<?php echo ($site["SITE_INFO"]["keywords"]); ?>" />
	</head>
		<frameset cols="247,10,*" rows="*" norsize framespacing="0" frameborder="no" border="0" >
			<frame src="/opened/td_admin_system.php?m=Admin&c=Index&a=left" name="left" scrolling="yes" noresize="noresize" id="leftbox" frameborder="0" />
			<frame src="/opened/td_admin_system.php?m=Admin&c=Index&a=nav" name="nav" scrolling="No" noresize="noresize" id="navbox" frameborder="0" />
			<frame src="/opened/td_admin_system.php?m=Admin&c=Index&a=main" name="main" scrolling="yes" noresize="noresize" id="mainbox" frameborder="0" />
		</frameset>
	<noframes>
		<body>
		</body>
	</noframes>
</html>