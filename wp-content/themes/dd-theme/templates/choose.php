<?php
/**
 * Template Name: Choose Template
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


if(isset($_POST['qurban'])) {

  $answer = $_POST['qurban'];

  if ($answer == "kambing") {          
    header("location: ../kambing");
    die();
  } else {
    header("location: ../sapi");
  }

  exit;
  
}

get_header();
?> 

  <main class="dd__main">
    <div class="dd__banner">
      <img src="<?php echo(get_template_directory_uri()); ?>/images/qurban.jpg" alt="kurban" />
    </div>

    <div class="dd__content">
      <h2>Pilih Jenis Hewan Kurban</h2>

      <form action="" method="post" class="dd__form">
        <div class="dd__group">
          <div class="dd__radio">
            <input type="radio" id="goat" name="qurban" value="kambing" checked />
            <label for="goat">Kambing</label>
          </div>
        </div>

        <div class="dd__group">
          <div class="dd__radio">
            <input type="radio" id="cow" name="qurban" value="sapi" />
            <label for="cow">Sapi</label>
          </div>
        </div>
        
        <div class="dd__group">
          <button class="dd__btn btn--primary" type="submit">Pilih Hewan</button>
        </div>
      </form>
    </div>
  </main>
