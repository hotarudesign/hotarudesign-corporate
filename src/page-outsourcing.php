<?php get_header(); ?>
<main class="main">
    <section class="headline">
        <h2 class="headline__txt">Outsourcing</h2>
    </section>
    <?php get_template_part('parts/breadcrumbs'); ?>
    <article class="outsourcing page-container">
        <h2 class="outsourcing-ttl">コーディングのご依頼について</h2>
        <p class="outsourcing-lead">WebサイトやLP（ランディングページ）コーディングのご依頼を承っております。<br>このページではコーディングのご依頼に関する情報を掲載しております。</p>
        <?php get_template_part(('parts/outsourcing/question')); ?>
        <?php get_template_part(('parts/outsourcing/feature')); ?>
        <?php get_template_part(('parts/outsourcing/case')); ?>
        <?php get_template_part(('parts/outsourcing/point')); ?>
        <?php get_template_part(('parts/outsourcing/reason')); ?>
        <?php get_template_part(('parts/outsourcing/skill')); ?>
        <?php get_template_part(('parts/outsourcing/price')); ?>
    </article>
</main>
<?php get_footer(); ?>