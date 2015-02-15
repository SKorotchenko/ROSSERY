<!-- вставить в index.php этот блок-->
<?php

	include '../admin/php/const.php';
	include '../php/portfolio.php';

	/*------------------------------/
	/ TABLE portfolio
	/ length: 7
	/ [0] id:				int
	/ [1] timestamp:		int
	/ [2] name:				string
	/ [3] content:			string
	/ [4] field:			int
	/ [5] preview:			string
	/ [6] image:			string
	/ [7] back_color:		string
	/------------------------------*/

?>
<!-- конец блока -->

<!DOCTYPE html>
<html>
<head>
	<meta chatset="utf-8">
	<title>ROSSERY - <?= $list[0][2] ?></title>
    <!-- Подключить этот css файл, либо скопировать в существующий стиля для ссылки -->
	<link rel="stylesheet" href="../css/portfolio.css">
</head>
<body>
	<img src="<?= $list[0][6] ?>">
    <!-- Добавить эту ссылку в <body> -->
	<a id="backLink" class="<?= $list[0][7] ?>" href="/"></a>
</body>
</html>