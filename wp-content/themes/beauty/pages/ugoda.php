<?php
/**
 * Template Name: Public Oferta
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>
      <!--oferta block-->
      <section class="oferta">
         <div class="container">
            <div class="oferta__row">
               <div class="oferta__row--title text__center">
                  <h2><?php the_field('osnovnyj_zagolovok'); ?></h2>
                  <h3><?php the_content(); ?></h3>
               </div><!--/.title-->
               <div class="oferta__row--text">
               <?php if( have_rows('osnovnyj_blok_tekstu_dogovoru') ): ?>
                  <?php while( have_rows('osnovnyj_blok_tekstu_dogovoru') ): the_row(); 
                     $beforeLink = get_sub_field('tekst_pered_posylannyam');
                     $link = get_sub_field('tekst_v_posylanni');
                     $afterLink = get_sub_field('tekst_pislya_posylannya');
                  ?>
                     <p>
                        <?php echo $beforeLink; ?>
                        <a href="<?php echo get_home_url(); ?>"><?php echo $link; ?></a>.
                        <?php echo $afterLink; ?>
                     </> 
                  <?php endwhile; ?>
               <?php endif; ?>
               </div><!--/.text-->
               <ol class="oferta__row--list">
                  <?php
                     if( have_rows('bloky_dogovoru') ):
                        while( have_rows('bloky_dogovoru') ) : the_row();
                  ?>
                        <li>
                              <?php 
                                 if( have_rows('abzaczy_dogovoru') ):
                                    while( have_rows('abzaczy_dogovoru') ) : the_row();
                              ?>
                                    <p><?php echo get_sub_field('tekst_abzacziv_dogovoru');?></p>
                              <?php
                                    endwhile;
                                 endif;
                              ?>
                        </li>
                     <?php
                           endwhile;
                        endif;
                     ?>
               </ol><!--/.list-->
            </div><!--/.oferta__row-->
         </div><!--/.container-->
      </section><!--/.oferta-->
      <?php get_footer(); ?>