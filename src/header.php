<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <title>Hotaru Design</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" id="header">
        <div class="header__inner">
            <h1 class="header__logo logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src='<?php echo ImgPath; ?>/logo-black.svg' alt='Hotaru Design'>
                </a>
            </h1>
            <nav class="g-nav">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'g-nav',
                        'container' => '',
                        'menu_class' => 'g-nav__list',
                    )
                );
                ?>
            </nav>
        </div>
    </header>