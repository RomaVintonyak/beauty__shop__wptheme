<?php
/**
 * Template Name: Dostavka & Oplata
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>
      <!--oplata dostavka block-->
      <section class="dostavka">
         <div class="container">
            <div class="dostavka__row">
               <div class="dostavka__title">
                  <h3><?php the_title(); ?></h3>
               </div><!--/.dostavka__title-->
               <div class="dostavka__suptitle">
                  <h3><?php the_content(); ?></h3>
               </div><!--/.dostavka__suptitle-->
               <?php
                  if( have_rows('sposib_dostavky') ):
                     while( have_rows('sposib_dostavky') ) : the_row();
               ?>
               <div class="dostavka__block">
                  <div class="dostavka__block--title">
                     <picture>
                        <source srcset="<?php echo get_sub_field('ikonka_bloku_webp'); ?>" type="image/webp">
                        <img src="<?php echo get_sub_field('ikonka_bloku_jpg'); ?>" alt="logo" class="img">
                     </picture>
                     <span><?php echo get_sub_field('zagolovok_bloku_dostavky'); ?></span>
                  </div><!--/.title-->
                  <div class="dostavka__block--text">
                        <?php 
                           if( have_rows('blok_opysu_dostavky') ):
                              while( have_rows('blok_opysu_dostavky') ) : the_row();
                        ?>
                           <p><?php echo get_sub_field('paragraf_opysu_dostavky'); ?></p>
                        <?php
                                 endwhile;
                           endif;
                        ?>
                  </div><!--/.text-->
               </div><!--/.block-->
               <?php
                     endwhile;
                  endif;
               ?>
               <div class="oplata__block">
                  <div class="oplata__block--title">
                     <h3><?php the_field('zagolovok_bloku_oplaty'); ?></h3>
                  </div><!--/.title-->
                  <div class="oplata__block--text">
                           <?php
                              if( have_rows('bloky_sposobiv_oplaty') ):
                              while( have_rows('bloky_sposobiv_oplaty') ) : the_row();
                           ?>
                           <p>
                              <?php echo get_sub_field('paragraf_sosobiv_oplaty'); ?>
                                 <?php 
                                    if( have_rows('ikonky_oplaty') ):
                                       while( have_rows('ikonky_oplaty') ) : the_row();
                                 ?>
                                    <img src="<?php echo get_sub_field('ikonky_oplaty_minyatyura'); ?>" alt="card" class="img">
                                 <?php
                                       endwhile;
                                 endif;
                                 ?>
                           </p>
                           <?php
                                 endwhile;
                              endif;
                           ?>
                  </div><!--/.text-->
               </div><!--/.oplata__block-->
            </div><!--/.dostavka__row-->
         </div><!--/.container-->
      </section><!--/.dostavka-->
<?php get_footer(); ?>