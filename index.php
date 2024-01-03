<?php 
/*
*The main templete file
*/
get_header(); ?>

<section id="body_area">
 <div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
            <div class="blog_area">
                <div class="post_thumb">
                    <?php echo the_post_thumbnail(); ?>
                </div>

            <?php the_content(); ?>
            </div>

                <?php 
                    endwhile;
                    else :
                        _e('No post found');
                    endif;
                ?>

           
        </div>
        <div class="col-md-3">
            <h2>this is siteber area</h2>
        </div>
        <div class="col-md-3">
            <h2>this is siteber area</h2>
        </div>
    </div>
 </div>
</section>

<?php get_footer(); ?>


