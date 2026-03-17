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
			<h1 class="main__title"><?= pll__("Монтаж систем безопасности");?></h1>
			<div class="main__subtitle subtitle">
				<span><?= pll__("Проект под любой бюджет."); ?></span>
				<span><?= pll__("Строительство видеосистем под ключ."); ?></span>
				<span><?= pll__("Только проверенное оборудование."); ?></span>
			</div>
			<div class="main__swiper swiper-container">
				<div class="main__wrapper swiper-wrapper">
					
					<?php if( have_rows('partners') ): ?>
						<?php for( $i = 0; $i < 2; $i++ ): ?>
							<?php while( have_rows('partners') ): the_row(); 
								$image = get_sub_field('partner');
								?>
								<div class="main__slide swiper-slide">
									<img src="<?= $image; ?>" alt="inform-texnika" />
								</div>
							<?php endwhile; ?>
						<?php endfor; ?>
					<?php endif; ?>
					
				</div>
			</div>
			<a href="#service" class="main__down mobile-only down">
				<img
					src="<?= bloginfo("template_url"); ?>/assets/img/svg/double-chevron-down.svg"
					alt="double-chevron-down"
				/>
				<h3><?= pll__("Наши услуги"); ?></h3>
			</a>
		</div>
	</section>
	<section class="service" id="service">
		<img src="<?= bloginfo("template_url"); ?>/assets/img/svg/vector.svg" alt="vector" />
		<div class="service__container">
			<div class="service__title title"><?= pll__("Наши услуги"); ?></div>
			<div class="service__grid service__swiper swiper-container">
				<div class="service__wrapper swiper-wrapper">

					<?php if( have_rows('services') ): ?>
						<?php while( have_rows('services') ): the_row(); 

							$title = get_sub_field('title');
							$text = get_sub_field('text');
							$background = get_sub_field('background');

							?>

						<div class="service__grid_item swiper-slide">
							<img
								src="<?= $background; ?>"
								alt="service"
							/>
							<div class="service__grid_item-content">
								<h3 class="service__grid_item-title">
									<?= $title; ?>
								</h3>
								<p>
									<?= $text; ?>
								</p>
							</div>
						</div>

						<?php endwhile; ?>
					<?php endif; ?>

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
				<h3><?= pll__("Сервис"); ?></h3>
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
						<?= pll__("Сервис"); ?>
					</h2>
					<div class="delivery__service-subtitle">
						<?= pll__("Ремонт и сервисное обслуживание специализированного оборудования CUSTOM (Италия)"); ?>
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
			<h3><?= pll__("поставка и монтаж"); ?></h3>
		</a>
	</section>
	<section class="delivery" id="delivery" data-index="dark">
		<div class="delivery__container">
			<div class="delivery-service">
				<img src="<?= bloginfo("template_url"); ?>/assets/img/svg/custom.svg" alt="custom" />
				<div class="delivery-service__content">
					<h2 class="delivery__service-title title">
						<?= pll__("Сервис"); ?>
					</h2>
					<div class="delivery__service-subtitle">
						<?= pll__("Ремонт и сервисное обслуживание специализированного оборудования CUSTOM (Италия)"); ?>
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
						<?= pll__("поставка и монтаж"); ?>
					</div>
					<div class="delivery__text">
						<?= pll__("Оборудование и материалы непосредственно от производителей"); ?>
					</div>
				</div>
			</div>
		</div>
		<a href="#facts" class="delivery__down mobile-only down">
			<img
				src="<?= bloginfo("template_url"); ?>/assets/img/svg/double-chevron-down.svg"
				alt="double-chevron-down"
			/>
			<h3><?= pll__("факты о компании"); ?></h3>
		</a>
	</section>
	<section class="facts" id="facts">
		<img src="<?= bloginfo("template_url"); ?>/assets/img/webp/facts-bg.webp" alt="facts-bg" />
		<div class="facts__container">
			<h2 class="facts__title title"><?= pll__("факты о компании"); ?></h2>
			<div class="facts__grid">
				<div class="facts__grid_item">
					<h3><?= pll__("10"); ?></h3>
					<p><?= pll__("лет опыта на рынке Узбекистана"); ?></p>
				</div>
				<div class="facts__grid_item">
					<h3><?= pll__("23"); ?></h3>
					<p>
						<?= pll__("Электромонтажные работы. <br /><span >25 объектов</span >"); ?>
					</p>
				</div>
				<div class="facts__grid_item">
					<h3><?= pll__("332"); ?></h3>
					<p>
						<?= pll__("Пуско-наладочные работы. <br /><span >350 объектов</span >"); ?>
					</p>
				</div>
				<div class="facts__grid_item">
					<h3><?= pll__("205"); ?></h3>
					<p>
						<?= pll__("Систем оповещения установлено. <br /><span >220 объектов</span >"); ?>
					</p>
				</div>
			</div>
			<a href="#license" class="facts__down mobile-only down">
				<img
					src="<?= bloginfo("template_url"); ?>/assets/img/svg/double-chevron-down.svg"
					alt="double-chevron-down"
				/>
				<h3><?= pll__("лицензии и сертификаты"); ?></h3>
			</a>
		</div>
	</section>
	<section class="license" id="license" data-index="dark">
		<div class="license__container">
			<h3 class="license__title title"><?= pll__("лицензии и сертификаты"); ?></h3>
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

						<?php if( have_rows('certificates') ): ?>
							<?php while( have_rows('certificates') ): the_row(); 
								$certificate = get_sub_field('certificate');
								?>

								<div class="license__slide swiper-slide">
									<img
										src="<?= $certificate; ?>"
										alt="certificate"
									/>
								</div>

							<?php endwhile; ?>
						<?php endif; ?>

						
					</div>
				</div>
			</div>
		</div>
		<a href="#contacts" class="license__down mobile-only down">
			<img
				src="<?= bloginfo("template_url"); ?>/assets/img/svg/chevron-down-white.svg"
				alt="double-chevron-down"
			/>
			<h3><?= pll__("контакты"); ?></h3>
		</a>
	</section>

<?= get_footer(); ?>