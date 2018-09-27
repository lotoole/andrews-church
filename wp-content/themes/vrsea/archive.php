<?php

get_header();

if ( is_day() ) :
    $title = get_the_date();
elseif ( is_month() ) :
    $title = get_the_date( 'F Y' );
elseif ( is_year() ) :
    $title = get_the_date( 'Y' );
elseif ( is_category() ) :
    $title = single_cat_title( '', false );
elseif ( is_tag() || is_tax() ) :
    $term = get_queried_object();
    $title = $term->name;
elseif ( get_search_query() ) :
    $title = sprintf( 'Your Search: %s', get_search_query() );
endif;

?>

<section class="archive">
  <div class="container">
    <div class="row gutter-60">
      <div class="col-sm-10">
        <?php if ( is_search() ) : ?>
        <h2 class="search-title"><?php printf( 'Your Search Was: %s', get_search_query() ); ?></h2>
        <?php else : ?>
        <h2><?php the_title(); ?></h2>
        <?php endif; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="result">
            <h4><?php echo VRSEA::truncate_string(get_the_title(), 50, ' '); ?></h4>
            <a href="<?php the_permalink(); ?>" class="excerpt"><?php the_content(); ?></a>
            <a href="<?php the_permalink(); ?>" class="more">View <?php echo ucwords(get_post_type()); ?><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          </div>
        <?php endwhile; ?>
          <?php echo VRSEA::get_pagination(); ?>
        <?php else : ?>
          <h3>Sorry, there were no results.</h3>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
