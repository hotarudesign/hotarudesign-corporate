<section class="about">
    <div class="about__inner inner">
        <h2 class="about-ttl sec-ttl">About</h2>
        <div class="about__container">
            <div class="about__txt">
                <h3 class="about__txt-name">Hotaru</h3>
                <p class="about__txt-desc">物作りが好きでWeb業界で仕事をしております。</p>
            </div>
            <figure class="about__thumb">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/profile_circle.webp' type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/profile_circle.png" alt="">
                </picture>
            </figure>
        </div>
        <a href="<?php echo esc_url(home_url('/about')); ?>" class="about__btn btn">
            <p class="about__btn-txt btn-txt">View More</p>
            <div class="about__btn-icon btn-icon">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/btn_arrow-white.webp' type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/btn_arrow-white.png" alt="">
                </picture>
            </div>
        </a>
    </div>
</section>