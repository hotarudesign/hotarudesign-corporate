<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Contact</h2>
    </section>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <section class="contact page-container">
        <div class="contact__inner inner">
            <div class="contact__head">
                <h3 class="contact__head-ttl">お問い合わせフォーム</h3>
                <p class="contact__head-desc">デザインやコーディングのご依頼を承ります。<br>お見積もりについては無料で行っておりますのでお気軽にお問い合わせください。</p>
            </div>
            <?php echo do_shortcode('[mwform_formkey key="112"]'); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>