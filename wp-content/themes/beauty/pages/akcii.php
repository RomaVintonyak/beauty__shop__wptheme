<?php
/**
 * Template Name: Akcii
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/intro'); ?>
      <!--akcii block-->
      <section class="promotion">
         <div class="container">
            <div class="promotion__row">
               <div class="promotion__row--title">
                  <h2><?php the_title(); ?></h2>
               </div><!--/.title-->
               <div class="promotion__row--content">
                  <?php the_content(); ?>
               </div><!--/.content-->
            </div><!--/.promotion__row-->
         </div><!--/.container-->
      </section><!--/.promotion-->
<?php get_footer(); ?>