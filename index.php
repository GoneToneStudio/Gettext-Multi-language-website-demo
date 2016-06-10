<?php
/*
  TechPlayer, LLC.
  https://www.techplayer.org
*/
include("lang/setlang.php"); // Import language profile
?>
<html>
<head>
	<title><?php echo _('Gettext Multi-language website demo'); ?></title>
</head>
<body>
	<h1><?php echo _('Gettext Multi-language website demo'); ?></h1>
	<hr><br>
	<p><font color="#ff0000"><?php echo _('Hello world'); ?></font></p>
	<h3><?php echo _('language selection'); ?></h3>
	<a href="?lang=zh-tw"><?php echo _('Traditional Chinese'); ?></a> <a href="?lang=zh-cn"><?php echo _('Simplified Chinese'); ?></a> <a href="?lang=en-us"><?php echo _('English'); ?></a>
</body>
</html>