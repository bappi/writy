<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,500,700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg writy_navbar">
        <div class="container">

            <?php

            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if (has_custom_logo()) {
                echo '<a class="navbar-brand" href=' . home_url('/') . '><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
            } else {
                echo '<a href=' . home_url('/') . ' class="navbar-brand"><h1>' . get_bloginfo('name') . '</h1></a>';
            }

            ?>

            <?php
            if (has_nav_menu('top_menu')) : ?>

                <button class="navbar-toggler" id="mobileButton" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php

                    wp_nav_menu(array(
                        'theme_location' => 'top_menu',
                        'menu_id' => 'top_menu',
                        'menu_class' => 'navbar-nav ml-auto'
                    ))
                    ?>
                </div>

            <?php endif; ?>

        </div>
    </nav>
    <!-- Navigattion  -->