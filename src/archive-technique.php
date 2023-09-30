<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Technique</h2>
    </section>
    <section class="technique page-container">
        <div class="technique__inner inner">
            <ul class="technique__list">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li class="technique__item">
                            <a href="<?php echo the_permalink(); ?>" class="technique__item-link">
                                <p class="technique__item-ttl"><?php the_title(); ?></p>
                                <figure class="technique__item-thumb">
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                            </a>
                        </li>
                <?php endwhile;
                endif; ?>
            </ul>
        </div>
    </section>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>