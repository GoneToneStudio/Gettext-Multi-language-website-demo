<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 */
preg_match("/^([a-z\-]+)/i", $_SERVER["HTTP_ACCEPT_LANGUAGE"], $matches); //分析 HTTP_ACCEPT_LANGUAGE 的屬性

$lang = $matches[1]; //取第一語言設置

//默認語言 & 類型
putenv("LANG=en_US");
setlocale(LC_ALL, $lang);

$lang = isset($_GET["lang"]) ? $_GET["lang"] : $lang;
$lang = strtolower($lang); //轉換為小寫
if ($lang == "en-us" || $lang == "en_us") { //English
    putenv("LANG=en_US");
    setlocale(LC_ALL, "en_US");
}
if ($lang == "zh-tw" || $lang == "zh_tw") { //正體中文 (台灣)
    putenv("LANG=zh_TW");
    setlocale(LC_ALL, "zh_TW");
}
if ($lang == "zh-cn" || $lang == "zh_cn") { //简体中文 (中国)
    putenv("LANG=zh_CN");
    setlocale(LC_ALL, "zh_CN");
}

define('PACKAGE', 'demo'); //demo 語言檔案名稱，可自行修改

//gettext 設定
bindtextdomain(PACKAGE, 'languages'); // or $your_path/languages, ex: /var/www/test/languages
textdomain(PACKAGE);
bind_textdomain_codeset(PACKAGE, "utf-8");
?>
