<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package akblog
 */
  
get_header(); 
the_post();

?>
    <section class="main">
        <div class="container">
            <div class="post-box">
                <div class="title">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="meta-entries">
                        <span> <a  class="meta-entries-text" href="#"><?php echo get_the_date(); ?></a> </span>
                        <span> <a  class="meta-entries-text" href="#"> by <?php echo get_the_author(); ?></a> </span>
                    </div>
                </div>
                <div class="post-content">
                    <div class="post-text">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
                <div class="meta-entries">
                    <?php the_category(); ?>
                    <i class="fas fa-comments"></i> Leave a Comment
                </div>
            </div>
            <div class="comments-box">
                <?php comments_template(); ?>
            </div>
        </div>
        <aside class="sidebar">
            <div class="sidebar-widget-box">   
            </div>
            <div class="sidebar-widget-box">   
            </div>
        </aside>
    </section>
  
<?php get_footer(); ?>