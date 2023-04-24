<div class="culture-subnav" id="culture-subnav">

  <a href="<?php echo get_site_url() ?>" aria-label="Partner Perks homepage">
    <img class="pp-logo" src="<?php echo get_template_directory_uri(); ?>/assets/partner-perks.svg" alt="Partner Perks logo">
  </a>

  <?php if ( is_user_logged_in() ) : ?>
    <style>
      .subnav-profile-icon-img,
      .login,
      .subnav-sign-up {
        display: none!important;
      }
      .hello-user {
        display: flex!important;
      }
    </style>
  <?php endif; ?>

  <div class="subnav-login">
    <img onclick="slideLogin()" class="subnav-profile-icon-img" src="<?php echo get_template_directory_uri(); ?>/assets/Subtraction1.svg" alt="user icon">
    <a class="login" href="<?php echo get_site_url() ?>/wp-login.php">Login</a>
    <a class="sign-up subnav-sign-up" href="<?php echo get_site_url() ?>/register">Sign Up</a>
  </div>

  <?php global $current_user; wp_get_current_user(); ?>
  <div class="hello-user">
    <div><?php echo "Hello, " . $current_user->display_name; ?></div>
    <a class="logout" href="<?php echo wp_logout_url(); ?>">Logout</a>
  </div>

</div>
