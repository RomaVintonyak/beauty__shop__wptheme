<?php
/**
 * Template Name: Obmin
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>
      <!--obmin ta povernenya-->
      <section class="obmin">
         <div class="container">
            <div class="obmin__row">
               <div class="obmin__row--title">
                  <h3><?php the_title(); ?></h3>
               </div>
               <div class="obmin__row--block">
                  <?php the_content(); ?>
               </div><!--/.block-->
               <?php
                  if( have_rows('bloky_tekstu') ):
                     while( have_rows('bloky_tekstu') ) : the_row();
               ?>
                  <div class="obmin__row--block">
                     <h3><?php echo get_sub_field('bloky_zagolovkiv_rozdilu'); ?></h3>
                        <?php 
                           if( have_rows('bloky_abzacziv_opysu_povernennya') ):
                              while( have_rows('bloky_abzacziv_opysu_povernennya') ) : the_row();
                        ?>
                           <p><?php echo get_sub_field('kontent_abzacziv'); ?></p>
                        <?php
                              endwhile;
                           endif;
                        ?>
                  </div><!--/.block-->         
               <?php
                     endwhile;
                  endif;
               ?>
               <div class="_contactBlock" style="display:none;">
                  <?php $site_url = get_site_url( 75, 'kontaktna-informacziya'); 
                     echo $site_url;
                  ?>
               </div>
               <script>
                  var contactBlock = $("._contactBlock").text().trim();
                  var contactLink = $("._contactLink").attr("href", contactBlock);
               </script>
            </div><!--/.obmin__row-->
         </div><!--/.container-->
      </section><!--/.obmin-->
      <?php get_footer(); ?>