<?php
/*
  科技玩客 TechPlayer
  https://www.techplayer.org
*/
preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCEPT_LANGUAGE'], $matches); // 分析 HTTP_ACCEPT_LANGUAGE 的屬性
$lang = $matches[1]; // 取第一語言設置
$lang = strtolower($lang); // 轉換為小寫
// 默認語言 & 類型
$lang = $lang;
putenv('LANG=en_US');
setlocale(LC_ALL, $lang);

$lang = isset($_GET['lang']) ? $_GET['lang'] : $lang;

if ('en-us' == $lang) {
    putenv('LANG=en_US');
    setlocale(LC_ALL, 'en_US');
} else if ('zh-tw' == $lang) {
    putenv('LANG=zh_TW');
    setlocale(LC_ALL, 'zh_TW'); // bsd use zh_TW.BIG5
	header('Content-type: text/html; charset=big5');
} else if ('zh-cn' == $lang) {
    putenv('LANG=zh_CN');
    setlocale(LC_ALL, 'zh_CN'); // bsd use zh_CN.GBK
	header('Content-type: text/html; charset=gbk');
}

define('PACKAGE', 'demo');

// gettext 設定
bindtextdomain(PACKAGE, 'lang'); // or $your_path/lang, ex: /var/www/test/lang
textdomain(PACKAGE);
?>