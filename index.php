<?php /* Template Name: Home */ ?>
<?php get_header() ?>
      </header>
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
          $hideIfNotLoggedIn = '';
          $notLoggedInCustomClass = '';
        ?>
        <style>
          .payment {
            display: block!important;
          }
          .discount-code {
            display: block!important;
          }
        </style>
      <?php else : ?>
        <?php 
          $hideIfNotLoggedIn = 'd-none';
          $notLoggedInCustomClass = 'not-logged-in';
        ?>
      <?php endif; ?>


<div class="main-content">

        
        <div class="test">
        <?php
          $featuredPerks = get_field('featured_perks');
          echo 'id: ';
          $featuredPerk_1 = $featuredPerks[0];
          $featuredPerk_2 = $featuredPerks[1];
          $featuredPerk_3 = $featuredPerks[2];
        ?>
        </div>

  <!-- START CAROUSEL -->

  <div id="carouselExampleControls" class="carousel slide featured-perk" data-ride="carousel">
    <div class="carousel-inner">


      <?php
          $args = array(
              'post_type' => 'partners',
              'p' => intval($featuredPerk_1)
          );
          $the_query = new WP_Query( $args ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


      <!-- CONTENT GOES HERE -->
      <div class="carousel-item active">
        <div class="hero">
          <?php $image = get_field('hero-image-m'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-lg-none <?php the_field('hero_image_alignment'); ?>">

          <?php $image = get_field('hero-image-d'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-none d-lg-block <?php the_field('hero_image_alignment'); ?>">


        </div>
        <div class="featured-perk-content">
          <div class="featured-perk-text">
            <div class="bar"></div>
            <span class="bold">FEATURED</span><span> PARTNER</span>
          </div>
          <div class="featured-perk-name">
            <div class="bold featured-perk-name-div"><div class="new-bar"></div><?php the_title(); ?></div>
          </div>
          <div class="featured-perk-address">
            <span><?php the_field('address'); ?></span>
          </div>
        </div>
        <div class="gradient"></div>
      </div>

              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>



      <?php
          $args = array(
            'post_type' => 'partners',
            'p' => intval($featuredPerk_2)
          );
          $the_query = new WP_Query( $args ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


      <!-- CONTENT GOES HERE -->
      <div class="carousel-item">
        <div class="hero">
          <?php $image = get_field('hero-image-m'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-lg-none">

          <?php $image = get_field('hero-image-d'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-none d-lg-block">


        </div>
        <div class="featured-perk-content">
          <div class="featured-perk-text">
            <div class="bar"></div>
            <span class="bold">FEATURED</span><span> PARTNER</span>
          </div>
          <div class="featured-perk-name">
            <div class="bold featured-perk-name-div"><div class="new-bar"></div><?php the_title(); ?></div>
          </div>
          <div class="featured-perk-address">
            <span><?php the_field('address'); ?></span>
          </div>
        </div>
        <div class="gradient"></div>
      </div>

              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>



      <?php
          $args = array(
            'post_type' => 'partners',
            'p' => intval($featuredPerk_3)
          );
          $the_query = new WP_Query( $args ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


      <!-- CONTENT GOES HERE -->
      <div class="carousel-item">
        <div class="hero">
          <?php $image = get_field('hero-image-m'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-lg-none">


          <?php $image = get_field('hero-image-d'); ?>
          <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="d-none d-lg-block">




        </div>
        <div class="featured-perk-content">
          <div class="featured-perk-text">
            <div class="bar"></div>
            <span class="bold">FEATURED</span><span> PARTNER</span>
          </div>
          <div class="featured-perk-name">
            <div class="bold featured-perk-name-div"><div class="new-bar"></div><?php the_title(); ?></div>
          </div>
          <div class="featured-perk-address">
            <span><?php the_field('address'); ?></span>
          </div>
        </div>
        <div class="gradient"></div>
      </div>

              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>





    </div>
  </div>

  <!-- END CAROUSEL -->

  <!-- START PARTNER PERKS SECTION -->

  <div class="partner-perks">
    <div class="partner-perks-title">
      <span><span class="bold">PARTNER</span> PERKS</span>
    </div>
    <div class="partner-perks-text">
      <p>At Burns Scalo Real Estate, we keep amenities and community in mind behind every build. With our Partner Perks program, this now extends well beyond our properties. All Burns Scalo tenants and employees can enjoy endless benefits, rewards, and discounts right at their fingertips.</p>
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
              <div class="discount <?php echo $hideIfNotLoggedIn; ?>">
                <div><?php the_field('discountincentive'); ?></div>
                <div class="discount-code"><?php the_field('discountcode'); ?></div>
              </div>


            </div>
            <div class="company-name-2 <?php echo $hideIfNotLoggedIn; ?>">
              <div class="address"><?php the_field('address'); ?></div>
            </div>
            <div class="company-name-3"></div>
            <div class="visit-site-cover"></div>
            <a class="visit-site" href="<?php the_field('site_link'); ?>" target="_blank"><span class="bold">VISIT&nbsp</span>SITE</a>
          </div>
              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>

      <!-- END COMPANY CARD LOOP -->

      

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
          <!-- CONTENT GOES HERE -->

          <div class="card card-more <?php echo 'card-'.$notLoggedInCustomClass; ?>">
            <div class="company-logo">
              <?php the_post_thumbnail(); ?>
              <div class="hover">
              </div>
            </div>
            <div class="company-name <?php echo 'company-name-'.$notLoggedInCustomClass; ?>">

              <div class="company-name-text bold"><?php the_title(); ?></div>
              <div class="discount <?php echo $hideIfNotLoggedIn; ?>">
                <div><?php the_field('discountincentive'); ?></div>
                <div class="discount-code"><?php the_field('discountcode'); ?></div>
              </div>


            </div>
            <div class="company-name-2 <?php echo $hideIfNotLoggedIn; ?>">
              <div class="address"><?php the_field('address'); ?></div>
            </div>
            <div class="company-name-3"></div>
            <div class="visit-site-cover"></div>
            <a class="visit-site" href="<?php the_field('site_link'); ?>"><span class="bold">VISIT&nbsp</span>SITE</a>
          </div>
              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>
      </div>
    </div>
    <div class="load-more" onclick="loadMore()">
      <button class="accordion-button load-more-and-icon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        <span id="load-more-span" class="load-more-text">LOAD MORE</span>
        <img class="arrow-down" id="arrow-down" src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg?">
        <img class="arrow-up" id="arrow-up" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-up.svg?">
      </button>
    </div>
  </div>
</div> <!-- END ACCORDION -->

      <!-- START LOAD MORE BUTTON (OLD) -->

      <div class="load-more d-none">
        <div class="load-more-and-icon" onclick="loadMore()">
          <span id="load-more-span" class="load-more-text">LOAD MORE</span>
          <img class="arrow-down" id="arrow-down" src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg?">
          <img class="arrow-up" id="arrow-up" src="<?php echo get_template_directory_uri(); ?>/assets/arrow-up.svg?">
        </div>
      </div>

      <!-- END LOAD MORE BUTTON -->

  </div>

  <!-- END PARTNER PERKS SECTION -->

  <!-- START PAYMENT SECTION -->



  <div class="payment">
    <div class="header-1">
      <div class="made-easy bold">MADE EASY</div>
      <div>ON THE GO</div>
    </div>
    <div class="add-card">
      <div class="header-2">
        <span class="bold add-card-text">ADD THE E-CARD TO YOUR PHONE WALLET</span>
      </div>
      <div class="pay-links">
        <div class="apple d-none"><a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/apple.png" alt="#">
        </a></div>
        <div class="google d-none"><a href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/google.png" alt="#">
        </a></div>

        <div class="google"><a href="<?php echo get_template_directory_uri(); ?>/assets/partner-perks-card.jpg" download="Partner Perks Card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/add-to-photos.png" alt="#" style="width: 350px; height:auto;">
        </a></div>

      </div>
    </div>
  </div>

  <!-- END PAYMENT SECTION -->

  <!-- START BECOME PARTNER SECTION -->

  <div class="become-partner">
    <div class="become-partner-title">
      <div class="become bold">BECOME</div>
      <div>A PARTNER</div>
    </div>
    <div class="become-partner-text-and-profiles">
      <div class="become-partner-text-and-contact-us">
        <div class="become-partner-text">
          <p>Is your business looking to join? Partner Perks is free to participate, all we ask is that you honor your exclusive discount to Burns Scalo tenants and employees who make a purchase.</p>
          <p>Contact Our Client Experience Team Today</p>
        </div>

        <div class="contact-us" onclick="contactUs()">
          <div class="text"><span class="bold">CONTACT</span> US</div>
        </div>
      </div>

      <div class="profiles">

      <!-- START PROFILE CARD LOOP -->

      <?php
          $args = array(
              'post_type' => 'profiles'
          );
          $the_query = new WP_Query( $args ); ?>

          <?php if ( $the_query->have_posts() ) : ?>

              <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


      <!-- CONTENT GOES HERE -->
      <div class="profile-card">
        <div class="profile-photo">
          <?php the_post_thumbnail(); ?>
        </div>

        <div class="profile-info">
          <div class="profile-name"><span class="bold"><?php the_field('firstname'); ?> </span><?php the_field('lastname'); ?></div>
          <div class="profile-role"><?php the_field('position'); ?></div>
          <div class="profile-email"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
          <div class="profile-number"><a href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></div>
        </div>
      </div>

              <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>

      <?php endif; ?>

      <!-- END PROFILE CARD LOOP -->

      </div>
    </div>
  </div>

  <!-- END BECOME PARTNER SECTION -->

  <!-- START MAILING LIST SECTION -->

  <div class="mailing-list">
    <div class="mailing-list-text">
      <span>JOIN OUR MAILING LIST FOR FEATURED PERK UPDATES!</span>
    </div>


    <?php echo do_shortcode('[contact-form-7 id="36" title="Mailing List"]'); ?>
<!--

    <div class="sign-up-boxes">


        <form class="email-field" action="welcome_get.php" method="get">
        <input type="text" name="email">
        </form>
      <a href ="#" class="sign-up">
        <div class="sign-up-text"><span class="bold">SIGN</span> UP</div>
      </a>
    </div>
  -->


<!-- TEMP -->

<div>
</div>

<!-- END TEMP -->

    <div class="terms-privacy">
      <div class="terms">
        <a href="#">TERMS AND CONDITIONS</a>
      </div>
      <div class="privacy">
        <a href="#">PRIVACY POLICY</a>
      </div>
    </div>
  </div>

  <!-- END MAILING LIST SECTION -->



</div>

<!-- END PAGE CONTENT -->

<style>
html {
  margin-top: 0!important;
}
</style>

<?php get_footer(); ?>
