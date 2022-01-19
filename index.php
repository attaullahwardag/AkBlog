    <?php get_header(); ?>
    <!-- Main content section starts-->
    <section class="main">
        <div class="container">
            <?php get_template_part( 'template-parts/components/content-post' ); ?>
        </div>
        <aside class="sidebar">
            <?php get_sidebar( ); ?>
        </aside>
    </section>

<?php get_footer(); ?>
