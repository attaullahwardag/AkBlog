<?php if ( have_posts() ) : ?>

<!-- Add the pagination functions here. -->

<!-- Start of the main loop. -->
<?php while ( have_posts() ) : the_post(); ?>
<h3> </h3>
<!-- the rest of your theme's main loop -->
    <div class="post-box">
        <div class="title">
            <h1 class="post-title"><?php the_title( ); ?></h1>
            <div class="meta-entries">
                <div> <i class=" fa fa-user" ></i> <a  class="meta-entries-text" href="#"><?php the_author( ); ?></a> </div>
                <div> <i class="fa fa-calendar" aria-hidden="true"></i> <a  class="meta-entries-text" href="#"><?php the_date( ); ?></a> </div>
                <div class="meta-catagory"> <i class="fas fa-tags"></i> <?php the_category(); ?> </div>
            </div>
        </div>
        <div class="post-content blogpg">
            <div class="post-text">
                <p>
                    <?php the_excerpt(); ?>
                </p>
            </div>
            <div class="post-thumbnail">
                <a href="<?php the_permalink( ); ?>"><?php the_post_thumbnail(array(300,300) ); ?></a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->
<?php the_posts_pagination(); ?>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>