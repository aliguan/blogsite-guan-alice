<?php
/* Template Name: Archive Page */

get_header(); ?>

<div class="row">
    <div class="eight columns frontpg">
        <?php if ( have_posts() ) : ?>
            <h2><?php single_cat_title(''); ?></h2>
            <?php
            // The Loop
            while ( have_posts() ) : the_post();?>
            <!-- data context -->
            <div class="searchpic">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="searchcontent list_post">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h2><?php the_title(); ?></h2></a>
                <?php the_excerpt(); ?>
            </div>
            <?php endwhile; ?> <!-- End Loop -->
        <?php else: ?>
            <div class="noposts">
                <img src="http://www.aliceguandesign.com/blog/wp-content/themes/blogsite-guan-alice/img/sadface.png"/>
                <h1>Sorry, there are no <br/>posts here yet.</h1>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
