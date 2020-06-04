<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>


<title><?php bloginfo('name'); ?></title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<link href="wp-content/themes/Commercial_proposal/assets/css/media.css" rel="stylesheet" type="text/css" />
<link href="wp-content/themes/Commercial_proposal/assets/css/style.css" rel="stylesheet" type="text/css" />
<link href="wp-content/themes/Commercial_proposal/assets/css/event.css" rel="stylesheet" type="text/css" />
<link href="wp-content/themes/Commercial_proposal/assets/css/grid.css" rel="stylesheet" type="text/css" />

<?//php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
<?php do_action( 'onepress_before_site_start' ); ?>

    <div id="container">
        <div id="navbar" class="">
            <div class="two_columns">
                <div id="logo" class="logo">
                    <img src="wp-content/themes/Commercial_proposal/assets/images/logo.png" alt="">
                    <p>Папа Карло</p>
                </div>
                <div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php if ( have_posts() ) : ?>

					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );
						?>

					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
            </div>

            <div id="feedback" class="chetire_clomns">
                <div>

                </div>
                <div id="" class="two_columns">
                    <div class="shift_right">
                        <img class="icons" src="wp-content/themes/Commercial_proposal/assets/images/icons/adrase.png" alt="">
                    </div>
                    <div class="shift_left">
                        г. Энск, ул., Энская, д., ХХ, кв., ХХ.
                    </div>
                </div>
                <div id="" class="two_columns">
                    <div class="shift_right">
                        <img class="icons" src="wp-content/themes/Commercial_proposal/assets/images/icons/tel.png" alt="">
                    </div>
                    <div class="shift_left">
                        Позвоните нам
                        <a> +7 777 777 77 77</a>
                    </div>
                </div>
                <div id="" class="two_columns">
                    <div class="shift_right">
                        <img class="icons" src="wp-content/themes/Commercial_proposal/assets/images/icons/main.png" alt="">
                    </div>
                    <div class="shift_left">
                        Написать нам
                        <a>ndex@yandex.ru</a>
                    </div>
                </div>
            </div>
        </div>
        <header class="one_offset">
            <div class="tatle_header offset1">
                <p>
                    <h1>
                        Создаём приятную атмосферу
                    </h1>
                </p>
                <p>
                    <h2>
                        только в мастерской "Папа Карло"
                    </h2>
                </p>
                <p>
                    <h1>

                    </h1>
                </p>
                <p>
                    <h2>
                        работаем с 09.00 до 19.00
                    </h2>
                </p>
                <p>
                    <h2>
                        для уюта Вашего ребёнка
                    </h2>
                </p>
            </div>
            <div id="" class="offset2 himages">
                <img src="wp-content/themes/Commercial_proposal/assets/images/chastota-smeny-odnorazovogo-podguznika копия.png">
            </div>
            <div class="chetire_clomns offset3">
                <div></div>
                <div>
                    <img class="ti_img_300" src="wp-content/themes/Commercial_proposal/assets/images/krovatka_1.jpg">
                </div>
                <div>
                    <img class="ti_img_300" src="wp-content/themes/Commercial_proposal/assets/images/krovatka_3.jpg">
                </div>
                <div>
                    <img class="ti_img_300" src="wp-content/themes/Commercial_proposal/assets/images/krovatka_2 .jpg">
                </div>
            </div>
        </header>

<div id="page" class="hfeed site">
	
    <?php
      //onepress_header();
    ?>
