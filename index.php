<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/gettext-multi-language-website/
 */
include_once("languages/languages.php"); //引入語言設定文件
?>
<html>
<head>
	<title><?php echo _('Gettext Multi-language website demo'); ?></title>
</head>
<body>
	<h1><?php echo _('Gettext Multi-language website demo'); ?></h1>
	<hr><br>
	<p><font color="#ff0000"><?php echo _('Hello world'); ?></font></p>
    <br>
	<h3><?php echo _('language selection'); ?></h3>
	<a href="setlang.php?lang=zh_TW"><?php echo _('Traditional Chinese'); ?></a> <a href="setlang.php?lang=zh_CN"><?php echo _('Simplified Chinese'); ?></a> <a href="setlang.php?lang=en_US"><?php echo _('English'); ?></a>
    <br><br>
    $_COOKIE["lang"]: <font color="#ff0000"><?php echo $_COOKIE["lang"]; ?></font>
    <br><br><br><hr>
    <a href="https://blog.reh.tw/gettext-multi-language-website/" target="_blank">https://blog.reh.tw/gettext-multi-language-website/</a>
</body>
</html>
