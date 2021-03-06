<?php get_header(); ?>

        <section class="row">

            <div class="gridcontainer eight columns frontpg">
                <?php
                    $counter = 1; //start counter

                    $grids = 2; //Grids per row

                    global $query_string; //Need this to make pagination work

                    /*Setting up our custom query (In here we are setting it to show 12 posts per page and eliminate all sticky posts*/
                    query_posts($query_string . '&caller_get_posts=1&posts_per_page=12');

                    if(have_posts()) :	while(have_posts()) :  the_post();
                ?>
                <?php
                    //Show the left hand side column
                    if($counter == 1) :
                ?>
            <div class="griditemleft">
                <div class="postimage hvr-shrink">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('frontpg-left'); ?></a>
                    <div class="pgtitle">
                        <div class="pgtitleinner">
                            <div class="pgtitlecontent">
                                <h2 class="ontop"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                //Show the right hand side column
                elseif($counter == $grids) :
                ?>
            <div class="griditemright">
                <div class="postimage hvr-shrink">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('frontpg-left'); ?></a>
                    <div class="pgtitle">
                        <div class="pgtitleinner">
                            <div class="pgtitlecontent">
                                <h2 class="ontop"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $counter = 0;
                endif;
            ?>

        <?php
            $counter++;
            endwhile;
            //Post Navigation code goes here
            endif;
        ?>
        </div>
    </section>

<?php get_footer(); ?>
