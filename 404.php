<?php
/* Template: 404 page (Not Found) */

get_header(); ?>

    <div class="row">
        <div class="eight columns">
            <h2>Not Found</h2>
            <h3>This is somewhat embarrassing, isn't it?</h3>
            <p>It looks like nothing was found at this location. Maybe try a search?</p>

            <h3>Try searching for what you need:</h3>
            <?php get_search_form(); ?>
        </div>
        <div class="four columns">
            <?php get_sidebar(); ?>
        </div>
    </div>

<?php get_footer(); ?>
