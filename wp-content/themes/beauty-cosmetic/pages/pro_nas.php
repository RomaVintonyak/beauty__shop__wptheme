<?php
/**
 * Template Name: About Us
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>
      <!--about me block-->
      <section class="about__me">
         <div class="container">
            <div class="about__me--row">
               <div class="me__title">
                  <h3><?php the_field('zagolovok_pro_nas'); ?></h3>
               </div><!--/.me__title-->
               <div class="me__text">
                  <p><?php the_content(); ?></p>
               </div><!--/.me__text-->
               <?php
                  if( have_rows('spysky_pro_nas') ):
                     while( have_rows('spysky_pro_nas') ) : the_row();
               ?>
               <ul class="me__list">
                  <p class="text__center"><?php echo get_sub_field('zagolovok_bloku_pro_nas'); ?></p>
                        <?php 
                           if( have_rows('abzaczy_bloku_pro_nas') ):
                              while( have_rows('abzaczy_bloku_pro_nas') ) : the_row();
                        ?>
                           <li>
                              <p><?php echo get_sub_field('tekst_abzaczu_spysku'); ?></p>
                           </li>
                        <?php
                                 endwhile;
                           endif;
                        ?>
               </ul><!--/.me__list-->
               <?php
                     endwhile;
                  endif;
               ?>
               <div class="me__text">
                  <p>
                     <span>
                        <?php the_field('dodatkovyj_tekst_na_storinczi'); ?>
                     </span>
                  </p>
               </div><!--/.me__text-->
            </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.about__me-->
      <?php get_footer(); ?>