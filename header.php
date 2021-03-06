<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IPZE
 */

?>
<!doctype html>
<html lang="ua">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        input[type="search"]::-webkit-search-cancel-button {
            background: url("<?php echo get_template_directory_uri(); ?>/assets/img/icons/eva_close-fill.svg");

        }
    </style>
    <?php wp_head(); ?>   
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();?>
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#primary">--><?php //esc_html_e( 'Skip to content', 'ipze' ); ?><!--</a>-->
    <header>
        <div class="container">
            <div class="row logo-row">
                <div class="col-sm-12">
                    <div class="">
                        <a href="<?php echo language_variants(home_url( '/' ), home_url( '/en/' )); ?>" rel="home" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ipze_logo.svg" alt="ІПЗЕ">
                        </a>
                    </div>
                    <div class="dep_name">
                        <?php
                            echo language_variants("Кафедра <b>і</b>нженерії <b>п</b>рограмного <br><b>з</b>абезпечення в <b>е</b>нергетиці", "Kafedra <b>і</b>нженерії <b>п</b>рограмного <br><b>з</b>абезпечення в <b>е</b>нергетиці")
                        ?>
                        <!-- Кафедра <b>і</b>нженерії <b>п</b>рограмного <br><b>з</b>абезпечення в <b>е</b>нергетиці -->
                    </div>
                    <?php 
                       if ( !empty($_GET['language']) ) {
                        $_COOKIE['language'] = $_GET['language'] === 'ua' ? 'ua' : 'en';
                    } else {
                        $_COOKIE['language'] = 'en';
                    }
                    setcookie('language', $_COOKIE['language']);
                    ?>
                    <div class="lans">
                        <span class="lans-text">
                            <a href= "<?php echo to_ukranian();?>" class="">Укр.</a>
                            <span class="stick">|</span>
                            <a href= "<?php echo to_english(); ?>" class="">Eng.</a>
                    </span>
                    </div>
                    <div id="header-burger"class="header_burger">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row menu-row">
<!--                <div class="col-md-2 col-name">-->
<!--                    <a href="" class="name-a">-->
<!--                        <h1>                        КАФЕДРА ІПЗЕ ТЕФ<br> КПІ <span>ім.</span> І. СІКОРСЬКОГО                                            </h1>                    </a>-->
<!--                </div>-->
                <div class="col-md-11 menu_back">
                    <nav id="site-navigation" class="head_menu">
                      
                        <span class="burger_lans lans-text">
                            <a href= "<?php echo to_ukranian();?>" class="">Укр.</a>
                            <span class="stick">|</span>
                            <a href= "<?php echo to_english(); ?>" class="">Eng.</a>
                        </span>
                        <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ipze' ); ?></button> -->
                        <?php
                        if(url_end_with_en(get_page_url())){
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu-eng',
                                    'menu_id'        => 'primary-menu-eng',
                                    'depth'          => '3'
                                )
                            );
                        }
                        else{
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'menu_id'        => 'primary-menu',
                                    'depth'          => '3'
                                )
                            );
                        }
                        
                        ?>
                        <div class="burger_soc-menu">
                            <i id="search-icon-burger" class="fa fa-search"></i> 
                            <a href=""><i class="fab fa-telegram-plane"></i></a>
                            <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <form id="search-form-burger" class="search-form-burger" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="search" class="search-field" name="s" placeholder="Пошук..." value="<?php echo get_search_query(); ?>">
                        </form>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="col-md-1 soc-menu">
                    <i id="search-icon" class="fa fa-search"></i>
                    <a href=""><i class="fab fa-telegram-plane"></i></a>
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div >
                <form id="search-form_menu" class="search-form_menu" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" class="search-field" name="s" placeholder="Пошук..." value="<?php echo get_search_query(); ?>">
                </form>
            </div>
           
        </div>
        
        
    </header>


