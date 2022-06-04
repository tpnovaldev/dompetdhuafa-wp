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

  <script>

    var isLoggedIn = false;

    // This line checks if user is logged in and set isLoggedIn variable
    if (document.body.classList.contains('logged-in')) { isLoggedIn = true; } 

    if (isLoggedIn == true) {
      // If the customer is logged into WordPress, redirect the user to another page
      window.location.pathname = `dompetdhuafa-wp/pilih-hewan-kurban/`;
    }

    // Toggle Password 
    const passwordToggle = document.querySelector('.js-password-toggle')

    passwordToggle.addEventListener('change', function() {
      const password = document.querySelector('.js-password')
      
      if (password.type === 'password') {
        password.type = 'text'
      } else {
        password.type = 'password'
      }
      
      password.focus()
    })
    
  </script>
  
  <main class="dd__main">
    <div class="dd__banner banner--sm">
      <img src="<?php echo(get_template_directory_uri()); ?>/images/no_animal.jpg" alt="no animal" />
    </div>

    <div class="dd__content">
      <h2>Selamat Datang Kembali!</h2>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; ?>

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
