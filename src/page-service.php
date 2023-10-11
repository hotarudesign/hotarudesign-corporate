<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Service</h2>
    </section>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <section class="service page-container">
        <div class="service__inner inner">
            <h2 class="service-ttl">私たちにできること</h2>
            <p class="service-lead">Hotaru Designが提供しているサービスについて紹介させていただきます。</p>
            <div class="coding">
                <h3 class="coding-ttl">Coding</h3>
                <ol class="coding__list">
                    <li class="coding__item">
                        <div class="coding__txt">
                            <div class="coding__txt__head">
                                <h3 class="coding__txt__head-ttl">Webサイト／<br class="md-br">LPコーディング</h3>
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
                                <h3 class="coding__txt__head-ttl">CMS化対応</h3>
                                <p class="coding__txt__head-num">02</p>
                            </div>
                            <p class="coding__txt-desc">新規／既存のWebサイトやLPのCMS化の対応させていただきます。CMS対応をすることでご自身でテキストや画像、コンテンツ等を追加、修正することが可能となります。<br><br>よりWebサイトやLPを細かく管理していきたい方へおすすめです。もちろん更新作業自体も軽微なものからご依頼をお受けしております。</p>
                        </div>
                        <figure class="coding__thumb">
                            <picture>
                                <source srcset='<?php echo ImgPath; ?>/webp/coding_item02.webp' type='image/webp'>
                                <img src="<?php echo ImgPath; ?>/coding_item02.jpeg" alt="">
                            </picture>
                        </figure>
                    </li>
                </ol>
            </div>
            <div class="coding">
                <h3 class="coding-ttl">Design</h3>
                <ol class="coding__list">
                    <li class="coding__item">
                        <div class="coding__txt">
                            <div class="coding__txt__head">
                                <h3 class="coding__txt__head-ttl">Webサイト／<br class="md-br">LPデザイン</h3>
                                <p class="coding__txt__head-num">01</p>
                            </div>
                            <p class="coding__txt-desc">WebサイトやLPのデザインを承っております。目的や用途を捉え最大限効果が引き出せるようデザインを行います。<br><br>デザインを行う際は、事前にヒアリングを行い、お好みに近い形で実装してまいりますのでご安心ください。</p>
                        </div>
                        <figure class="coding__thumb">
                            <picture>
                                <source srcset='<?php echo ImgPath; ?>/webp/design_item01.webp' type='image/webp'>
                                <img src="<?php echo ImgPath; ?>/design_item01.jpeg" alt="">
                            </picture>
                        </figure>
                    </li>
                    <li class="coding__item">
                        <div class="coding__txt">
                            <div class="coding__txt__head">
                                <h3 class="coding__txt__head-ttl">サムネイル／<br class="md-br">商品画像制作</h3>
                                <p class="coding__txt__head-num">02</p>
                            </div>
                            <p class="coding__txt-desc">YouTubeなどに使用するサムネイル、楽天市場、Yahoo!ショッピング等で利用する商品画像の制作を承っております。<br><br>どんな意図を持って画像を制作するかなど画像に対して役割を明確にした状態で制作を行います。</p>
                        </div>
                        <figure class="coding__thumb">
                            <picture>
                                <source srcset='<?php echo ImgPath; ?>/webp/design_item02.webp' type='image/webp'>
                                <img src="<?php echo ImgPath; ?>/design_item02.jpeg" alt="">
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