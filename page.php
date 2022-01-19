<?php get_header();?>

    <section class="main">
        <div class="container">
            <div class="post-box">
                <h1> <?php wp_title(); ?> </h1>
            </div>
        </div>
        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </section>

<?php get_footer(); ?>