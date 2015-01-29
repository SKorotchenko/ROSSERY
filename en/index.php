<?php

include '../admin/php/const.php';
include '../php/portfolioList.php';

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
</head>
<body>
<header>
    <div class="logo"><img src="../img/logo.png"></div>
    <nav>
        <ul class="info tabs">
            <li class="active lg"><a id="ink1">PORTFOLIO</a><hr id="hrportfolio" class="a_active "></li>
            <li><a id="ink2">ABOUT</a><hr  id="hrforCompany"></li>
            <li class="cnt"><a id="ink3">CONTACT</a><hr id="hrcontacts"></li>
        </ul>
        <ul class="translate">
            <li><a href="../index.php">Ru</a></li>
            <li><a href="index.php">En</a></li>
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
                                            <a class="projects" href="portfolio.php?id=<?= $list[$i][0] ?>">
                                                <div class="light">
                                                    <div class="description">
                                                        <h3><?= $list[$i][2] ?></h3>
                                                        <hr>
                                                        <p><?= $list[$i][3] ?></p>
                                                    </div>
                                                </div>
                                                <img src="<?= $SITE_CONST['base_path']. $list[$i][5] ?>" alt="<?= $list[$i][2] ?>">
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
                                                <img src="<?= $SITE_CONST['base_path'].$list[$i][5] ?>" alt="<?= $list[$i][2] ?>">
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
                                                <img src="<?= $SITE_CONST['base_path'].$list[$i][5] ?>" alt="<?= $list[$i][2] ?>">
                                            </a>
                                        </li>
                                    <?php }
                                ?>
                            </ul>
                        </section>
                        <section id="line"></section>
                        <footer>
                            <h2>FOLLOW US</h2>
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
                                <li><h2 itemprop="title">ABOUT</h2></li>
                                <li>
                                    <p itemprop='comment'>It’s not a secret that people judge a book by its cover.
                                        In our case the outer image of the company is those of branded elements which
                                        the potential customer comes across with on the phase of choosing the company
                                        for cooperation. It’s essential on this stage for the customer to understand
                                        that the culture of the company is based on the quality, which means that
                                        services will be offered on the same level.
                                    </p>
                                    <p itemprop='comment'>We are positive about each of us having a particular occupation,
                                        in which we are meant to work and make an all-out effort to be the best in this sphere,
                                        offering ourselves to our clients as specialists who are able to solve a range of problems
                                        included into our area of competence.
                                    </p>
                                    <p itemprop='comment'>The desire of a group of professionals in the field of design,
                                        web-programming and web-marketing to demonstrate its vision of the world is the basis
                                        for starting up the Rossery company.
                                    </p>
                                    <p itemprop='comment'>We are perfectionists, consequently, we try to bring each of our projects
                                        to the perfect proportion of elegance and effectiveness.
                                    </p>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <ul itempop="services" itemscope itemtype="http://schema.org/Service">
                                <li><h2 itemprop="title">SERVICES</h2></li>
                                <li itemprop="serviceArea">
                                    <h3 itemprop="serviceType">Branding</h3>
                                    <p itemprop="comment">What can bring more satisfaction than the process of creation?
                                    </p>
                                    <p itemprop="comment">We create spectacular visual images which influence effectively
                                        the audience of potential customers.
                                    </p>
                                    <p itemprop="comment" class="grey">Logo design / Corporate identity / Advertising campaign</p>
                                    <h3 itemprop="serviceType">Web-design</h3>
                                    <p itemprop="comment">The refusal from unnecessaries in favor of utility, strictly adjusted
                                        site architecture, utmost clarity, laconism of data submission, maximum attention to the
                                        details, harmony of colors are postulates which the philosophy of site creation of the
                                        Rossery company is built on.
                                    </p>
                                    <p itemprop="comment"  class="grey">Website design and development / Responsive design / Website architecture</p>
                                    <h3 itemprop="serviceType">MARKETING</h3>
                                    <p itemprop="comment">Competitors keep an open eye, it’s important to be the first and the best.
                                        We will help you to have the clients who can’t pass by.
                                    </p>
                                    <p itemprop="comment" class="grey">Search engine optimization (SEO) / Social media marketing (SMM)</p>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <ul itempop="contacts" itemscope itemtype="http://schema.org/ContactPage">
                                <li>
                                    <h2 itemprop="title">Contacts</h2>
                                </li>
                                <li>
                                    <p itemprop="comments"> We’re always interested in new projects, big or small.
                                        Please don’t hesitate <a class="write-us grey">to get in touch</a> with us regarding your project.
                                    </p>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <ul itempop="office" itemscope itemtype="http://schema.org/PostalAddress">
                                <li itemprop="title">
                                    <h2>OFFICES</h2>
                                </li>
                                <li>
                                    <ul>
                                        <li class="officeCounty">
                                            <h3 itemprop="addressCountry">UKRAINE</h3>
                                        </li>
                                        <li class="forOfficeCounty">
                                            <p itemprop="comments">Rozy Luxemburg str., 31<br>Cherkassy, Ukraine</p>
                                            <ul class="ua-contacts">
                                                <li><span class="grey">Т.</span>  +38093 519-75-80</li>
                                                <li><span class="grey">Е.</span>   <a href="mailto:info@rossery.com">info@rossery.com</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </section>
                        <section>
                            <ul itempop="social" itemscope itemtype="http://schema.org/SocialEvent">
                                <li>
                                    <h2 itemprop="title">SOCIAL<br/>СNETWORKS</h2>
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
                            <h1>WHAT WE CAN DO FOR YOU? </h1>
                            <p>FILL THE NEXT FORM AND WE’LL CONT ACT YOU</p>
                            <form action="" method="post" id="ajaxform">
                                <ul>
                                    <li><p>MY NAME IS <input type="text" name="name" maxlength="30"></p></li>
                                    <li><p>COUNTRY, CITY <input type="text" name="country" maxlength="27"></p></li>
                                    <li><p>MY PHONE NUMBER IS <input type="text" name="telephone" maxlength="21"></p></li>
                                    <li><p>MY E-MAIL IS <input type="text" name="email" maxlength="30"></p></li>
                                    <li><p>SOME WORDS ABOUT YOUR PROJECT</p>
                                        <p class="invisible">Пару слов о вашем проекте</p>
                                        <p class="invisible">Пару слов о вашем проекте</p>
                                        <p class="invisible">Пару слов о вашем проекте</p>
                                        <p class="invisible">Пару слов о вашем проекте</p>
                                        <textarea maxlength="530" name="message"></textarea>
                                    </li>
                                </ul>
                                <input type="submit" value="SEND MESSAGE" >
                            </form>
                        </section>
                        <section class='contactsCountry'>
                            <h2 itemprop="addressCountry">UKRAINE</h2>
                            <ul class="ua-contacts">
                                <li class="grey">Rozy Luxemburg str., 31</li>
                                <li>Cherkassy, Ukraine</li>
                                <li>Т. +38093 519-75-80</li>
                                <li>Е.  <a href="mailto:info@rossery.com">info@rossery.com</a></li>
                            </ul>
                        </section>
                        <section class="afterFormSubmit">
                            <section class="line"></section>
                            <h1>YOUR REQUEST HAS BEEN SENT SUCCESSFULLY</h1>
                            <p>THANK YOU FOR YOUR MESSAGE. IN THE NEAR FUTURE WE WILL CONTACT YOU</p>
                        </section>
                        <footer>
                            <h2>FOLLOW US</h2>
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
</body>
</html>