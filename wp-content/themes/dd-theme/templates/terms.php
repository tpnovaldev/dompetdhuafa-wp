<?php
/**
 * Template Name: Terms Template
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

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
    
      <div class="dd__content">
        <div class="dd__inner_content">
          <h3><b><?php the_title() ?></b></h3>

          <div class="dd__scrollable">

            <?php the_content(); ?>
          
          </div>
        </div>

        <br />
        
        <div class="dd__check check--center">
          <input type="checkbox" id="agree" />
          <label for="agree" style="justify-content: center">Setuju</label>
        </div>
        
        <br />
        <br />

        <button class="dd__btn btn--primary" type="button">Pelihara Sekarang</button>

      <?php endwhile; ?>

    </div>
  </main>
