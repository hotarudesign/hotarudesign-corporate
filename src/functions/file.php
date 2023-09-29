<?php
function add_link_files()
{

    // CSSの読み込み
    wp_enqueue_style('splide-style', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css");
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/assets/css/base/reset.css');
    wp_enqueue_style('base', get_stylesheet_directory_uri() . '/assets/css/base/base.css');
    if (is_front_page()) {
        wp_enqueue_style('home', get_stylesheet_directory_uri() . '/assets/css/template/index.css');
    }
    if (is_page('service')) {
        wp_enqueue_style('service-page', get_stylesheet_directory_uri() . '/assets/css/template/service.css');
    }
    if (is_page('about')) {
        wp_enqueue_style('about-page', get_stylesheet_directory_uri() . '/assets/css/template/about.css');
    }
    if (is_page('contact')) {
        wp_enqueue_style('contact-page', get_stylesheet_directory_uri() . '/assets/css/template/contact.css');
    }
    // JavaScriptの読み込み
    wp_enqueue_script('splide', "https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js");
    wp_enqueue_script('splide-auto', "https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js");
    wp_enqueue_script('g-sap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js");
    wp_enqueue_script('scrollTrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js");

    if (is_front_page()) {
        wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/home/index.js', '', '', true);
        wp_enqueue_script('gsap-setting', get_template_directory_uri() . '/assets/js/home/gsap-setting.js', '', '', true);
        wp_enqueue_script('splide-setting', get_template_directory_uri() . '/assets/js/home/splide-setting.js', '', '', true);
    }
    if (is_page('about')) {
        wp_enqueue_script('gsap-setting', get_template_directory_uri() . '/assets/js/about/gsap-setting.js', '', '', true);
    }
}
add_action('wp_enqueue_scripts', 'add_link_files');
