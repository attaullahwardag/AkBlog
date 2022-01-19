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
                        <div> <i class=" fa fa-user" ></i> <a  class="meta-entries-text" href="#"><?php the_author( ); ?></a> </div>
                        <div> <i class="fa fa-calendar" aria-hidden="true"></i> <a  class="meta-entries-text" href="#"><?php the_date( ); ?></a> </div>
                        <div class="meta-catagory"> <i class="fas fa-calendar"></i> <?php the_category(); ?> </div>
                    </div>
                </div>
                <div class="post-content">
                    <div class="post-text">
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
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