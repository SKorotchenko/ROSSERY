<?php
/*------------------------------/
/ TABLE portfolio
/ length: 7
/ [0] id:				int[A_I]
/ [1] timestamp:		int
/ [2] name:				varchar[512]
/ [3] content:			varchar[1024]
/ [4] field:			tinyint
/ [5] preview:			varchar[100]
/ [6] image:			varchar[100]
/ [7] back_color:		varchar[5]
/------------------------------*/



// enable errors logs
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

// connection start
	$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
	if($mysqli->connect_error)
		die('Connection Error (php/portfolioList.php) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
	$mysqli->query('SET NAMES "utf8"');
	$mysqli->set_charset('utf-8');

// Получаем материалы
	if($result = $mysqli->query('select * from `portfolio` order by `field`')){
		$list = array();
		$i = 0;
		while($line = $result->Fetch_row())
			$list[$i++] = $line;
	} else
		die('Query error: portfolio');

// connection end
	$mysqli->close();
?>