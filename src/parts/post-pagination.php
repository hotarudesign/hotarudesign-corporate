<div class="post-pagination">
    <?php
    //前の記事の情報を取得
    $prev_navigation = get_adjacent_post(false, '', true);

    //次の記事の情報を取得
    $next_navigation = get_adjacent_post(false, '', false);
    ?>
    <?php if (!empty($prev_navigation)) : ?>
        <a href="<?php echo get_permalink($prev_navigation->ID); ?>" class="post-pagination__item prev">
            <p class="post-pagination__item-label">Prev</p>
            <figure class="post-pagination__item-thumb">
                <?php echo get_the_post_thumbnail($prev_navigation->ID); ?>
                <figcaption class="post-pagination__item-caption"><?php echo $prev_navigation->post_title; ?></figcaption>
            </figure>
        </a>
    <?php endif; ?>

    <?php if (!empty($next_navigation)) : ?>
        <a href="<?php echo get_permalink($next_navigation->ID); ?>" class="post-pagination__item next">
            <p class="post-pagination__item-label">Next</p>
            <figure class="post-pagination__item-thumb">
                <?php echo get_the_post_thumbnail($next_navigation->ID); ?>
                <figcaption class="post-pagination__item-caption"><?php echo $next_navigation->post_title; ?></figcaption>
            </figure>
        </a>
    <?php endif; ?>
</div>