<?php
/*------------------------------/
/ TABLE portfolio
/ length: 7
/ [0] id:				int[A_I]
/ [1] timestamp:		int
/ [2] name:				varchar[512]
/ [3] content:			varchar[1024]
/ [4] column:			tinyint
/ [5] preview:			varchar[100]
/ [6] image:			varchar[100]
/------------------------------*/


if(isset($_GET['kill'])){
	if(!$mysqli->query('delete from `'.$_GET['page'].'` where `id`='.$_GET['kill']))
		die('Query error: killitem');
	header('Location: ?page='.$_GET['page']);
}

?>