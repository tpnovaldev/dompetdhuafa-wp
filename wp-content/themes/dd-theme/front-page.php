<?php
/**
 * The front page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dompet_Dhuafa
 */

get_header();
?>

	<main id="primary" class="dd__main">
    <div class="dd__banner">
      <img src="<?php echo(get_template_directory_uri()); ?>/images/welcome.jpg" alt="welcome" />
    </div>

    <div class="dd__content">
      <h2>Assalamualaikum...</h2>
      
      <p>Selamat datang di Program Tabungan Kurban Dompet Dhuafa</p>
      
      <br />
      
      <a href="<?php echo(get_site_url()); ?>/masuk" class="dd__btn btn--primary">Masuk</a>
      
      <br />
      
      <a href="<?php echo(get_site_url()); ?>/daftar" class="dd__btn btn--secondary">Daftar</a>
      
      <small class="dd__info">Atau melalui media sosial</small>

      <div class="dd__social">
        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/icons/google.svg" alt="google" /></a>

        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/icons/facebook.svg" alt="facebook" /></a>
      </div>
    </div>
	</main><!-- #main -->
