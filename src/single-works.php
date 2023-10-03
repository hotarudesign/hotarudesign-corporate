<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Works-Page</h2>
    </section>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <article class="works page-container">
        <div class="works__inner inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post">
                        <div class="post__head">
                            <div class="post__head__txt">
                                <h2 class="post__head__txt-ttl"><?php the_title(); ?></h2>
                                <?php $value = get_post_meta($post->ID, 'link', true); ?>
                                <?php if (empty($value)) : ?>
                                <?php else : ?>
                                    <a href="<?php the_field('link'); ?>" target="_blank" rel="noopener noreferrer" class="post__head__btn btn">
                                        <p class="post__head__btn-txt btn-txt">View</p>
                                        <div class="post__head__btn-icon btn-icon">
                                            <picture>
                                                <source srcset='<?php echo ImgPath; ?>/webp/btn_arrow-black.webp' type='image/webp'>
                                                <img src="<?php echo ImgPath; ?>/btn_arrow-black.png" alt="">
                                            </picture>
                                        </div>
                                    </a>
                                <?php endif; ?>
                            </div>
                            <figure class="post__head__thumb">
                                <?php the_post_thumbnail(); ?>
                            </figure>
                        </div>
                        <div class="post__main">
                            <div class="post__block">
                                <h3 class="post__block-ttl"><span class="post__block-label">Point</span><?php the_field('point01-ttl'); ?></h3>
                                <div class="post__block-desc"><?php the_field('point01-desc'); ?></div>
                            </div>
                            <?php $value = get_post_meta($post->ID, 'point02-ttl', true); ?>
                            <?php if (empty($value)) : ?>
                            <?php else : ?>
                                <div class="post__block">
                                    <?php $value = get_post_meta($post->ID, 'point02-ttl', true); ?>
                                    <?php if (empty($value)) : ?>
                                    <?php else : ?>
                                        <h3 class="post__block-ttl"><span class="post__block-label">Point</span><?php the_field('point02-ttl'); ?></h3>
                                    <?php endif; ?>
                                    <?php $value = get_post_meta($post->ID, 'point02-desc',); ?>
                                    <?php if (empty($value)) : ?>
                                    <?php else : ?>
                                        <div class="post__block-desc"><?php the_field('point02-desc'); ?></div>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
            <?php get_template_part('parts/post-pagination'); ?>
        </div>
    </article>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>