<?php

	include 'admin/php/const.php';
	include 'php/portfolioList.php';

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

<!DOCTYPE html>
<html>
	<head>
		<meta chatset="utf-8">
		<title>ROSSERY</title>
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/media.css">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/new.js"></script>
		<script type="text/javascript" src="forSubmit.js"></script>
		<script type="text/javascript" src="js/forMedia.js"></script>
        <link rel="icon" href="img/Favicon.png" type="image/x-icon">
        <link rel="shortcut icon" href="img/Favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="css/idangerous.swiper.css">
        <script defer src="js/idangerous.swiper-2.0.min.js"></script>
        <script type="text/javascript" src="js/slimScroll/jquery.slimscroll.min.js"></script>
	</head>
	<body>
    <div class="scrollbar">
		<header>
			<div class="logo"><img src="img/logo.png"></div>
			<nav>
				<ul class="info tabs">
					<li class="active lg"><a id="ink1">Портфолио</a><hr id="hrportfolio" class="a_active "></li>
					<li><a id="ink2">О компании</a><hr  id="hrforCompany"></li>
					<li  class="cnt"><a id="ink3">Контакты</a><hr id="hrcontacts"></li>
				</ul>
				<ul class="translate">
					<li><a href="index.php">Ru</a></li>
					<li><a href="en/index.php">En</a></li>
				</ul>
			</nav>
		</header>
		<main>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide first">
                        <article id="portfolio" class="block ink1">
                            <div class="content-slide">
                                <section id="firstSection">
                                <ul class="imageLeft">
                                    <?php
                                        for($i=0; $i<count($list); $i++)
                                            if($list[$i][4] == 0) { ?>
                                            <li>
                                                <a class="projects" href="portfolio.php?id=<?= $list[$i][0] ?>" <!--title="<?= $list[$i][2] ?>-->">
                                                    <div class="light">
                                                        <div class="description">
                                                            <h3><?= $list[$i][2] ?></h3>
                                                            <hr>
                                                            <p><?= $list[$i][3] ?></p>
                                                        </div>
                                                    </div>
                                                    <img src="<?= $list[$i][5] ?>" alt="<?= $list[$i][2] ?>">
                                                </a>
                                            </li>
                                        <?php }
                                    ?>
                                </ul>
                                <ul class="imageCenter">
                                    <?php
                                        for($i=0; $i<count($list); $i++)
                                            if($list[$i][4] == 1) { ?>
                                            <li>
                                                <a class="projects" href="portfolio.php?id=<?= $list[$i][0] ?>">
                                                    <div class="light">
                                                        <div class="description">
                                                            <h3><?= $list[$i][2] ?></h3>
                                                            <hr>
                                                            <p><?= $list[$i][3] ?></p>
                                                        </div>
                                                    </div>
                                                    <img src="<?= $list[$i][5] ?>" alt="<?= $list[$i][2] ?>">
                                                </a>
                                            </li>
                                        <?php }
                                    ?>
                                </ul>
                                <ul class="imageRight">
                                    <?php
                                        for($i=0; $i<count($list); $i++)
                                            if($list[$i][4] == 2) { ?>
                                            <li>
                                                <a class="projects" href="portfolio.php?id=<?= $list[$i][0] ?>">
                                                    <div class="light">
                                                        <div class="description">
                                                            <h3><?= $list[$i][2] ?></h3>
                                                            <hr>
                                                            <p><?= $list[$i][3] ?></p>
                                                        </div>
                                                    </div>
                                                    <img src="<?= $list[$i][5] ?>" alt="<?= $list[$i][2] ?>">
                                                </a>
                                            </li>
                                            <?php }
                                    ?>
                                </ul>
                                </section>
                                <section id="line"></section>
                                <footer>
                                    <h2>Присоединяйтесь к нам</h2>
                                    <ul class="social">
                                        <li class="vk"><a></a><a class="black-border" href="https://vk.com/WEAREROSSERY" target="_blank"></a></li>
                                        <li class="fb"><a></a><a class="black-border" href="https://www.facebook.com/WEAREROSSERY?ref=bookmarks" target="_blank"></a></li>
                                        <li class="tw"><a></a><a class="black-border" href=" https://twitter.com/WEAREROSSERY" target="_blank"></a></li>
                                        <li class="be"><a></a><a class="black-border" href="https://www.behance.net/WEAREROSSERY" target="_blank"></a></li>
                                        <li class="vm"><a></a><a class="black-border" href="https://vimeo.com/wearerossery" target="_blank"></a></li>
                                        <li class="inst"><a></a><a class="black-border" href="http://instagram.com/wearerossery" target="_blank"></a></li>
                                    </ul>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide second">
                        <article id="forCompany" class='block ink2'>
                            <div class="content-slide">
                                <section>
                                    <ul itemprop='aboutcompany' itemscope itemtype="https://schema.org/Organization">
                                        <li><h2 itemprop="title">О нас</h2></li>
                                        <li>
                                            <p itemprop='comment'>Ни для кого не секрет, что встречают по одежке. В нашем случае внешний
                                                облик компании – это те ее фирменные элементы с которыми встречается
                                                потенциальный покупатель на стадии выбора компании для сотрудничества.
                                                На данном этапе крайне необходимо, чтобы клиент понял, что философия
                                                компании основана на качестве, а значит и услуги она будет предлагать
                                                соответствующего уровня.
                                            </p>
                                            <p itemprop='comment'>Мы уверены в том, что для каждого из нас есть определенная ниша, в которой
                                                нам суждено крутиться и изо всех сил стараться быть в этой сфере лучшим,
                                                предлагая клиентам себя, как специалиста, который может решить ряд
                                                вопросов, входящих в область его компетенции.
                                            </p>
                                            <p itemprop='comment'>В основе создания компании Rossery лежит желание небольшой группы
                                                профессионалов в области дизайна, веб-программирования и веб-маркетинга
                                                демонстрировать свое видение вещей в этом мире.
                                            </p>
                                            <p itemprop='comment'>Мы перфекционисты и соответственно стараемся каждый из наших проектов
                                                довести до идеальной пропорции элегантности и эффективности.
                                            </p>
                                        </li>
                                    </ul>
                                </section>
                                <section>
                                    <ul itempop="services" itemscope itemtype="http://schema.org/Service">
                                        <li><h2 itemprop="title">Услуги</h2></li>
                                        <li itemprop="serviceArea">
                                            <h3 itemprop="serviceType">Брендинг</h3>
                                            <p itemprop="comment">Что может принести больше удовлетворения, чем процесс созидания?</p>
                                            <p itemprop="comment">Мы создаем эффектные визуальные образы, которые эффективно воздействуют
                                                на аудиторию потенциальных клиентов.
                                            </p>
                                            <p itemprop="comment" class="grey">Создание логотипов / фирменный стиль / нейминг / рекламная компания</p>
                                            <h3 itemprop="serviceType">Веб-дизайн</h3>
                                            <p itemprop="comment">Отказ от излишеств в пользу функциональности, четко выверенная архитектура сайта,
                                                предельная ясность и лаконичность подачи информации, максимальное внимание к деталям, цветовая гармнония –
                                                постулаты, на которых построена наша философия создания сайтов.
                                            </p>
                                            <p itemprop="comment"  class="grey">Создание и написание веб-сайтов / респонсив дизайн / создание архитектуры сайта</p>
                                            <h3 itemprop="serviceType">ВЕБ-МАРКЕТИНГ</h3>
                                            <p itemprop="comment">Конкуренты не спят, надо быть первым, быть лучшим.
                                                Мы поможем вам сделать так, чтобы ваши клиенты не прошли мимо.
                                            </p>
                                            <p itemprop="comment" class="grey">Поисковая оптимизация (SEO) / продвижение в социальных сетях (SMM) </p>
                                        </li>
                                    </ul>
                                </section>	</li>

                                <section>
                                    <ul itempop="contacts" itemscope itemtype="http://schema.org/ContactPage">
                                        <li>
                                            <h2 itemprop="title">Контакты</h2>
                                        </li>
                                        <li>
                                            <p itemprop="comments">Мы всегда заинтересованы в новых проектах, поэтому звоните или <a class="write-us grey">пишите нам</a>
                                                и мы ответим на все интересующие вас вопросы.
                                            </p>
                                        </li>
                                    </ul>
                                </section>
                                <section>
                                    <ul itempop="office" itemscope itemtype="http://schema.org/PostalAddress">
                                        <li itemprop="title">
                                            <h2>Офисы</h2>
                                        </li>
                                        <li>
                                            <ul>
                                                <li class="officeCounty">
                                                    <h3 itemprop="addressCountry">Украина</h3>
                                                </li>
                                                <li class="forOfficeCounty">
                                                    <p itemprop="comments">ул. Розы Люксембург, 31<br>Черкассы, Украина</p>
                                                    <ul class="ua-contacts">
                                                        <li><span class="grey">Т.</span>  +38093 519-75-80</li>
                                                        <li><span class="grey">Е.</span>   <a href="mailto:info@rossery.com">info@rossery.com</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    </ul>
                                </section>
                                <section>
                                    <ul itempop="social" itemscope itemtype="http://schema.org/SocialEvent">
                                        <li>
                                            <h2 itemprop="title">СОЦИАЛЬНЫЕ<br/>СЕТИ</h2>
                                        </li>
                                        <li class="forCompanySocial">
                                            <ul class="social">
                                                <li class="vk"><a></a><a class="black-border" href="https://vk.com/WEAREROSSERY" target="_blank"></a></li>
                                                <li class="fb"><a></a><a class="black-border" href="https://www.facebook.com/WEAREROSSERY?ref=bookmarks" target="_blank"></a></li>
                                                <li class="tw"><a></a><a class="black-border" href=" https://twitter.com/WEAREROSSERY" target="_blank"></a></li>
                                                <li class="be"><a></a><a class="black-border" href="https://www.behance.net/WEAREROSSERY" target="_blank"></a></li>
                                                <li class="vm"><a></a><a class="black-border" href="https://vimeo.com/wearerossery" target="_blank"></a></li>
                                                <li class="inst"><a></a><a class="black-border" href="http://instagram.com/wearerossery" target="_blank"></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </section>
                            </div>
                        </article>
                    </div>
                    <div class="swiper-slide third">
                        <article id="contacts" class='block ink3'>
                            <div class="content-slide">
                                <section class='contactsTitle'>
                                    <h1>ЗАИНТЕРЕСОВАНЫ В СОТРУДНИЧЕСТВЕ С НАМИ?</h1>
                                    <p>ПРОСТО ЗАПОЛНИТЕ СЛЕДУЮЩУЮ ФОРМУ - И МЫ СВЯЖЕМСЯ С ВАМИ</p>
                                    <form action="" method="post" id="ajaxform">
                                        <ul>
                                            <li><p>Ваше имя <input type="text" name="name" maxlength="34"></p></li>
                                            <li><p>Страна, город <input type="text" name="country" maxlength="31"></p></li>
                                            <li><p>Ваш номер телефона <input type="text" name="telephone" maxlength="26"></p></li>
                                            <li><p>Ваш e-mail <input type="text" name="email" maxlength="33"></p></li>
                                            <li><p>Пару слов о вашем проекте</p>
                                                <p class="invisible">Пару слов о вашем проекте</p>
                                                <p class="invisible">Пару слов о вашем проекте</p>
                                                <p class="invisible">Пару слов о вашем проекте</p>
                                                <p class="invisible">Пару слов о вашем проекте</p>
                                                <textarea maxlength="580" name="message"></textarea>
                                            </li>
                                        </ul>
                                        <input type="submit" value="ОТПРАВИТЬ СООБЩЕНИЕ" >
                                    </form>
                                </section>
                                <section class='contactsCountry'>
                                    <h2 itemprop="addressCountry">Украина</h2>
                                    <ul class="ua-contacts">
                                        <li>ул. Розы Люксембург, 31</li>
                                        <li>Черкассы, Украина</li>
                                        <li>Т. +38093 519-75-80</li>
                                        <li>Е. <a href="mailto:info@rossery.com">info@rossery.com</a></li>
                                    </ul>
                                </section>
                                <section class="afterFormSubmit">
                                    <section class="line"></section>
                                    <h1>ВАШ ЗАПРОС УСПЕШНО ОТПРАВЛЕН</h1>
                                    <p>СПАСИБО ВАМ ЗА ВАШЕ СООБЩЕНИЕ. В БЛИЖАЙШЕЕ ВРЕМЯ МЫ СВЯЖЕМСЯ С ВАМИ</p>
                                </section>
                                <footer>
                                    <h2>Присоединяйтесь к нам</h2>
                                    <ul class="social">
                                        <li class="vk"><a></a><a class="black-border" href="https://vk.com/WEAREROSSERY" target="_blank"></a></li>
                                        <li class="fb"><a></a><a class="black-border" href="https://www.facebook.com/WEAREROSSERY?ref=bookmarks" target="_blank"></a></li>
                                        <li class="tw"><a></a><a class="black-border" href=" https://twitter.com/WEAREROSSERY" target="_blank"></a></li>
                                        <li class="be"><a></a><a class="black-border" href="https://www.behance.net/WEAREROSSERY" target="_blank"></a></li>
                                        <li class="vm"><a></a><a class="black-border" href="https://vimeo.com/wearerossery" target="_blank"></a></li>
                                        <li class="inst"><a></a><a class="black-border" href="http://instagram.com/wearerossery" target="_blank"></a></li>
                                    </ul>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </main>
    </div>
	</body>
</html>
