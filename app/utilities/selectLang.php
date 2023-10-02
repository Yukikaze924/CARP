<?php
if(isset($_COOKIE['language'])) {
  if($_COOKIE['language'] == 'English') {
      include "lang/en.php";
  } elseif($_COOKIE['language'] == 'Français') {
      include "lang/fr.php";
  } elseif($_COOKIE['language'] == '日本語') {
      include "lang/ja.php";
  } elseif($_COOKIE['language'] == '中文') {
      include "lang/zh.php";
  } elseif($_COOKIE['language'] == '國語') {
      include "lang/tw.php";
  }
} else {
  $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  if(empty($_COOKIE['language'])) {
  if($browserLang == 'en') {
      include "lang/en.php";
      setcookie('language', 'English', strtotime('2030-01-01 00:00:00'), '/');
      header("refresh:0");
  } elseif($browserLang == 'fr') {
      include "lang/fr.php";
      setcookie('language', 'Français', strtotime('2030-01-01 00:00:00'), '/');
  } elseif($browserLang == 'ja') {
      include "lang/ja.php";
      setcookie('language', '日本語', strtotime('2030-01-01 00:00:00'), '/');
  } elseif($browserLang == 'zh') {
      include "lang/zh.php";
      setcookie('language', '中文', strtotime('2030-01-01 00:00:00'), '/');
  }
  } else{
      include "lang/en.php";
  }
}
?>