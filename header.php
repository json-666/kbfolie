<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
	<style>
        img{
            max-width: 100%;
        }
        @font-face {
            font-family: 'Montserrat';
            src: url(<?php echo get_template_directory_uri() ?>/assets/fonts/Montserrat-VariableFont_wght.woff2) format('woff2');
        }
        body{
            font-family: "Montserrat", serif;
        }
	</style>
</head>

<body <?php body_class('position-relative overflow-x-hidden'); ?>>
	<header class="page__header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
	            <?php get_template_part('template-parts/part-menu-siteidentity'); ?>
	            <?php get_template_part('template-parts/part-menu-navigation'); ?>
                <div class="col-auto">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/04/european-union_206593-1.png" alt="eu flag">
                </div>
            </div>
        </div>
	</header>