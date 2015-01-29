<?php
/*------------------------------/
/ VARIABLE $list[$current]
/ length: 8
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

<article class="list">
	<a class="button" href="?page=portfolio_page">Добавить материал</a>
	<?php if(count($list) > 0) { ?>
	<table>
		<tr>
			<th>№</th>
			<th>Название</th>
			<th>Описание</th>
			<th>Столбец</th>
			<th>Действия</th>
		</tr>
		<?php for($i=0;$i<count($list);$i++) { ?>
		<tr>
			<td><?= $i+1 ?></td>
			<td><a href="?page=portfolio_page&id=<?= $list[$i][0] ?>"><?= $list[$i][2] ?></a></td>
			<td><?= $list[$i][3] ?></td>
			<td>Столбец <?= $list[$i][4]+1 ?></td>
			<td>
				<a class="action" href="?page=portfolio_page&id=<?= $list[$i][0] ?>" title="Редактировать">
					<img src="style/img/edit.png" alt="Редактировать">
				</a>
				<a class="action" href="?page=portfolio&clone=<?= $list[$i][0] ?>" title="Копировать">
					<img src="style/img/copy.png" alt="Копировать">
				</a>
				<a class="action" href="?page=portfolio&kill=<?= $list[$i][0] ?>" onclick="if(!confirm('Вы уверены, что хотите удалить данный материал? Отменить это действие будет не возможно.')) return false;" title="Удалить">
					<img src="style/img/kill.png" alt="Удалить">
				</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php } else 
		print '<p class="materialsNotFound">Материалы отсутствуют</p>'; ?>
</article>