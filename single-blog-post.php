<?php get_header() ?>
      </header>
<div class="page-home col-12 float-left">


  <h1 class="col-12 float-left"><?php the_title(); ?></h1>
<img src="<?php echo get_template_directory_uri(); ?>/assets/image.jpeg" alt="#" class="col-5 offset-1 float-left">

<?php the_content(); ?>


<?php get_footer(); ?>
