<?php
    /* 
        Template Name: IP
    */
?>
<?= get_header(); ?>
<?= get_sidebar(); ?>

<main class="wrapper">
    <section class="first">
        <img
            src="<?= bloginfo("template_url"); ?>/assets/img/webp/ip-bg.webp"
            alt="ip-bg"
            class="first__bg"
        />
        <div class="first__container">
            <h1 class="first__title page-title"><?= the_title(); ?></h1>
        </div>
    </section>
    <section class="content" data-index="dark">
        <div class="content__container">
            <?= the_content(); ?>
        </div>
    </section>
    <section class="partners" data-index="dark">
        <div class="partners__container">
            <div class="partners__title title">Наши партнеры</div>
            <div class="partners__slider">
                <div class="partners__track">

                    <?php if( have_rows('partners') ): ?>
						<?php for( $i = 0; $i < 2; $i++ ): ?>
							<?php while( have_rows('partners') ): the_row(); 
								$image = get_sub_field('partner');
								?>
								<div class="partners__slide">
                                    <img
                                        src="<?= $image; ?>"
                                        alt="slide"
                                    />
                                </div>
							<?php endwhile; ?>
						<?php endfor; ?>
					<?php endif; ?>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="gallery" data-index="dark">
        <div class="gallery__container">
            <div class="gallery__titlebox">
                <div class="gallery__title title">Галерея</div>
                <div class="gallery__navigations">
                    <svg
                        class="gallery__navigations_prev"
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
                        class="gallery__navigations_next"
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
            </div>
            <div class="gallery__swiper swiper-container">
                <div class="gallery__wrapper swiper-wrapper">

                    <?php if( have_rows('gallery') ): ?>
                        <?php while( have_rows('gallery') ): the_row(); 

                            $image = get_sub_field('image');
                            ?>

                        <div class="gallery__slide swiper-slide">
                            <img
                                src="<?= $image; ?>"
                                alt="gallery"
                            />
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?= get_footer(); ?>
