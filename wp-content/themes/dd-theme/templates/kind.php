<?php
/**
 * Template Name: Kind Template
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
    
      <div class="dd__banner banner--kind" style="background-image: url(<?php echo(get_template_directory_uri()); ?>/images/no_animal.jpg);">
        <img src="<?php echo get_post_meta($post->ID, 'kind_image', true); ?>" class="animal" alt="<?php echo the_title() ?>" />
        <p style="top: 70%"><?php echo get_post_meta($post->ID, 'kind_desc', true); ?></p>
      </div>

      <div class="dd__content">
        <h2>Pilih <?php echo get_post_meta($post->ID, 'kind_animal', true); ?> untuk Kurban terbaikmu</h2>

        <form action="./pemilik-kurban" class="dd__form">

          <?php
            $anim = get_post_meta($post->ID, 'kind_animal', true);

            switch ($anim == 'Sapi') {
              case "Sapi":
                echo '<div class="dd__group">
                <div class="dd__radio">
                  <input type="radio" id="type1" name="qurban" checked />
                  <label for="type1">
                    <span>
                      1/7 sapi
                      <small>Bobot 250-300kg</small> <em>Rp1.945.000/ekor</em>
                    </span>
                  </label>
                </div>
              </div>
              <div class="dd__group">
                <div class="dd__radio">
                  <input type="radio" id="type2" name="qurban" />
                  <label for="type2">
                    <span>1 sapi <small>Bobot 250-300 kg</small> <em>Rp2.225.000/ekor</em></span>
                  </label>
                </div>
              </div>';
                break;
              default:
                  echo '<div class="dd__group">
                  <div class="dd__radio">
                    <input type="radio" id="type1" name="qurban" checked />
                    <label for="type1">
                      <span>
                        Kambing Standar <small>Bobot 23-25kg</small> <em>Rp1.945.000/ekor</em>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="dd__group">
                  <div class="dd__radio">
                    <input type="radio" id="type2" name="qurban" />
                    <label for="type2">
                      <span>
                        Kambing Medium <small>Bobot 26-28kg</small> <em>Rp2.225.000/ekor</em>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="dd__group">
                  <div class="dd__radio">
                    <input type="radio" id="type3" name="qurban" />
                    <label for="type3">
                      <span>
                        Kambing Premium <small>Bobot > 29kg</small> <em>Rp2.595.000/ekor</em>
                      </span>
                    </label>
                  </div>
                </div>';
              }

          ?>

          <div class="dd__group">
            <button class="dd__btn btn--primary" type="submit">Pilih Kriteria <?php echo get_post_meta($post->ID, 'kind_animal', true); ?></button>
          </div>
        </form>
      </div>

    <?php endwhile; ?>
  
  </main>
