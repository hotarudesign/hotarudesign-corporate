<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Design</h2>
    </section>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <section class="works page-container">
        <div class="works__inner inner">
            <div class="works__block">
                <?php
                $term_object = get_queried_object();
                $term_slug = $term_object->slug;
                $args = array(
                    'post_type' => 'works',
                    'taxonomy' => 'works_cat',
                    'term' => 'design',
                );
                $the_query = new WP_Query($args);
                ?>

                <h3 class="works__block-ttl">Design</h3>
                <p class="works__block-lead">デザインに関する制作実績を掲載しております。<br>※許可をいただいたもののみ掲載しております。</p>
                <ul class="works__list">
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="works__item">
                                <a href="<?php echo the_permalink(); ?>" class="works__item-link">
                                    <p class="works__item-ttl"><?php the_title(); ?></p>
                                    <figure class="works__item-thumb">
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                </a>
                            </li>
                    <?php endwhile;
                    endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>
        </div>
    </section>
    <?php get_template_part('parts/cta'); ?>
    <?php get_footer(); ?>