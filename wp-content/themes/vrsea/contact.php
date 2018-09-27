<?php
//Template Name: Contact
the_post();

get_header();

?>
<?php

if ( have_rows( 'flexible_content' ) ) {
    while ( have_rows( 'flexible_content' ) ) {
        the_row();
        get_template_part( 'partials/' . get_row_layout() );
    }
}
?>


<?php the_content(); ?>

<?php get_footer(); ?>
