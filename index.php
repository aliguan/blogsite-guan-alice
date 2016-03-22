<?php get_header(); ?>

        <section class="row">

            <div class="nine columns">
                <p>
                    <?php
                    if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>
                    <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('thumbnail');
                        }
                        the_excerpt(); 
                    } // end while
                } // end if
                    ?>
            </div>
            <div class="three columns">
                <h4>Side Bar</h4>
                <p>Side Bar<p>
            </div>
        </section>

<?php get_footer(); ?>
