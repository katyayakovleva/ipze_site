<?php
/**
 * Template Name: Сторінка з посиланнями
 *
 * @package IPZE
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

    <main id="main-page-tile " class="container enter-page">

        <?php
            get_template_part( 'template-parts/content', 'main-title' );
            get_template_part( 'template-parts/content', 'links' );
        ?>

    </main><!-- #main -->

<?php
get_footer();
