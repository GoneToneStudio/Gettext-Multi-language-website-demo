<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 */
include_once("languages/setlang.php"); //引入語言設定文件
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
	<a href="?lang=zh_TW"><?php echo _('Traditional Chinese'); ?></a> <a href="?lang=zh_CN"><?php echo _('Simplified Chinese'); ?></a> <a href="?lang=en_US"><?php echo _('English'); ?></a>
    <br><br><br><hr>
    <a href="https://blog.reh.tw/gettext-multi-language-website/" target="_blank">https://blog.reh.tw/gettext-multi-language-website/</a>
</body>
</html>
