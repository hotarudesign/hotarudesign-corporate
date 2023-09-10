<section class="service">
    <div class="service__inner inner">
        <h2 class="service-ttl sec-ttl">Service</h2>
        <div class="service__list">
            <div class="service__item">
                <div class="service__item__txt">
                    <h3 class="service__item__txt-ttl">コーディング</h3>
                    <p class="service__item__txt-desc">ご用意いただいたデザインカンプなどを元にコーディングを行い、WebサイトやLPを制作いたします。</p>
                </div>
                <figure class="service__item-thumb">
                    <img src='<?php echo ImgPath; ?>/service_item02.svg' alt=''>
                </figure>
            </div>
            <div class="service__item">
                <div class="service__item__txt">
                    <h3 class="service__item__txt-ttl">Webデザイン</h3>
                    <p class="service__item__txt-desc">WebサイトやLPのデザインを制作いたします。<br>ご依頼いただく背景や目的に合わせデザインを行います。</p>
                </div>
                <figure class="service__item-thumb">
                    <img src='<?php echo ImgPath; ?>/service_item01.svg' alt=''>
                </figure>
            </div>
        </div>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="service__btn btn">
            <p class="service__btn-txt btn-txt">View More</p>
            <div class="service__btn-icon btn-icon">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/btn_arrow-black.webp' type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/btn_arrow-black.png" alt="">
                </picture>
            </div>
        </a>
    </div>
</section>