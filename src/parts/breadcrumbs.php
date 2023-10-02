<?php if (is_page('about')) : ?>
    <div class="breadcrumbs about" typeof="BreadcrumbList" vocab="https://schema.org/">
        <div class="breadcrumbs__inner inner">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>
<?php else : ?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <div class="breadcrumbs__inner inner">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>
<?php endif; ?>