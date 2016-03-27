<?php get_header(); ?>

        <section class="row">
            <div class="eight columns frontpg">

                <?php if (have_posts()) :
                    while (have_posts()) : the_post();
                    if ( has_post_thumbnail() ) { ?>
                    <div class="single-post-thumbnail"><?php the_post_thumbnail('medium'); ?></div>
                <?php } ?>

                    <h2><?php the_title(); ?></h2>

                    <?php the_content();
                        endwhile;
                    endif; ?>
            </div>
            <div class="two columns">
                <p>Sidebar Content</p>
            </div>
        </section>

<?php get_footer(); ?>
