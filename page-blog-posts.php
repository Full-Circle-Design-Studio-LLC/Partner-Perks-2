<?php /* Template Name: Blog Overview */ ?>

<?php get_header() ?>
      </header>
<div class="page-home col-12 float-left">

<img src="<?php echo get_template_directory_uri(); ?>/assets/image.jpeg" alt="#" class="col-5 offset-1 float-left">

<style>
a img{
  width: 100%;
  height: auto;
  float: left;
}
</style>

<ul class="col-6 offset-3 float-left p-0">


  <?php
      $args = array(
          'post_type' => 'blog-post'
      );
      $the_query = new WP_Query( $args ); ?>

      <?php if ( $the_query->have_posts() ) : ?>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


  <!-- CONTENT GOES HERE -->
    <li class="col-12 float-left p-0"><a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
      <?php the_title(); ?>
    </a>
        <?php the_field('description'); ?></li>
<!-- close content -->

          <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

  <?php endif; ?>






</ul>


<?php get_footer(); ?>
