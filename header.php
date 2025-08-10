<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body 
<?php body_class("bg-gray-100"); ?>>
<header class="bg-red-50">
    <div class="max-w-screen-lg mx-auto">
        mmm
        <?php if(function_exists("the_custom_logo"))
        {
            the_custom_logo();
        }
        ?>
    </div>
</header>
