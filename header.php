<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SUP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header>
        <div class="wrap">
            <div class="top-head">
                <div class="top-head__logo"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="SUP"></div>
                <ul class="main-menu">
                    <li class="main-menu__item"><a class="main-menu__link" href="#">О нас</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="#">Почему мы</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="#">Наши события</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="#">Наши достижения</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="#">Наша команда</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="#">Наши партнеры</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="#">Контакт</a></li>
                </ul>
            </div>
            <div class="lead-text">
                <h1 class="lead-text__h1 heading"><strong>Асоціація</strong> Студентів <br>Українських <strong>у Польщі</strong></h1>
                <div class="btn-wrap"><a class="btn" href="#"><strong>Стать участником SUP</strong> <img src="<?php bloginfo('template_directory') ?>/img/next.svg" alt="Стать участником SUP"></a></div>
            </div>
            <div class="link-bottom"><a class="link-bottom__link" href="#about">Листайте вниз</a></div>
            <ul class="lang">
                <li class="lang__item"><a class="lang__link" href="#">UA</a></li>
                <li class="lang__item"><a class="lang__link" href="#">PL</a></li>
                <li class="lang__item"><a class="lang__link" href="#">EN</a></li>
            </ul>
            <div class="logo-bg"><img src="<?php bloginfo('template_directory') ?>/img/bg-logo.png" alt="SUP"></div>
        </div>
        <div class="social"><a class="social__link" href="#"> <i class="social__img icon-vk"></i></a><a class="social__link" href="#"> <i class="social__img icon-facebook"></i></a><a class="social__link" href="#"> <i class="social__img icon-instagram"></i></a><a class="social__link" href="#"> <i class="social__img icon-linkedin"></i></a></div>
    </header>
