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
/-------------------------------/
/ VARIABLE $_POST
/ length: 7
/ mID				[articles.id]
/ mName				[articles.name]
/ mCategory			[articles.field]
/ mContent			[articles.content]
/ mPreview			[articles.preview]
/ mImg				[articles.image]
/ mColor			[articles.back_color]
/------------------------------*/


// Constants
include '../const.php';

// connection start
$mysqli = new mysqli($SITE_CONST['sql_host'], $SITE_CONST['user'], $SITE_CONST['pass'], $SITE_CONST['db']);
if($mysqli->connect_error)
	die('Connection Error (mainPassChange) '.$mysqli->connect_errno.': '.$mysqli->connect_error);
$mysqli->query('SET NAMES "utf8"');
$mysqli->set_charset('utf-8');

$_POST['mContent'] = $mysqli->escape_string($_POST['mContent']);

// добавляем материал
if(!isset($_POST['mID'])){
	$q = '
		insert into `portfolio` (
					`timestamp`,	`name`,					`content`,					`field`,					`preview`,					`image`,				`back_color`				)
		values(		'.time().',		"'.$_POST['mName'].'",	"'.$_POST['mContent'].'",	'.$_POST['mCategory'].',	"'.$_POST['mPreview'].'",	"'.$_POST['mImg'].'",	"'.$_POST['mColor'].'"		);
		';
	if(!$result = $mysqli->query($q))
		die('Query error: portfolioChange 1');
// обновляем материал
} else {
	$q = '
		update `portfolio` set
			`timestamp`			=	 '.time().					'	,
			`name`				=	"'.$_POST['mName'].			'"	,
			`content`			=	"'.$_POST['mContent'].		'"	,
			`field`				=	 '.$_POST['mCategory'].	'	,
			`preview`			=	"'.$_POST['mPreview'].		'"	,
			`image`				=	"'.$_POST['mImg'].			'"	,
			`back_color`		=	"'.$_POST['mColor'].		'"
		where
			`id`				=	'.$_POST['mID'];
	//print $q;
	if(!$result = $mysqli->query($q))
		die('Query error: portfolioChange 2');
}


// connection close
$mysqli->close();
header('Location: ../../?page=portfolio'); 
?>