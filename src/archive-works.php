<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Works</h2>
    </section>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <section class="works page-container">
        <div class="works__inner inner">
            <h2 class="works-ttl">制作実績について</h2>
            <p class="works-lead">デザインに関するものや、一部のアニメーション技術について掲載しております。<br>※デザインについては許可をいただいたもののみ掲載しております。</p>
            <div class="works__block">
                <?php
                $term_object = get_queried_object();
                $term_slug = $term_object->slug;
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => -1,
                    'taxonomy' => 'works_cat',
                    'term' => 'coding',
                );
                $the_query = new WP_Query($args);
                ?>
                <h3 class="works__block-ttl">Coding</h3>
                <ul class="works__list">
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="works__item">
                                <a href="<?php echo the_permalink(); ?>" class="works__item-link">
                                    <p class="works__item-ttl"><?php the_title(); ?></p>
                                    <figure class="works__item-thumb">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            $attr = array(
                                                'loading' => 'lazy',
                                            );
                                        }
                                        ?>
                                        <?php the_post_thumbnail(array(362, 228), $attr); ?>
                                    </figure>
                                </a>
                            </li>
                    <?php endwhile;
                    endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <a href="<?php echo esc_url(home_url('/works_cat/coding')); ?>" target="_blank" rel="noopener noreferrer" class="works__btn btn">
                    <p class="post__head__btn-txt btn-txt">View More</p>
                    <div class="post__head__btn-icon btn-icon">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/btn_arrow-black.webp' type='image/webp'>
                            <img src="<?php echo ImgPath; ?>/btn_arrow-black.png" alt="">
                        </picture>
                    </div>
                </a>
            </div>
            <div class="works__block">
                <h3 class="works__block-ttl">Design</h3>
                <ul class="works__list">
                    <?php
                    $term_object = get_queried_object();
                    $term_slug = $term_object->slug;
                    $args = array(
                        'post_type' => 'works',
                        'posts_per_page' => -1,
                        'taxonomy' => 'works_cat',
                        'term' => 'design',
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="works__item">
                                <a href="<?php echo the_permalink(); ?>" class="works__item-link">
                                    <p class="works__item-ttl"><?php the_title(); ?></p>
                                    <figure class="works__item-thumb">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            $attr = array(
                                                'loading' => 'lazy',
                                            );
                                        }
                                        ?>
                                        <?php the_post_thumbnail(array(362, 228), $attr); ?>
                                    </figure>
                                </a>
                            </li>
                    <?php endwhile;
                    endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <a href="<?php echo esc_url(home_url('/works_cat/design')); ?>" target="_blank" rel="noopener noreferrer" class="works__btn btn">
                    <p class="post__head__btn-txt btn-txt">View More</p>
                    <div class="post__head__btn-icon btn-icon">
                        <picture>
                            <source srcset='<?php echo ImgPath; ?>/webp/btn_arrow-black.webp' src="<?php echo ImgPath; ?>/webp/btn_arrow-black.webp" width="40" height="40" type='image/webp'>
                            <img src="<?php echo ImgPath; ?>/btn_arrow-black.png" width="40" height="40" alt="" loading="lazy">
                        </picture>
                    </div>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>