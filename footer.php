<?php wp_footer(); ?>
<div id="employee-login-menu-background" class="popup-menu-background" onclick="popupMenuToggle()"></div>
<div id="employee-login-menu" class="popup-menu popup-menu_standard popup-menu_centered popup-menu_login">
  <button class="button_close button-remove-style" onclick="popupMenuToggle()">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/close.svg">
  </button>
  <img class="popup-menu__image" src="<?php echo get_template_directory_uri(); ?>/assets/mark.svg" alt="">
  <div class="popup-menu__heading">BURNS SCALO EMPLOYEE LOGIN</div>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Employee Portal") ) : ?><?php endif;?>
  <a class="d-none box-link box-link_turquoise box-link_full" href="#">Log In</a>
  <div class="popup-menu__subtext">Login using your Burns Scalo email credentials.</div>
  <button class="button button_go-back button-remove-style" onclick="popupMenuToggle()">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-left.svg" alt="">
    <div class="button_go-back__text">GO BACK</div>
  </button>
</div>

<footer class="col-12">
  <ul class="col-6 col-md-2 offset-md-1 offset-xl-0 p-0">
    <li class="offset-md-3 offset-lg-0 offset-xl-0"><a href="https://www.linkedin.com/company/burns-&-scalo-real-estate-services" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.svg" alt="logo link to LinkedIn"></a></li>
    <li class="offset-md-3 offset-lg-0 offset-xl-0"><a href="https://www.instagram.com/BurnsScaloRE/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg" alt="logo link to Instragram"></a></li>
  </ul>
  <ul class="float-right">
    <li><a href="https://www.burnsscalorealestate.com/about/">ABOUT</a></li>
    <li><a href="https://www.burnsscalorealestate.com/media/">MEDIA</a></li>
    <li class="divider d-md-none"></li>
    <li class="d-lg-none"><a href="https://www.burnsscalorealestate.com/privacy/">PRIVACY POLICY</a></li>
    <li class="d-lg-none"><a href="https://www.burnsscalorealestate.com/accessibility/">ACCESSIBILITY</a></li>
    <li class="divider d-md-none"></li>
    <li class="d-block"><a href="https://www.securecafe3.com/tenantportal/commercialleasing/userlogin.aspx?companyid=1" target="_blank">CLIENT PORTAL</a></li>
    <li class="d-block"><a href="<?php echo get_site_url(); ?>">PARTNER PERKS</a></li>
    <li class="divider d-md-none"></li>
    <li class="#"><a href="https://www.burnsscalorealestate.com/career-hub/">CAREER HUB</a></li>
    <li class="d-lg-none"><a href="https://www.burnsscalorealestate.com/company-portal/" target="_blank">EMPLOYEE PORTAL</a></li>
    <li class="d-none d-lg-block"><button class="cursor-pointer button-remove-style" onclick="footerExpand(), footerList()">MORE^</button></li>
  </ul>
</footer>

<div class="footer-collapse" id="footer-expand">
  <div class="col-12 col-lg-10 offset-lg-1" id="footer-lists">
  <ul class="col-2 float-left">
    <li><a href="https://www.burnsscalorealestate.com/about/">ABOUT</a></li>
    <li><a href="https://www.burnsscalorealestate.com/media/">MEDIA</a></li>
  </ul>
  <ul class="col-2 float-left">
    <li><a href="https://www.burnsscalorealestate.com/privacy/">PRIVACY POLICY</a></li>
    <li><a href="https://www.burnsscalorealestate.com/accessibility/">ACCESSIBILITY</a></li>
  </ul>
    <ul class="col-2 float-left">
      <li><a href="https://www.securecafe3.com/tenantportal/commercialleasing/userlogin.aspx?companyid=1" target="_blank">CLIENT PORTAL</a></li>
      <li><a href="<?php echo get_site_url(); ?>">PARTNER PERKS</a></li>
    </ul>
  <ul class="col-2 float-left">
    <li><a href="https://www.burnsscalorealestate.com/career-hub/">CAREER HUB</a></li>
    <?php if (is_user_logged_in()) : ?>
      <li><a href="https://www.burnsscalorealestate.com/company-portal/" target="_blank">EMPLOYEE PORTAL</a></li>
      <?php else : ?>
      <li onclick="popupMenuToggle()"><a href="#">EMPLOYEE PORTAL</a></li>      
      <?php endif; ?>
  </ul>
<ul class="col-2 float-left d-none" id="employee">
  <style>
  #employee a{
    text-transform: uppercase;
    font-family: gotham;
  }
  </style>
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Employee Portal") ) : ?>
    <?php endif;?>
</ul>

<!-- CURRENT USER -->
<div class="user-panel col-2 float-left d-none">
  <span>
  <?php
  if ( is_user_logged_in() ) {
      $current_user = wp_get_current_user();
      if ( ($current_user instanceof WP_User) ) {
          echo get_avatar( $current_user->ID, 40 );
          echo '<span>Welcome, </span>' . esc_html( $current_user->first_name );
          echo '<br>';
          echo wp_loginout();
      }
  }
  ?>
  </span>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- END CURRENT USER-->

  <button onclick="footerExpand(), footerListRemove()" class="col-1 float-left button-remove-style">
    <img class="cursor-pointer" src="<?php echo get_template_directory_uri(); ?>/assets/close-x.svg" alt="X to close">
  </button>
  </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/popup-menu.js"></script>
<script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
    vgo('setAccount', '224658773');
    vgo('setTrackByDefault', true);

    vgo('process');
</script>
<script>
function footerList() {
  var element = document.getElementById("footer-lists");
  element.classList.add("footer-lists");
}
function footerListRemove() {
  var element = document.getElementById("footer-lists");
  element.classList.remove("footer-lists");
}
function footerExpand() {
  var element = document.getElementById("footer-expand");
  element.classList.toggle("footer-expand");
}
</script>