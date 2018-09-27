<?php

get_header();

?>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if ( is_search() ) : ?>
                <h1><?php printf( 'Search: %s', get_search_query() ); ?></h1>
                <?php else : ?>
                <h1><?php the_title(); ?></h1>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-sm-6 col-lg-4">
                <a class="excerpt" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'excerpt' ); ?>
                    <h4><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                </a>
            </div>
            <?php endwhile; else : ?>
            <div class="col-sm-12">
                <h3>Sorry, there were no results.</h3>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
