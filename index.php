<?php /* Template Name: Home */ ?>
<?php get_header() ?>
</header>
<body>
<?php get_template_part('nav'); ?>
<?php get_template_part('perks-subnav'); ?>

<div class="contact-form" id="contact-form-toggle" onclick="closeForm">
  <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?>

</div>
<div class="contact-form-bg" id="form-bg" onclick="closeForm">
</div>

<div class="success-form">
  <div class="success-x">x</div>
  <div class="success-title bold">SUCCESS!</div>
  <div class="success-text-1">Someone will be in touch with you shortly.</div>
  <div class="success-text-2">Thank you for reaching out about our Partner Perks program.</div>
</div>

<?php if ( is_user_logged_in() ) : ?>
  <?php 
    $notLoggedInCustomClass = '';
  ?>
<?php else : ?>
  <?php 
    $notLoggedInCustomClass = 'not-logged-in';
  ?>
<?php endif; ?>

<div class="main-content">
<?php
  $featuredPerks = get_field('featured_perks');
?>

  <!-- START CAROUSEL -->
  <div id="carouselExampleSlidesOnly" class="carousel slide featured-perk" data-ride="carousel">
  <ol class="carousel-indicators">
    <? for ($i=0; $i < count( $featuredPerks ); $i++) : ?>
      <li data-target="#carouselExampleSlidesOnly" data-slide-to="<? echo $i; ?>" <? if ( $i == 0 ) { echo 'class="active"'; } ?>></li>
    <? endfor; ?>
  </ol>
    <div class="carousel-inner">
    <?php
        $i = 0;
        $args = array(
            'post_type' => 'partners',
            'post__in' => $featuredPerks,
            'orderby' => 'post__in'
        );
        $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <!-- CONTENT GOES HERE -->
      <div class="carousel-item <?php if ($i == 0) {echo 'active'; $i++;} ?>">
        <?php if (get_field('hero-image-m')) : ?>
          <?php $image = get_field('hero-image-m'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-lg-none <?php the_field('hero_image_alignment'); ?>" loading="lazy">
        <?php endif; ?>
        <?php if (get_field('hero-image-d')) : ?>
          <?php $image = get_field('hero-image-d'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-none d-lg-block <?php the_field('hero_image_alignment'); ?>" loading="lazy">
        <?php endif; ?>
        <div class="featured-perk-content">
          <div class="featured-perk-text">
            <div class="bar"></div>
            <span class="bold">FEATURED</span><span> PARTNER</span>
          </div>
          <div class="featured-perk-name">
            <div class="bold featured-perk-name-div"><?php the_title(); ?></div>
          </div>
          <div class="featured-perk-address">
            <span><?php the_field('address'); ?></span>
          </div>
          <a class="featured-link" href="<? the_field('site_link'); ?>" aria-label="<? the_title(); ?> website" target="_blank" rel="nofollow">Visit Website</a>
        </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </div><!-- END CAROUSEL -->

  <!-- START PARTNER PERKS SECTION -->
  <div class="partner-perks col-12 float-left pt-5 pb-5 pl-md-5 pr-md-5">
    <h1 class="partner-perks-title"><span class="bold">PARTNER</span> PERKS</h1>
    <div class="partner-perks-text">
      <?php the_content(); ?>
    </div>

    <div class="company-cards">

      <!-- START COMPANY CARD LOOP -->

      <?php
          $args = array(
              'post_type' => 'partners',
              'posts_per_page' => '4'
          );
          $the_query = new WP_Query( $args ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <!-- CONTENT GOES HERE -->
          
          <div class="card <?php echo 'card-'.$notLoggedInCustomClass; ?>">
            <div class="company-logo">
              <?php the_post_thumbnail(); ?>
              <div class="hover">
              </div>
            </div>
            <div class="company-name <?php echo 'company-name-'.$notLoggedInCustomClass; ?>">

              <div class="company-name-text bold"><?php the_title(); ?></div>

              <?php if ( is_user_logged_in() ) : ?>
              <div class="discount">
                <div><?php the_field('discountincentive'); ?></div>
                <div class="discount-code"><?php the_field('discountcode'); ?></div>
              </div>
              <?php endif; ?>
            </div>
            <?php if ( is_user_logged_in() ) : ?>
            <div class="company-name-2">
              <div class="address"><?php the_field('address'); ?></div>
            </div>
            <?php endif; ?>
            <div class="company-name-3"></div>
            <div class="visit-site-cover"></div>
            <a class="visit-site" href="<?php the_field('site_link'); ?>" target="_blank"><span class="bold">VISIT&nbsp</span>SITE</a>
          </div>
              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?><!-- END COMPANY CARD LOOP -->

      </div>

      <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body company-cards">
      <?php
          $args = array(
              'post_type' => 'partners',
              'posts_per_page' => -1
          );
          $the_query = new WP_Query( $args ); ?>
          <?php if ( $the_query->have_posts() ) : ?>
              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <div class="card card-more <?php echo 'card-'.$notLoggedInCustomClass; ?>">
            <div class="company-logo">
              <?php the_post_thumbnail(); ?>
              <div class="hover">
              </div>
            </div>
            <div class="company-name <?php echo 'company-name-'.$notLoggedInCustomClass; ?>">

              <div class="company-name-text bold"><?php the_title(); ?></div>
              <?php if ( is_user_logged_in() ) : ?>
              <div class="discount">
                <div><?php the_field('discountincentive'); ?></div>
                <div class="discount-code"><?php the_field('discountcode'); ?></div>
              </div>
              <?php endif; ?>
            </div>
            <?php if ( is_user_logged_in() ) : ?>
            <div class="company-name-2">
              <div class="address"><?php the_field('address'); ?></div>
            </div>
            <?php endif; ?>
            <div class="company-name-3"></div>
            <div class="visit-site-cover"></div>
            <a class="visit-site" href="<?php the_field('site_link'); ?>" target="_blank"><span class="bold">VISIT&nbsp</span>SITE</a>
          </div>
              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>
      </div>
    </div>
      <button class="accordion-button load-more-and-icon button-remove-style load-more" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" onclick="loadMore()">
        <span id="load-more-span" class="load-more-text">LOAD MORE</span>
        <img class="arrow-down" id="arrow-down" src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg?" alt="" width="24" height="13">
        <img class="arrow-up" id="arrow-up" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-up.svg?" alt="" width="24" height="13">
      </button>
  </div>
</div> <!-- END ACCORDION -->

  </div>

  <!-- END PARTNER PERKS SECTION -->

  <!-- START BECOME PARTNER SECTION -->

  <div class="become-partner col-12 float-left pt-5 pb-5 pl-md-5 pr-md-5">
    <div class="become-partner-title">
      <div class="become bold">BECOME</div>
      <div>A PARTNER</div>
    </div>
    <div class="become-partner-text-and-profiles">
      <div class="become-partner-text-and-contact-us">
        <div class="become-partner-text mb-5">
          <?php the_field('contact_section_text'); ?>
        </div>

        <button class="contact-us button-remove-style" onclick="contactUs()">
          <span class="bold">CONTACT</span>&nbspUS
        </button>
      </div>

      <div class="profiles">

      <div class="profile-card">
        <?php $photo = get_field('photo'); ?>
        <img class="profile-photo" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" loading="lazy">
        <div class="profile-info">
          <span class="bold"><?php the_field('firstname'); ?> </span><?php the_field('lastname'); ?><br>
          <span class="profile-role"><?php the_field('position'); ?></span><br>
          <a class="profile-email" href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a><br>
          <a class="profile-number" href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
        </div>
      </div>

      <?php if (get_field('show_second_contact') == 'Show') : ?>
      <div class="profile-card">
        <?php $photo = get_field('photo_2'); ?>
        <img class="profile-photo" src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" loading="lazy">
        <div class="profile-info">
          <span class="bold"><?php the_field('first_name_2'); ?> </span><?php the_field('last_name_2'); ?><br>
          <span class="profile-role"><?php the_field('position_2'); ?></span><br>
          <a class="profile-email" href="mailto:<?php the_field('email_2'); ?>"><?php the_field('email_2'); ?></a><br>
          <a class="profile-number" href="tel:<?php the_field('phone_2'); ?>"><?php the_field('phone_2'); ?></a>
        </div>
      </div>
      <?php endif; ?>

      </div>
    </div>
  </div><!-- END BECOME PARTNER SECTION -->

  <!-- START MAILING LIST SECTION -->
  <div class="mailing-list col-12 float-left pt-5">
    <span class="mailing-list-text d-block"><?php the_field('mailing_list_text'); ?></span>

    <?php echo do_shortcode('[contact-form-7 id="36" title="Mailing List"]'); ?>

    <a class="privacy d-block" href="https://www.burnsscalorealestate.com/privacy-policy/" target="_blank">PRIVACY POLICY</a>
  </div><!-- END MAILING LIST SECTION -->

</div><!-- END PAGE CONTENT -->

<style>
html {
  margin-top: 0!important;
}
</style>

<?php get_footer(); ?>
</body>
</html>