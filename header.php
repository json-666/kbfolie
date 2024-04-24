<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php wp_head(); ?>
	<style>
        @media screen and (max-width: 767px){
            #pojo-a11y-toolbar {
                top: 80px !important;
            }
        }
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
        .menu-mobile-open-submenu svg{
            transition: .5s all;
        }
        .menu-mobile-open-submenu.is-active svg{
            transform: rotate(180deg);
        }
	</style>
</head>

<body <?php body_class('position-relative overflow-x-hidden'); ?>>
	<header class="page__header">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
	            <?php get_template_part('template-parts/part-menu-siteidentity'); ?>
	            <?php get_template_part('template-parts/part-menu-navigation'); ?>
                <div class="col d-lg-none order-2"></div>
                <div class="col-auto pe-lg-0 order-2 order-lg-10">
                    <a href="<?php echo get_permalink(218) ?>"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/04/european-union_206593-1.png" alt="eu flag"></a>
                </div>
                <div class="col-auto pe-lg-0 order-2 order-lg-10 d-lg-none">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
	</header>
    <script defer>
        Array.from(document.querySelector('#primary-menu').children).forEach((e)=>{
            if(e.classList.contains('menu-item-has-children')){
                e.classList.add('text-center');
                e.children[0].classList.add('d-inline-block')
                e.children[0].insertAdjacentHTML('afterend', '<span class="ps-3 d-lg-none menu-mobile-open-submenu" style="position: relative;top: -3px;transition: .5s all;" onclick="openSubmenu(this)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16"><path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg></span>')
            }
        });
        document.querySelector('.hamburger').addEventListener('click',(x)=>{
            document.querySelector('.hamburger').classList.toggle('is-active');
            document.querySelector('.page__header__navigation').classList.toggle('is-active');
        });

        function openSubmenu(x){
            console.log(x);
            x.classList.toggle('is-active');
            x.nextElementSibling.classList.toggle('is-active');
        }
    </script>