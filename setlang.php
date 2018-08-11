<?php
/*
 * 張文相 Zhang Wenxiang - 個人 Blog
 * https://blog.reh.tw/
 *
 * 範例教學
 * https://blog.reh.tw/gettext-multi-language-website/
 */
$lang = $_GET["lang"]; //取得 lang 參數

if ($lang == "en_US") { //English
    setcookie("lang", "en_US", time() + (86400 * 30), "/"); //設定 Cookie lang 為 en_US
    header('Location: '.getenv("HTTP_REFERER")); //返回原頁面
}
if ($lang == "zh_TW") { //正體中文 (台灣)
    setcookie("lang", "zh_TW", time() + (86400 * 30), "/"); //設定 Cookie lang 為 zh_TW
    header('Location: '.getenv("HTTP_REFERER")); //返回原頁面
}
if ($lang == "zh_CN") { //简体中文 (中国)
    setcookie("lang", "zh_CN", time() + (86400 * 30), "/"); //設定 Cookie lang 為 zh_CN
    header('Location: '.getenv("HTTP_REFERER")); //返回原頁面
}
?>
