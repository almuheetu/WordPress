<?php 
/*
*The main templete file
*/
get_header(); ?>

<section id="body_area">
 <div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php the_content(); ?>
        </div>
        <div class="col-md-3">
            <h2>this is siteber area</h2>
        </div>
    </div>
 </div>
</section>

<?php get_footer(); ?>


