<?php 
    /*
        Template Name: Home
    */
?>

<?= get_header(); ?>
<?= get_sidebar(); ?>

<main class="wrapper" data-fullpage>
	<section class="main" id="main">
		<img
			src="<?= bloginfo("template_url"); ?>/assets/img/webp/main-bg.webp"
			alt="background"
			class="main__bg"
		/>
		<div class="main__container">
			<h1 class="main__title">Монтаж систем безопасности</h1>
			<div class="main__subtitle subtitle">
				<span>Проект под любой бюджет.</span>
				<span>Строительство видеосистем под ключ.</span>
				<span>Только проверенное оборудование.</span>
			</div>
			<div class="main__swiper swiper-container">
				<div class="main__wrapper swiper-wrapper">
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner01.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner02.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner03.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner04.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner05.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner06.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner07.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner01.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner02.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner03.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner04.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner05.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner06.webp"
							alt="inform-texnika"
						/>
					</div>
					<div class="main__slide swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/partner07.webp"
							alt="inform-texnika"
						/>
					</div>
				</div>
			</div>
			<a href="#service" class="main__down mobile-only down">
				<img
					src="<?= bloginfo("template_url"); ?>/assets/img/svg/double-chevron-down.svg"
					alt="double-chevron-down"
				/>
				<h3>Наши услуги</h3>
			</a>
		</div>
	</section>
	<section class="service" id="service">
		<img src="<?= bloginfo("template_url"); ?>/assets/img/svg/vector.svg" alt="vector" />
		<div class="service__container">
			<div class="service__title title">Наши услуги</div>
			<div class="service__grid service__swiper swiper-container">
				<div class="service__wrapper swiper-wrapper">
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service01.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Проектирование и внедрение
							</h3>
							<p>
								Проектирование и строительство
								структурированных кабельных сетей (СКС)
							</p>
						</div>
					</div>
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service02.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Системы связи
							</h3>
							<p>
								Обеспечение информационным и
								технологическим взаимодействием между
								устройствами и пользователями.
							</p>
						</div>
					</div>
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service03.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Сети передачи данных
							</h3>
							<p>
								СКС и интеллектуальные СКС (ИСКС),
								Беспроводные сети передачи данных,
								Системы управления и мониторинга сетью.
								Проектирование и строительство сетей
								передачи данных (СПД)
							</p>
						</div>
					</div>
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service04.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Системы управляемого доступа (СКУД)
							</h3>
							<p>
								Проектирование, монтаж, обслуживание
								систем управляемого доступа (СКУД)
							</p>
						</div>
					</div>
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service05.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Видеонаблюдение
							</h3>
							<p>
								Проектирование и строительство систем
								видеонаблюдения, интегрированных в
								единую систему безопасности
							</p>
						</div>
					</div>
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service06.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Охрана периметра
							</h3>
							<p>
								Комплекс средств и мероприятий,
								предназначенных для предотвращения
								несанкционированного проникновения на
								территорию объекта нарушителя.
							</p>
						</div>
					</div>
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service07.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Источник бесперебойного питания (ИБП)
							</h3>
							<p>
								Обеспечение надёжного питания
								оборудования при отключении
								электроэнергии.
							</p>
						</div>
					</div>
					<div class="service__grid_item swiper-slide">
						<img
							src="<?= bloginfo("template_url"); ?>/assets/img/webp/service08.webp"
							alt="service"
						/>
						<div class="service__grid_item-content">
							<h3 class="service__grid_item-title">
								Пожарная сигнализация и пожаротушение
							</h3>
							<p>
								Проектирование, монтаж, наладка, ремонт
								и техническое обслуживание средств
								противопожарной автоматики
								охранно-пожарной сигнализации
							</p>
						</div>
					</div>
				</div>
				<div
					class="service__pagination swiper-pagination"
				></div>
			</div>
			<a href="#custom" class="service__down mobile-only down">
				<img
					src="<?= bloginfo("template_url"); ?>/assets/img/svg/double-chevron-down.svg"
					alt="double-chevron-down"
				/>
				<h3>сервис</h3>
			</a>
		</div>
	</section>
	<section class="custom"
		id="custom"
		data-ignore="true"
		data-index="dark" >
		<div class="custom__container">
			<div class="delivery-service">
				<img src="<?= bloginfo("template_url"); ?>/assets/img/svg/custom.svg" alt="custom" />
				<div class="delivery-service__content">
					<h2 class="delivery__service-title title">
						Сервис
					</h2>
					<div class="delivery__service-subtitle">
						Ремонт и сервисное обслуживание
						специализированного оборудования CUSTOM (Италия)
					</div>
				</div>
				<div class="delivery-service__image">
					<img
						src="<?= bloginfo("template_url"); ?>/assets/img/webp/delivery01.webp"
						alt="delivery"
					/>
				</div>
			</div>
		</div>
		<a href="#delivery" class="custom__down mobile-only down">
			<img
				src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-down-white.svg"
				alt="double-chevron-down"
			/>
			<h3>поставка и монтаж</h3>
		</a>
	</section>
	<section class="delivery" id="delivery" data-index="dark">
		<div class="delivery__container">
			<div class="delivery-service">
				<img src="<?= bloginfo("template_url"); ?>/assets/img/svg/custom.svg" alt="custom" />
				<div class="delivery-service__content">
					<h2 class="delivery__service-title title">
						Сервис
					</h2>
					<div class="delivery__service-subtitle">
						Ремонт и сервисное обслуживание
						специализированного оборудования CUSTOM (Италия)
					</div>
				</div>
				<div class="delivery-service__image">
					<img
						src="<?= bloginfo("template_url"); ?>/assets/img/webp/delivery01.webp"
						alt="delivery"
					/>
				</div>
			</div>
		</div>
		<div class="delivery__delivery">
			<div class="delivery__container">
				<div class="delivery__content">
					<div class="delivery__title title">
						Поставка и монтаж
					</div>
					<div class="delivery__text">
						Оборудование и материалы непосредственно от
						производителей
					</div>
				</div>
			</div>
		</div>
		<a href="#facts" class="delivery__down mobile-only down">
			<img
				src="<?= bloginfo("template_url"); ?>/assets/img/svg/double-chevron-down.svg"
				alt="double-chevron-down"
			/>
			<h3>факты о компании</h3>
		</a>
	</section>
	<section class="facts" id="facts">
		<img src="<?= bloginfo("template_url"); ?>/assets/img/webp/facts-bg.webp" alt="facts-bg" />
		<div class="facts__container">
			<h2 class="facts__title title">Факты о компании</h2>
			<div class="facts__grid">
				<div class="facts__grid_item">
					<h3>10</h3>
					<p>лет опыта на рынке Узбекистана</p>
				</div>
				<div class="facts__grid_item">
					<h3>23</h3>
					<p>
						Электромонтажные работы. <br /><span
							>25 объектов</span
						>
					</p>
				</div>
				<div class="facts__grid_item">
					<h3>332</h3>
					<p>
						Пуско-наладочные работы. <br /><span
							>350 объектов</span
						>
					</p>
				</div>
				<div class="facts__grid_item">
					<h3>205</h3>
					<p>
						Систем оповещения установлено. <br /><span
							>220 объектов</span
						>
					</p>
				</div>
			</div>
			<a href="#license" class="facts__down mobile-only down">
				<img
					src="<?= bloginfo("template_url"); ?>/assets/img/svg/double-chevron-down.svg"
					alt="double-chevron-down"
				/>
				<h3>лицензии и сертификаты</h3>
			</a>
		</div>
	</section>
	<section class="license" id="license" data-index="dark">
		<div class="license__container">
			<h3 class="license__title title">Лицензии и сертификаты</h3>
			<div class="license__columns">
				<div class="license__navigations">
					<div class="license__navigation">
						<svg
							class="license__navigation_prev"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M19 12H5M5 12L12 19M5 12L12 5"
								stroke="#253E70"
								stroke-width="2"
								stroke-linecap="round"
								stroke-linejoin="round"
							/>
						</svg>
						<svg
							class="license__navigation_next"
							width="24"
							height="24"
							viewBox="0 0 24 24"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								d="M5 12H19M19 12L12 5M19 12L12 19"
								stroke="#253E70"
								stroke-width="2"
								stroke-linecap="round"
								stroke-linejoin="round"
							/>
						</svg>
					</div>
					<div class="license__num_wrapper">
						<div class="license__num_current">
							<span>01</span>
						</div>
						<div class="license__scrollbar"></div>
						<div class="license__num_overall">
							<span>05</span>
						</div>
					</div>
				</div>
				<!-- <div class="license__empty"></div> -->
				<div class="license__swiper swiper-container">
					<div class="license__wrapper swiper-wrapper">
						<div class="license__slide swiper-slide">
							<img
								src="<?= bloginfo("template_url"); ?>/assets/img/webp/certificate01.webp"
								alt="certificate"
							/>
						</div>
						<div class="license__slide swiper-slide">
							<img
								src="<?= bloginfo("template_url"); ?>/assets/img/webp/certificate02.webp"
								alt="certificate"
							/>
						</div>
						<div class="license__slide swiper-slide">
							<img
								src="<?= bloginfo("template_url"); ?>/assets/img/webp/certificate03.webp"
								alt="certificate"
							/>
						</div>
						<div class="license__slide swiper-slide">
							<img
								src="<?= bloginfo("template_url"); ?>/assets/img/webp/certificate04.webp"
								alt="certificate"
							/>
						</div>
						<div class="license__slide swiper-slide">
							<img
								src="<?= bloginfo("template_url"); ?>/assets/img/webp/certificate05.webp"
								alt="certificate"
							/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="#contacts" class="license__down mobile-only down">
			<img
				src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-down-white.svg"
				alt="double-chevron-down"
			/>
			<h3>контакты</h3>
		</a>
	</section>

<?= get_footer(); ?>