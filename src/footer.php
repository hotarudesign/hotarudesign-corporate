<footer class="footer">
    <div class="footer__inner inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logo">
            <img src="<?php echo ImgPath; ?>/logo-white-nobg.svg" alt="">
        </a>
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'f-nav',
                'container' => '',
                'menu_class' => 'f-nav__list',
            )
        );
        ?>
    </div>
    <p class="footer__copy"><small>&copy; Hotaru Design</small></p>
</footer>
<?php wp_footer(); ?>
</body>

</html>