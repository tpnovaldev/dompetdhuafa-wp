<?php
/**
 * Template Name: Register Template
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
      <h2>Formulir Registrasi</h2>

      <form action="/" class="dd__form">
        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--user"></i>
            <input type="text" name="fullname" placeholder="Nama Lengkap" />
          </div>
        </div>

        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--phone"></i>
            <input type="tel" name="phone" placeholder="No. Ponsel" />
          </div>
        </div>

        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--email"></i>
            <input type="email" name="email" placeholder="Email" />
          </div>
        </div>

        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--password"></i>
            <input type="password" name="password" placeholder="Kata Sandi" />
          </div>

          <div class="dd__check">
            <input type="checkbox" id="togglePassword" />
            <label for="togglePassword">Tampilkan Kata Sandi</label>
          </div>
        </div>

        <div class="dd__group">
          <button class="dd__btn btn--primary" type="submit">Daftar</button>
        </div>
      </form>

      <br />
      
      <p class="dd__muted">
        <b>Sudah punya akun?</b>
        <a href="<?php echo(get_site_url()); ?>/masuk" class="dd__link"><b>Masuk</b></a>
      </p>
    </div>
  </main>
