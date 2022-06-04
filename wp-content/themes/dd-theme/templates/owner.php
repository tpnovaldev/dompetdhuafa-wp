<?php
/**
 * Template Name: Owner Template
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
    <div class="dd__banner banner--kind" style="background-image: url(<?php echo(get_template_directory_uri()); ?>/images/no_animal.jpg);">
      <img src="<?php echo(get_template_directory_uri()); ?>/images/cow.png" class="animal" alt="cow" />
    </div>

    <div class="dd__content">
      <h2>Masukan Nama Untuk Siapa Kamu Berkurban</h2>

      <p>Kamu bisa memasukan maksimal 7 Nama</p>
      
      <form action="/" class="dd__form">
        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--user"></i>
            <input type="text" name="owner" placeholder="Kurban Atas Nama 1" />
          </div>
        </div>

        <div class="dd__group">
          <div class="dd__input">
            <i class="dd__icon icon--user"></i>
            <input type="text" name="owner" placeholder="Kurban Atas Nama 2" />
          </div>
        </div>

        <div class="dd__group">
          <button type="button" class="dd__add">
            <i class="dd__icon icon--add"></i>
            <span>Tambah Atas Nama Kurban</span>
          </button>
        </div>

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <div class="dd__group">
          <button class="dd__btn btn--primary" type="submit">Pelihara Sekarang</button>
        </div>
      </form>
    </div>
  </main>
