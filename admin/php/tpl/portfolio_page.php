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


<article class="edit">
	<ul class="status">
		<li style="display: none">Не выбрана категория для материала</li>
	</ul>
	<h1>Редактирование статьи</h1>
	<form method="post" action="php/models/portfolioChange.php" id="changeForm">
		<input type="hidden" id="changePage" value="<?= $_GET['page'] ?>">
		<?php if(isset($_GET['id'])) { ?>
			<input type="hidden" name="mID" value="<?= $_GET['id'] ?>">
		<?php } ?>
		<ul class="inputList">
			<li>Название материала:</li>
			<li><input type="text" name="mName"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][2].'"' ?> required></li>
			<li>Расположение:</li>
			<li>
				<div class="catListBlock">
					<select name="mCategory" id="materialSelect">
						<option value="0" <?php if(isset($_GET['id'])) if($list[$current][4]==0) print 'selected'; ?>>Столбец 1</option>
						<option value="1" <?php if(isset($_GET['id'])) if($list[$current][4]==1) print 'selected'; ?>>Столбец 2</option>
						<option value="2" <?php if(isset($_GET['id'])) if($list[$current][4]==2) print 'selected'; ?>>Столбец 3</option>
					</select>
				</div>
			</li>
			<li>Описание:</li>
			<li style="padding: 4px 0;">
				<textarea name="mContent" class="ckeditor" id="editor"><?php if(isset($_GET['id'])) print $list[$current][3] ?></textarea>
			</li>
			<li>Превью-изображение:</li>
			<li data-id="preview">
				<input type="text" class="imgSrc" name="mPreview"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][5].'"' ?> required>
				<a class="button fileManagerOpen">Выбрать из менеджера</a>
			</li>
			<li>Папка проекта:</li>
			<li data-id="dir">
				<input type="text" class="imgSrc" name="mImg"<?php if(isset($_GET['id'])) print 'value="'.$list[$current][6].'"' ?> required>
				<a class="button fileManagerOpen">Выбрать из менеджера</a>
			</li>
			<li>Кнопка "Назад":</li>
			<li>
				<div class="catListBlock">
					<select name="mColor" id="materialSelect">
						<option value="black" <?php if(isset($_GET['id'])) if($list[$current][7]=='black') print 'selected'; ?>>Темная</option>
						<option value="white" <?php if(isset($_GET['id'])) if($list[$current][7]=='white') print 'selected'; ?>>Светлая</option>
					</select>
				</div>
			</li>

			<li><input type="submit" value="Отправить"></li>
		</ul>
	</form>
	<div class="popShadow" id="preview">
		<div class="popup">
			<span class="closePopup" title="Закрыть окно">x</span>
			<div class="popTitle">Выбор картинки <span>(/img/)</span></div>
			<ul>
				<?php
					$base = '../img/';
					$scan = scandir($base);
					for($i=2; $i<count($scan); $i++) { ?>
						<li class="selectImgURLBlock preview">
							<img <?php if(strripos($scan[$i],'.') !== false) print 'src="'.$base.$scan[$i].'"'; else print 'src="style/img/folder.jpg" class="folder"';?> alt="preview">
							<div class="imgsFolderFileName"><?= $scan[$i] ?></div>
						</li>
					<?php }
				?>
			</ul>
		</div>
	</div>
    <div class="popShadow" id="dir">
        <div class="popup">
            <span class="closePopup" title="Закрыть окно">x</span>
            <div class="popTitle">Выбор папки <span>(/)</span></div>
            <ul>
                <?php
                $base = '../';
                $scan = scandir($base);
                for($i=2; $i<count($scan); $i++) { ?>
                    <li class="selectImgURLBlock dir">
                        <img <?php if(strripos($scan[$i],'.') !== false) print 'src="style/img/file.png"'; else print 'src="style/img/folder.jpg" class="folder"';?>>
                        <div class="imgsFolderFileName"><?= $scan[$i] ?></div>
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </div>

</article>

