<?php

/**
 * Enqueue scripts and styles.
 */

function fp_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . "/assets/css/style.css", array(), 1 );
	wp_enqueue_style( 'style-map', get_template_directory_uri() . "/assets/css/style.css.map", array(), 1 );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . "/assets/js/index.js", array(), 1, );
}
add_action( 'wp_enqueue_scripts', 'fp_scripts' );


function theme_customizer_settings($wp_customize)
{
    // Add a section for custom settings
    $wp_customize->add_section('theme_custom_settings', array(
        'title'    => __('Номер, почта и адресс', 'your-theme-textdomain'),
        'priority' => 200,
    ));

    // Phone
    $wp_customize->add_setting('phone', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('phone', array(
        'label'    => __('Номер', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings',
        'priority' => 10,
        'type'     => 'text',
    ));

    // Email
    $wp_customize->add_setting('email', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('email', array(
        'label'    => __('Email', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings',
        'priority' => 10,
        'type'     => 'text',   
    ));

    // Social links section
    $wp_customize->add_section('theme_custom_settings_social', array(
        'title'    => __('Социальные сети', 'your-theme-textdomain'),
        'priority' => 200,
    ));

    // Facebook
    $wp_customize->add_setting('facebook', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('facebook', array(
        'label'    => __('Facebook', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));

    // Instagram
    $wp_customize->add_setting('instagram', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('instagram', array(
        'label'    => __('Instagram', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));

    // Telegram
    $wp_customize->add_setting('telegram', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('telegram', array(
        'label'    => __('Telegram', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));

    // YouTube
    $wp_customize->add_setting('youtube', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('youtube', array(
        'label'    => __('YouTube', 'your-theme-textdomain'),
        'section'  => 'theme_custom_settings_social',
        'priority' => 10,
        'type'     => 'url',
    ));
}
add_action('customize_register', 'theme_customizer_settings');


function register_polylang_strings() {

    if (function_exists('pll_register_string')) {

        pll_register_string('main', 'Монтаж систем безопасности', );
        pll_register_string('main', 'Проект под любой бюджет.', );
        pll_register_string('main', 'Строительство видеосистем под ключ.', );
        pll_register_string('main', 'Только проверенное оборудование.', );
        pll_register_string('main', 'Наши услуги', );
        pll_register_string('main', 'Сервис', );
        pll_register_string('main', 'Ремонт и сервисное обслуживание специализированного оборудования CUSTOM (Италия)', );
        pll_register_string('main', 'поставка и монтаж', );
        pll_register_string('main', 'Ремонт и сервисное обслуживание специализированного оборудования CUSTOM (Италия)', );
        pll_register_string('main', 'Оборудование и материалы непосредственно от производителей', );
        pll_register_string('main', 'факты о компании', );
        pll_register_string('main', 'лет опыта на рынке Узбекистана', );
        pll_register_string('main', '10', );
        pll_register_string('main', 'Электромонтажные работы. <br /><span >25 объектов</span >', );
        pll_register_string('main', '23', );
        pll_register_string('main', 'Пуско-наладочные работы. <br /><span >350 объектов</span >', );
        pll_register_string('main', '205', );
        pll_register_string('main', 'Систем оповещения установлено. <br /><span >220 объектов</span >', );
        pll_register_string('main', 'лицензии и сертификаты', );
        pll_register_string('main', 'контакты', );
		
        pll_register_string('header', 'О компании', );
        pll_register_string('header', 'Контакты', );
        pll_register_string('header', 'Поиск', );

        pll_register_string('footer', 'Контакты', );
        pll_register_string('footer', 'Телефон', );
        pll_register_string('footer', 'Узбекистан, г. Ташкент, ул. Сайрам 39А', );
        pll_register_string('footer', 'E-mail', );
        pll_register_string('footer', 'в начало', );
        pll_register_string('footer', '© 2026 FP Networks OPS', );

    }

}

add_action('init', 'register_polylang_strings');