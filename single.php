<?php get_header(); ?>

        <section class="row">
            <div class="eight columns frontpg">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post();
                    if ( has_post_thumbnail() ) { ?>
                    <div class="single-post-thumbnail"><?php the_post_thumbnail('small'); ?></div>
                <?php } ?>
                <div class="eight columns singlecontent">
                    <h2><?php the_title(); ?></h2>

                    <p><?php the_content();
                        endwhile;
                    endif; ?><p>
                </div>
                <div class="four columns sidebar">
                    <?php get_sidebar( 'first-widget' ); ?>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
