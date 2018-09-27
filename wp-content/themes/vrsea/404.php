<?php

the_post();

get_header();

?>
<?php $src = wp_get_attachment_image_src( get_field('404_image', 'options'), 'hero' ); ?>
<section class="hero-404" style="background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('<?php echo $src[0]; ?>')">
    <div class="row">
      <div class="col-md-12">
        <div class="content-404">
          <h1>404 Error: Page Not Found</h1>
          <p>We are sorry but we could not find the page you were looking for. Return <a href="<?php echo get_home_url(); ?>">home</a> to get your bearings back.</p>
        </div>
      </div>
    </div>
</section>

<?php get_footer(); ?>
