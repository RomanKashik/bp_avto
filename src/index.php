<?php
session_start();
require_once('lang/lang.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<!--	<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
	<!--	<meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.2" />-->
	<meta name="description"
		  content="Bp auto (car selection) - проверка, диагностика автомобилей перед покупкой. Автоподбор поддержаных и новых авто. ">
	<meta name="keywords" content="Автоподбор,Автоподбор поддержаных автомобилей,Автоподбор новых автомобилей,Автоподбор автомобилей с
		  пробегом,услуги автоподбора,подбор авто,диагностика авто,диагностика авто перед покупкой,компьютерная диагностика
		   авто,проверка пробег,проверка пробега авто,выездной диагностика,автомобиль диагностика,подбор авто,автомобиль покупка
		   помощь,купить авто,купить машину,купить б/у машину,купить автомобиль,продать авто,авто ремонт,авто сервисы Рига,
		   Выездная авто диагностика,покупка авто Рига,выездная проверка авто,авто Румбула Рига,">
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta http-equiv="x-rim-auto-match" content="none">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="libs/normalize.css" />
	<link rel="stylesheet" href="libs/magnific-popup.css" />
	<link rel="stylesheet" href="fonts/stylesheet.css" />
	<link rel="stylesheet" href="css/main.css" />

	<title>BP AUTO</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<!-- Header -->
<header class="header">
	<div class="container-fluid">
		<nav class="navigation">
			<div class="navigation__logo logo">
				<a href="#"><img src="images/logo.png" alt="logo" /></a>
			</div>
			<div class="navigation__block">
				<div class="navigation__phone phone">+(371) 26858674</div>
				<ul class="navigation__menu menu">
					<li class="menu__item">
						<a href="#pop-up-about" class="menu__link popup-about"><?php echo $Lang['about_us'] ?></a>
					</li>
					<li class="menu__item">
						<a href="#servise" class="menu__link"><?php echo $Lang['what_we_do'] ?></a>
					</li>
					<li class="menu__item">
						<a href="#for-look" class="menu__link"><?php echo $Lang['search_car'] ?></a>
					</li>
					<li class="menu__item">
						<a href="#why-us" class="menu__link"><?php echo $Lang['why_we'] ?></a>
					</li>
					<li class="menu__item">
						<a href="#delivery" class="menu__link"><?php echo $Lang['car_service'] ?></a>
					</li>
					<li class="menu__item">
						<a href="#contact" class="menu__link"><?php echo $Lang['contacts'] ?></a>
					</li>
				</ul>
			</div>
			<div class="navigation__action">
				<div class="navigation__top">
					<div class="navigation__social">
						<a href="#">
							<img src="images/icon/icon_facebook.png" alt="facebook link" />
						</a>
						<a href="#">
							<img src="images/icon/icon_instagram.png" alt="instagram link" />
						</a>
					</div>
					<div class="navigation__lang">
						<a href="index.php?lang=ru">RUS</a>
						<span>|</span>
						<a href="index.php?lang=lv">LV</a>
						<span>|</span>
						<a href="index.php?lang=en">EN</a>
					</div>
				</div>
				<div class="navigation__bottom">
					<a href="#poup-form" class="btn btn__small navigation__btn popup-modal">
                        <?php echo $Lang['btn_make_order'] ?>
					</a>
				</div>
			</div>
		</nav>
		<div class="header__content">
			<h1 class="header__title"><?php echo $Lang['main_title'] ?></h1>
			<p class="header__subtitle"><?php echo $Lang['main_subtitle'] ?></p>
			<a href="#pop-up-about"
			   class="btn header__btn btn__small popup-about"><?php echo $Lang['about_us_btn'] ?></a>
			<div class="header__scroll"></div>
		</div>
	</div>
</header>
<!-- Main content -->
<main>
	<!-- Services -->
	<section class="services" id="servise">
		<h2 class="main-title"><?php echo $Lang['what_we_do'] ?></h2>

		<div class="container">
			<!-- top card -->
			<div class="top-card">
				<div class="card">
					<div class="card__img ">
						<img src="images/service_1.jpg" alt="service" />
					</div>
                    <?php echo $Lang['one_car_checking']; ?>
				</div>

				<div class="card">
					<div class="card__img">
						<img src="images/service_2.jpg" alt="service" />
					</div>
                    <?php echo $Lang['full_car_checking']; ?>
				</div>
			</div>
			<!-- bottom card -->
			<div class="bottom-card">
				<div class="card card__bottom">
					<div class="card__img card__img--bottom">
						<img src="images/service_3.jpg" alt="service" />
					</div>
                    <?php echo $Lang['several_car_checking']; ?>
				</div>

				<div class="card card__bottom">
					<div class="card__img card__img--bottom">
						<img src="images/service_4.jpg" alt="service" />
					</div>
                    <?php echo $Lang['car_searching_per-client']; ?>
				</div>

				<div class="card card__bottom">
					<div class="card__img card__img--bottom">
						<img src="images/service_5.jpg" alt="service" />
					</div>
                    <?php echo $Lang['car_per_client']; ?>
				</div>
			</div>
		</div>
	</section>

	<!-- Problem -->
	<section class="flex">
		<h2 class="main-title"><?php echo $Lang['problem_title']; ?></h2>

		<div class="container">
			<div class="flex__wrap flex__wrap--problem">
				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_car.png" alt="car" />
					</div>
					<div class="flex__description flex__description--problem">
                        <?php echo $Lang['condition_of_car']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_speedometer.png" alt="speedometer" />
					</div>
					<div class="flex__description flex__description--problem"><?php echo $Lang['not_original_mileage']; ?></div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_alarm.png" alt="alarm" />
					</div>
					<div class="flex__description flex__description--problem">
                        <?php echo $Lang['problem_with_documents']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_judge.png" alt="jude" />
					</div>
					<div class="flex__description flex__description--problem">
                        <?php echo $Lang['risk_in_car']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_time.png" alt="time" />
					</div>
					<div class="flex__description flex__description--problem">
                        <?php echo $Lang['waste_a_lot_of_time']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--problem">
					<div class="flex__img">
						<img src="images/icon/icon_wallet.png" alt="wallet" />
					</div>
					<div class="flex__description flex__description--problem">
                        <?php echo $Lang['overpriced_and_inadequate']; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- For look -->
	<section class="for-look" id="for-look">
		<h2 class="main-title main-title--color main-title--where">
            <?php echo $Lang['where_title']; ?></h2>
		<div class="container">
			<ul class="for-look__list">
				<li class="for-look__item">
					<p class="for-look__title"><?php echo $Lang['city_one']; ?></p>
					<div class="for-look__img">
						<a href="https://www.ss.lv/" target="_blank">
							<img src="images/logo_ss.png" alt="В Латвии" /></a>
					</div>
				</li>

				<li class="for-look__item">
					<p class="for-look__title"><?php echo $Lang['city_two']; ?></p>
					<div class="for-look__img">
						<a href="https://rus.auto24.ee/main/mainindex.php" target="_blank"><img
									src="images/logo_auto_24.png" alt="В Эстонии" /></a>
					</div>
				</li>

				<li class="for-look__item">
					<p class="for-look__title"><?php echo $Lang['city_three']; ?></p>
					<div class="for-look__img">
						<a href="https://ru.autoplius.lt/" target="_blank"><img src="images/logo_autoplus.png"
																				alt="В Литве" /></a>
					</div>
				</li>

				<li class="for-look__item">
					<p class="for-look__title"><?php echo $Lang['city_four']; ?></p>
					<div class="for-look__img">
						<a href="https://www.autoscout24.com/"><img src="images/logo_auto_scout_24.png"
																	alt="В Европе" /></a>
						<a href="https://www.mobile.de/" target="_blank"><img src="images/logo_mobile.png"
																			  alt="В Европе" /></a>
					</div>
				</li>
			</ul>
		</div>
	</section>

	<!-- Why us-->
	<section class="flex flex--why" id="why-us">
		<h2 class="main-title"><?php echo $Lang['why_title']; ?></h2>
		<div class="container">
			<div class="flex__wrap">
				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_1.png" alt="01" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['we_check_each_advertise']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_2.png" alt="02" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['we_can_check_cars']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_3.png" alt="03" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['not_high_price']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_4.png" alt="04" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['we_work_as_company']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_5.png" alt="05" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['bidding_with_a_sellers']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_6.png" alt="06" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['huge_experience']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_7.png" alt="07" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['always_on_client_side']; ?>
					</div>
				</div>

				<div class="flex__items flex__items--why">
					<div class="flex__img flex__img--why">
						<img src="images/icon/icon_8.png" alt="08" />
					</div>
					<div class="flex__description flex__description--why">
                        <?php echo $Lang['post_payment']; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Order -->
	<section class="order">
		<div class="container">
			<div class="order__wrap ">
				<h2 class="order__heading">Заказ</h2>
				<form action="mail.php?lang=ru" method="POST" class="form order__form">
					<div class="form__title order__title"><?php echo $Lang['order_title']; ?></div>
					<div class="form__subtitle order__subtitle">
                        <?php echo $Lang['order_subtitle']; ?>
					</div>

					<label class="form__label order__label" for="link"><?php echo $Lang['order_label_link']; ?></label>
					<input class="form__input order__input" type="text" name="link" id="link" placeholder="" required />

					<label class="form__label order__label"
						   for="email"><?php echo $Lang['order_label_email']; ?></label>
					<input class="form__input order__input" type="text" name="email" id="email" placeholder=""
						   required />
					<div class="form__captcha">
						<div class="g-recaptcha" style="transform:scale(0.9);transform-origin:0;"
							 data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn"></div>
					</div>
					<input class="btn btn__large form__btn" type="submit" name="submit"
						   value="<?php echo $Lang['btn_send']; ?>">
					<div class="form_result"></div>
					<hr class="form__line" />
					<div class="form__contacts order__contacts">
                        <?php echo $Lang['form_contacts']; ?>
						<div class="form__icon">
							<img src="images/icon/icon_viber.png" alt="viber" />
							<img src="images/icon/icon_whatsapp.png" alt="vwhatsapp" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<!-- Delivery -->
	<section class="delivery" id="delivery">
		<div class="container">
			<div class="delivery__wrap">
				<h3 class="main-title main-title--color"><?php echo $Lang['delivery_title']; ?></h3>
				<p class="delivery__subtitle"><?php echo $Lang['delivery_subtitle']; ?></p>
				<div class="delivery__inner">
					<div class="delivery__left delivery__block">
						<a href=" http://bpauto.lv/cardelivery/" target="_blank" class="delivery__link"></a>
						<p class="delivery__description"><?php echo $Lang['delivery_desc_left']; ?></p>
					</div>
					<div class="delivery__right delivery__block">
						<a href="http://bpauto.lv/" target="_blank" class="delivery__link delivery__link--hover"></a>
						<p class="delivery__description"><?php echo $Lang['delivery_desc_right']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Map -->
	<section class="map" id="contact">
		<h2 class="map__heading">Контакты</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.9365685277126!2d24.05614865797299!3d56.953551868737456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecffd5268be5f%3A0xc439fb05a5f73f44!2zU2xva2FzIGllbGEgNTIsIEt1cnplbWVzIHJham9ucywgUsSrZ2EsIExWLTEwMDcsINCb0LDRgtCy0LjRjw!5e0!3m2!1sru!2sua!4v1580329075130!5m2!1sru!2sua"
				height="568" style="border:0;" allowfullscreen=""></iframe>

		<div class="map__contact">
			<p class="map__title"><?php echo $Lang['map_title']; ?></p>
			<p class="map__name"><?php echo $Lang['map_name']; ?></p>
			<p class="map__data map__data--loc"><?php echo $Lang['map_loc']; ?></p>
			<p class="map__data map__data--tel">
                <?php echo $Lang['map_tel']; ?></p>
			<p class="map__data map__data--mail">
				E-mail: <a href="mailto:info@bpauto.lv"><?php echo $Lang['map_mail']; ?></a>
			</p>
			<p class="map__data map__data--web">
				Web: <a href="www.bpauto.lv"><?php echo $Lang['map_web']; ?></a>
			</p>
		</div>
	</section>

	<!-- Feedback -->
	<section class="feedback">
		<div class="container">
			<h3 class="main-title"><?php echo $Lang['feedback_title']; ?> </h3>
			<div class="feedback__inner">
				<div class="feedback__img">
					<img src="images/ask.png" alt="email" />
					<p class="feedback__desc"><?php echo $Lang['feedback_desc']; ?></p>
				</div>

				<form action="mail.php?lang=ru" method="POST" class="feedback__form">
					<div class="feedback__block">
						<label class="feedback__label" for="e-mail"><?php echo $Lang['feedback_label_mail']; ?></label>
						<input type="email" name="email" id="e-mail" class="feedback__input" required />
						<div class="feedback__captcha">
							<div class="g-recaptcha" style="transform:scale(0.9);transform-origin:0;" data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn
													"></div>
						</div>
					</div>

					<div class="feedback__block">
						<label class="feedback__label"
							   for="message"><?php echo $Lang['feedback_label_message']; ?></label>
						<textarea name="message" id="message" cols="30" rows="10" class="feedback__textarea"
								  placeholder=""></textarea>
						<input class="btn btn__small feedback__btn" type="submit" name="submit"
							   value="<?php echo $Lang['btn_send']; ?>">
					</div>
				</form>
			</div>
		</div>
	</section>
</main>
<!-- Footer -->
<footer class="footer">
	<div class="container-fluid">
		<div class="footer__content">
			<div class="footer__contact">
				<p class="footer__phone phone"><?php echo $Lang['footer_phone']; ?></p>
				<p class="footer__adress"><?php echo $Lang['footer_adress']; ?></p>
			</div>
			<div class="footer__menu">
				<div class="footer__item">
					<a href="#pop-up-about" class="footer__link popup-about"><?php echo $Lang['about_us']; ?></a>
					<a href="#" class="footer__link"><?php echo $Lang['what_we_do']; ?></a>
				</div>
				<div class="footer__item">
					<a href="#" class="footer__link"><?php echo $Lang['search_car']; ?></a>
					<a href="#" class="footer__link"><?php echo $Lang['why_we']; ?></a>
				</div>
				<div class="footer__item">
					<a href="#" class="footer__link"><?php echo $Lang['car_service']; ?></a>
					<a href="#" class="footer__link"><?php echo $Lang['contacts']; ?></a>
				</div>
			</div>
			<div class="footer__logo logo">
				<img src="images/logo.png" alt="logo" />
				<div class="footer__copyright"><?php echo $Lang['copyright']; ?></div>
			</div>
		</div>
	</div>
</footer>

<!-- Popup -->
<section class="pop-up-block white-popup mfp-hide">
	<!-- О нас -->
	<div class="about" id="pop-up-about">
		<header class="about__header">
			<div class="about__bread-crumbs">
				<a href="index.php"><?php echo $Lang['bread_main']; ?> /</a>
				<span><?php echo $Lang['bread_last']; ?></span>
			</div>
			<div class="about__img"></div>
		</header>
		<div class="about__close-modal popup-about-dismiss"></div>
		<div class="about__main">
			<h3 class="main-title about__title"><?php echo $Lang['about_title']; ?></h3>
            <?php echo $Lang['about_content']; ?>
		</div>

		<footer class="about__footer">
			<div class="about__logo">
				<img src="images/logo.png" alt="logo" />
			</div>
		</footer>
	</div>

	<!-- Форма Заказать осмотр -->

	<form action="mail.php?lang=ru" method="POST" class="form pop-up__form" id="poup-form">
		<div class="form__title"><?php echo $Lang['up_title']; ?></div>
		<div class="pop-up__close-modal popup-modal-dismiss" data-close="close"></div>
		<div class="form__subtitle pop-up__subtitle"><?php echo $Lang['up_subtitle']; ?>
		</div>

		<label class="form__label pop-up__label" for="link-popup"><?php echo $Lang['pop-up_label_email']; ?></label>
		<input class="form__input pop-up__input" type="text" name="link" id="link-popup"
			   placeholder="<?php echo $Lang['pop-up_label_email_placeholder']; ?>" required />
		<label class="form__label pop-up__label"
			   for="message-popup"><?php echo $Lang['pop-up_label_message']; ?></label>
		<textarea class="form__textarea pop-up__textarea" name="message" id="message-popup"
				  placeholder="<?php echo $Lang['pop-up_label_message_placeholder']; ?>"></textarea>

		<div class="form__captcha">
			<div class="g-recaptcha" style="transform:scale(0.9);transform-origin:0;"
				 data-sitekey="6LfcSNUUAAAAAIC4yP1R4wMMLBttNJUrjPxuhJBn"></div>
		</div>

		<input class="btn btn__large form__btn" name="submit" type="submit" value="<?php echo $Lang['btn_send']; ?>">
		<div class="form_result"></div>
		<hr class="form__line" />
		<div class="form__contacts">
            <?php echo $Lang['form_contacts']; ?>
			<div class="form__icon">
				<img src="images/icon/icon_viber.png" alt="viber" />
				<img src="images/icon/icon_whatsapp.png" alt="vwhatsapp" />
			</div>
		</div>
	</form>
</section>

<div id="btnUp" style="display: inline;"></div>
<!-- Scripts -->
<script src="libs/jquery.min.js"></script>
<script src="libs/jquery.magnific-popup.min.js"></script>
<script src="libs/jquery.malihu.PageScroll2id.js"></script>
<script src="js/main.js"></script>
</body>
</html>

