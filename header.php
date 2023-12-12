<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="logo">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
            ?>
                <a href="<?php echo home_url(); ?>"><span><?php bloginfo('name') ?></span></a>
            <?php
            }
            ?>
        </div>
        <nav class="menu">
            <ul class="menu-items">
                <li><a href="#">Nous Rencontrer</a></li>
                <?php
                if (is_user_logged_in()) {
                    $admin_link  = esc_url(admin_url());
                    echo '<li><a href="' . $admin_link . '">Admin</a></li>';
                }
                ?>
                <li><a href="#">Commander</a></li>
            </ul>
        </nav>
    </header>