<?php
// connections
include 'php/const.php';
include 'php/models.php';
include 'php/control.php';
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/adminpanel.css">
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="js/code.js"></script>
	<title><?= $SITE_CONST['site_name'] ?> - <?= $_GET['page'] ?></title>
</head>
<body>
	<header>
		<a class="mainLink" href="<?= $SITE_CONST['base_path'] ?>"><img src="style/img/logo.png" alt="logo"></a>
		<div>Админпанель</div>
	</header>
	<section>
		<?php
		if(isset($_COOKIE['autorized'])){
			include 'php/tpl/menu.php';
			include 'php/tpl/'.$_GET['page'].'.php';
		} else
			include 'php/tpl/login.php';
		?>
	</section>
</body>
</html>
