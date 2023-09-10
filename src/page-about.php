<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">About</h2>
    </section>
    <section class="about page-container">
        <?php get_template_part('parts/about/profile'); ?>
        <?php get_template_part('parts/about/history'); ?>
        <?php get_template_part('parts/about/skill'); ?>
    </section>
</main>
<?php get_template_part('parts/cta'); ?>
<?php get_footer(); ?>