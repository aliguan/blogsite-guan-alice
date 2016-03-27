<?php
/* Template Name: Search Page */

get_header(); ?>

    <div class="row">
        <div class="eight columns frontpg">
            <h1><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                        <div class="searchpic">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="searchcontent">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                        </div>

                            <?
                            endwhile;
                            else : ?>
                            <h1>Nothing Found</h1>
                            <p>Sorry, but nothing matched your search criteria. Please try again with different search terms.</p>
                        <?php endif; ?>
        </div>
