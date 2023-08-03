<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<header class="col-12 float-left">

  <button onclick="dropdownMenu()" class="menu-container d-xl-none float-left button-remove-style">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/menu.svg" alt="Dropdown Menu" width="30" height="18">
  </button>