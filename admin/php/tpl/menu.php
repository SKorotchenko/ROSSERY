<menu>
	<li><a href="?page=main"			<?php if($_GET['page'] == 'main')				print 'class="active"'; ?>>Главная</a></li>
	<li><a href="?page=portfolio"		<?php if($_GET['page'] == 'portfolio')			print 'class="active"'; ?>>Портфолио</a></li>

	<li><a href="?page=exit">Выйти</a></li>
</menu>
