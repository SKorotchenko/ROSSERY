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


// Получаем материалы
if($_GET['page'] == 'portfolio'  ||  $_GET['page'] == 'portfolio_page'){
	if($result = $mysqli->query('select * from `portfolio` order by `field`')){
		$list = array();
		$i = 0;
		while($line = $result->Fetch_row())
			$list[$i++] = $line;
	} else
		die('Query error: portfolio');
}
if($_GET['page'] == 'portfolio_page')
	if(isset($_GET['id']))
		for($current = 0; $current < count($list); $current++)
			if($_GET['id']*1 == $list[$current][0])
				break;
?>