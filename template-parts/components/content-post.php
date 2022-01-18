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
                <span> <a  class="meta-entries-text" href="#"><?php the_date( ); ?></a> </span>
                <span> <a  class="meta-entries-text" href="#"> by <?php the_author( ); ?></a> </span>
            </div>
        </div>
        <div class="post-content blogpg">
            <div class="post-text">
                <p>
                    <?php the_excerpt( ); ?>
                </p>
                <a href="<?php permalink_link();  ?>"> Read more..</a>
            </div>
            <div class="post-thumbnail">
                <img class="post-img" src="images/img2.jpeg" alt="">
            </div>
        </div>
        <div class="meta-entries">
             <?php the_category(); ?>
            <i class="fas fa-comments"></i> Leave a Comment
        </div>
    </div>
<?php endwhile; ?>
<!-- End of the main loop -->

<!-- Add the pagination functions here. -->
<?php the_posts_pagination(); ?>
<?php else : ?>
<?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>