<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Service</h2>
    </section>
    <section class="service page-container">
        <div class="service__inner inner">
            <h2 class="service-ttl">私たちにできること</h2>
            <div class="coding">
                <h3 class="coding-ttl">Coding</h3>
                <ol class="coding__list">
                    <li class="coding__item">
                        <div class="coding__txt">
                            <div class="coding__txt__head">
                                <h3 class="coding__txt__head-ttl">Webサイト／LPコーディング</h3>
                                <p class="coding__txt__head-num">01</p>
                            </div>
                            <p class="coding__txt-desc">コーポレートサイトや採用目的のWebサイト、サービス訴求等を目的としたLP（ランディングページ）のコーディングを行います。<br><br>保守性、拡張性を保ちつつ、サイトパフォーマンスを考慮してコーディングを行います。<br><br>JavaScriptを用いたアニメーションなどについてもお気軽にご相談ください。</p>
                        </div>
                        <figure class="coding__thumb">
                            <picture>
                                <source srcset='<?php echo ImgPath; ?>/webp/coding_item01.webp' type='image/webp'>
                                <img src="<?php echo ImgPath; ?>/coding_item01.jpeg" alt="">
                            </picture>
                        </figure>
                    </li>
                    <li class="coding__item">
                        <div class="coding__txt">
                            <div class="coding__txt__head">
                                <h3 class="coding__txt__head-ttl">WordPress化対応</h3>
                                <p class="coding__txt__head-num">02</p>
                            </div>
                            <p class="coding__txt-desc">既存のWebサイトやLPの改修に伴うコーディングを行います。<br><br>既存サイトのコードを考慮し、</p>
                        </div>
                        <figure class="coding__thumb">
                            <picture>
                                <source srcset='<?php echo ImgPath; ?>/webp/coding_item01.webp' type='image/webp'>
                                <img src="<?php echo ImgPath; ?>/coding_item01.jpeg" alt="">
                            </picture>
                        </figure>
                    </li>
                </ol>
            </div>
        </div>
    </section>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>