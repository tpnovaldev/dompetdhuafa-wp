<?php
/**
 * Template Name: Login Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dompet_Dhuafa
 */

get_header();
?>

  <main class="dd__main">
    <div class="dd__banner banner--sm">
      <img src="<?php echo(get_template_directory_uri()); ?>/images/no_animal.jpg" alt="no animal" />
    </div>

    <div class="dd__content">
      <h2>Selamat Datang Kembali!</h2>

      <form action="/" class="dd__form">
        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--email"></i>

            <input type="email" name="email" placeholder="Email" />
          </div>
        </div>

        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--password"></i>
            <input type="password" name="password" placeholder="Kata sandi" />
          </div>

          <div class="dd__check">
            <input type="checkbox" id="togglePassword" />

            <label for="togglePassword">Tampilkan Kata Sandi</label>
          </div>
        </div>

        <div class="dd__group">
          <button class="dd__btn btn--primary" type="submit">Masuk</button>
        </div>

        <br />
        
        <a href="#" class="dd__link"><b>Lupa Kata Sandi?</b></a>
      </form>

      <small class="dd__info">Atau melalui media sosial</small>
      
      <div class="dd__social">
        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/icons/google.svg" alt="google" /></a>

        <a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/icons/facebook.svg" alt="facebook" /></a>
      </div>

      <p class="dd__muted">
        <b>Belum punya akun?</b>

        <a href="<?php echo(get_site_url()); ?>/daftar" class="dd__link"><b>Daftar Sekarang</b></a>
      </p>
    </div>
  </main>
