<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header">
        <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/sveston_logo_-removebg-preview.png" alt="Logo" />
        </a>
        <?php wp_nav_menu( array('theme_location' => 'primary_menu', 'menu_class' => 'menu_item') ); ?>
    </header>