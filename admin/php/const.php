<?php
/*------------------------------/
/ 13th AdminPanel
/ 
/ version 1.2
/ by Igor Kolesnichenko [13th]
/ bladetm13@gmail.com
/
/ Ukraine, Cherkassy
/ 20.10.2014
/------------------------------*/


$SITE_CONST = array();
$SITE_CONST['site_name'] = 'Rossery AdminPanel';
$SITE_CONST['base_path'] = 'http://'.$_SERVER['HTTP_HOST'].'/';
// Local server
$SITE_CONST['sql_host'] = 'localhost';
$SITE_CONST['user'] = 'rosseryadmin';
$SITE_CONST['pass'] = 'admin';
$SITE_CONST['db'] = 'rossery';
// Hostinger
//$SITE_CONST['sql_host'] = 'mysql.hostinger.com.ua';
//$SITE_CONST['user'] = 'u594186339_rs';
//$SITE_CONST['pass'] = 'k50T49MOd5';
//$SITE_CONST['db'] = 'u594186339_rs';






// function for pushing emails		sendMail($to, $subject, $content, $from)
include 'control/sendMail.php';
?>