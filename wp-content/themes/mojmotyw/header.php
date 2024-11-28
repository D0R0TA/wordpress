<!DOCTYPE html>
<html lang="pl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<div class="container-fluid db-main-header">
    <div class="container">
        <div class = "db-logo">
        <?php
        if (function_exists('the_custom_logo')){
        the_custom_logo();
        }
        ?>
        </div>
        <div class="db-main-menu">
        <?php wp_nav_menu( array('theme_location'=>'primary') ); ?>
        <div>
    </div>
</div>