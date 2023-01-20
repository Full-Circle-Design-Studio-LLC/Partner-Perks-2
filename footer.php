<?php wp_footer(); ?>


<footer class="col-12">
  <ul class="col-6 col-md-2 offset-md-1 offset-xl-0 p-0">
    <li class="offset-md-3 offset-lg-0 offset-xl-0"><a href="https://www.linkedin.com/company/burns-&-scalo-real-estate-services" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.svg" alt="logo link to LinkedIn"></a></li>
    <li class="offset-md-3 offset-lg-0 offset-xl-0"><a href="https://www.instagram.com/BurnsScaloRE/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/instagram.svg" alt="logo link to Instragram"></a></li>
    </ul>


    <ul class="float-right">
      <li><a href="https://www.burnsscalorealestate.com/about/">ABOUT</a></li>
      <li><a href="https://www.burnsscalorealestate.com/media/">MEDIA</a></li>
      <li class="divider"></li>
      <li class="#"><a href="https://www.burnsscalorealestate.com/career-hub/">CAREER HUB</a></li>
      <li class="d-none"><a href="https://www.burnsscalorealestate.com/careers/">CAREERS</a></li>
      <li class="divider d-lg-none"></li>
      <li class="d-lg-none"><a href="https://www.burnsscalorealestate.com/privacy/">PRIVACY POLICY</a></li>
      <li class="d-lg-none"><a href="https://www.burnsscalorealestate.com/accessibility/">ACCESSIBILITY</a></li>
      <li class="divider d-lg-none"></li>
      <li class="d-block"><a href="https://www.securecafe3.com/tenantportal/commercialleasing/userlogin.aspx?companyid=1" target="_blank">CLIENT PORTAL</a></li>
      <li class="d-lg-none"><a href="https://www.burnsscalorealestate.com/company-portal/" target="_blank">EMPLOYEE PORTAL</a></li>
      <li class="d-none d-lg-block"><a class="cursor-pointer" onclick="footerExpand(), footerList()">MORE^</a></li>
      </ul>
      </footer>


  <div class="footer-collapse" id="footer-expand">
    <div class="col-12" id="footer-lists">
    <ul class="col-2 offset-1 float-left">
      <li><a href="https://www.burnsscalorealestate.com/about/">ABOUT</a></li>
      <li><a href="https://www.burnsscalorealestate.com/media/">MEDIA</a></li>
      </ul>


      <ul class="col-2 d-none float-left">
      <li class="#"><a href="https://www.burnsscalorealestate.com/career-hub/">CAREER HUB</a></li>
      <li class="d-none"><a href="https://www.burnsscalorealestate.com/careers/">CAREERS</a></li>
      <li class="d-none"><br></li>
    </ul>


      <ul class="col-2 float-left">
      <li><a href="https://www.burnsscalorealestate.com/privacy/">PRIVACY POLICY</a></li>
      <li><a href="https://www.burnsscalorealestate.com/accessibility/">ACCESSIBILITY</a></li>
    </ul>


    <ul class="col-2 float-left">
      <li><a href="https://www.securecafe3.com/tenantportal/commercialleasing/userlogin.aspx?companyid=1" target="_blank">CLIENT PORTAL</a></li>

      <li><a href="
        <?php if ( is_user_logged_in() ) {
               echo 'https://burnsscalorealestate.com/company-portal'; }
              else {
                echo 'https://burnsscalorealestate.com/wp-admin';
               } ?>
        ">EMPLOYEE PORTAL</a></li>

</ul>

<ul class="col-2 float-left" id="employee">
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
<!--
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
-->

</span>
</div>

<!-- END CURRENT USER-->

  <a onclick="footerExpand(), footerListRemove()" class="col-1 float-left"><img class="cursor-pointer" src="<?php echo get_template_directory_uri(); ?>/assets/close-x.svg" alt="X to close"></a>
</div>
  </div>


<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/menu.js" media="(max-width: 1200px)"></script>


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
</script>

<script>
function footerListRemove() {
  var element = document.getElementById("footer-lists");
  element.classList.remove("footer-lists");
}
</script>


<script>
function footerExpand() {
  var element = document.getElementById("footer-expand");
  element.classList.toggle("footer-expand");
}
</script>

<script>
      $(document).ready(function() {
          $("a.scrollLink").click(function(event) {
              event.preventDefault();
              $("html, body").animate({
                  scrollTop: $($(this).attr("href")).offset().top
                }, 500);
            });
        });
</script>
