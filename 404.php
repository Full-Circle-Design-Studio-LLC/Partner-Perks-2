<?php get_header() ?>
</header>
<body>
<?php get_template_part('nav'); ?>
<?php get_template_part('perks-subnav'); ?>

<div class="message-404">
    <div class="message-not-found"><span class="bold">404</span><span>&nbspPAGE NOT FOUND</span></div>
    <a class="pp-button" href="<? echo get_site_url(); ?>"><span class="bold">Back</span><span>&nbspTo Homepage</a>
</div>

<?php get_footer(); ?>
</body>
</html>