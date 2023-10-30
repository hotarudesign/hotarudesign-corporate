<section class="works">
    <div class="block">
        <svg class="circle" viewBox="0 0 100 100">
            <path id="circle" class="circle__shape" d="M 0 50 A 50 50 0 1 1 0 51 z" />
            <text class="circle__txt">
                <textPath xlink:href="#circle">
                    Coding & Design Coding & Design Coding & Design
                </textPath>
            </text>
        </svg>
    </div>
    <div class="works__inner inner">
        <section class="splide splide2" aria-label="テキストの無限ループ">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">More Speedy, More Politely, More Creative</p>
                </ul>
            </div>
        </section>
        <div class="left">
            <h2 class="works-ttl sec-ttl">Works</h2>
            <p class="works-desc">Hotaru Designの制作実績を掲載しております。<br>WebサイトやLPのデザインやコーディングを承っており、制作物の品質、スピード感、アフターサポートなどご好評いただいております。
            </p>
            <a href="<?php echo esc_url(home_url('/works')); ?>" class="works__btn btn">
                <p class="works__btn-txt btn-txt">View More</p>
                <div class="works__btn-icon btn-icon">
                    <picture>
                        <source srcset='<?php echo ImgPath; ?>/webp/btn_arrow-black.webp' src="<?php echo ImgPath; ?>/webp/btn_arrow-black.webp" width="40" height="40" type='image/webp'>
                        <img src="<?php echo ImgPath; ?>/btn_arrow-black.png" width="40" height="40" alt="">
                    </picture>
                </div>
            </a>
        </div>
        <div class="right">
            <figure class="works__thumb works__thumb01">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/works_item01.webp' src="<?php echo ImgPath; ?>/webp/works_item01.webp" width="583" height="420" type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/works_item01.jpeg" width="583" height="420" alt="">
                </picture>
            </figure>
            <figure class="works__thumb works__thumb02">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/works_item02.webp' src="<?php echo ImgPath; ?>/webp/works_item02.webp" width="583" height="420" type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/works_item02.jpeg" width="583" height="420" alt="">
                </picture>
            </figure>
            <figure class="works__thumb works__thumb03">
                <picture>
                    <source srcset='<?php echo ImgPath; ?>/webp/works_item03.webp' src="<?php echo ImgPath; ?>/webp/works_item03.webp" width="583" height="420" type='image/webp'>
                    <img src="<?php echo ImgPath; ?>/works_item03.jpeg" width="583" height="420" alt="">
                </picture>
            </figure>
        </div>
    </div>
</section>