<?php
/* Template Name: Search Page */

get_header(); ?>

    <div class="row">
        <div class="eight columns frontpg">
            <h1><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                        <div class="searchpic">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="searchcontent list_post">
                            <h2><?php the_title(); ?></h2>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_excerpt(); ?></a>
                        </div>

                            <?
                            endwhile;
                            else : ?>
                            <h1>Nothing Found</h1>
                            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>

                        <?php endif; ?>

        </div>
