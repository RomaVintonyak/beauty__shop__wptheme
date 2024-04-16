   <?php
   /**
    * Template part for displaying page content
    *
    */
   ?>
   <?php get_header(); ?>
   <?php get_template_part( 'templates/intro'); ?>
   <!--about block-->
   <section class="about__block">
         <div class="container">
         <div class="about__block--row">
            <?php
               $args = array(
                     'posts_per_page'  => 4,
                     'post_type'       => 'post',
                     'post_status'    => 'publish',
                     'orderby' => 'comment_count',
                  );
               ?>
               <?php $mainPost = new WP_Query( $args, 'cat=21' ); ?>
                  <?php if ( $mainPost->have_posts() ) : ?>
                     <?php while ( $mainPost->have_posts() ) : $mainPost->the_post(); ?>
                     <div class="about__content">
                        <div class="about__content--picture">
                           <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="logo" class="img">
                        </div><!--/.picture-->
                        <div class="about__content--text">
                           <h3><?php the_title(); ?></h3>
                           <p><?php the_content(); ?></p>
                        </div><!--/.text-->
                     </div><!--/.about__content-->
                     <?php endwhile; ?>
                     <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
         </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.about__block-->
      <!--main slider-->
      <section class="main__slider">
         <div class="container">
         <div class="main__slider--title">
            <h2><?php the_field('zagolovok_produktiv'); ?></h2>
         </div><!--/.title-->
         <div class="main__slider--row">
            <div class="product__slider" id="productSlider">
               
            
         
            
            
            
            
            
            <div class="product__card" data-cat="shampo">
               <div class="product__card--akcia" style="display: block;">
                  <span>
                     акція
                  </span>
               </div><!--/.akcia-->
               <div class="product__card--img">
                  <a href="pages/tovar.html">
                     <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.webp" type="image/webp">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.jpg" alt="shampo" class="img">
                     </picture>
                  </a>
               </div><!--/.img-->
               <div class="product__card--title">
                  <p>
                     Шампунь для всіх типів шкіри 
                     DAILY ACT ALL SKIN TYPES
                  </p>
               </div><!--/.title-->
               <div class="product__card--price">
                  <span data-price="560">560</span>
                  <span>грн</span>
               </div><!--/.price-->
               <div class="product__card--btn">
                  <button type="button" id="buyBtn">Купити</button>
               </div><!--/.btn-->
               </div><!--/.product__card-->
               <div class="product__card" data-cat="shampo">
               <div class="product__card--akcia" style="display: block;">
                  <span>
                     акція
                  </span>
               </div><!--/.akcia-->
               <div class="product__card--img">
                  <a href="pages/tovar.html">
                     <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.webp" type="image/webp">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.jpg" alt="shampo" class="img">
                     </picture>
                  </a>
               </div><!--/.img-->
               <div class="product__card--title">
                  <p>
                     Шампунь для всіх типів шкіри 
                     DAILY ACT ALL SKIN TYPES
                  </p>
               </div><!--/.title-->
               <div class="product__card--price">
                  <span data-price="560">560</span>
                  <span>грн</span>
               </div><!--/.price-->
               <div class="product__card--btn">
                  <button type="button" id="buyBtn">Купити</button>
               </div><!--/.btn-->
               </div><!--/.product__card-->
               <div class="product__card" data-cat="shampo">
               <div class="product__card--akcia" style="display: block;">
                  <span>
                     акція
                  </span>
               </div><!--/.akcia-->
               <div class="product__card--img">
                  <a href="pages/tovar.html">
                     <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.webp" type="image/webp">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.jpg" alt="shampo" class="img">
                     </picture>
                  </a>
               </div><!--/.img-->
               <div class="product__card--title">
                  <p>
                     Шампунь для всіх типів шкіри 
                     DAILY ACT ALL SKIN TYPES
                  </p>
               </div><!--/.title-->
               <div class="product__card--price">
                  <span data-price="560">560</span>
                  <span>грн</span>
               </div><!--/.price-->
               <div class="product__card--btn">
                  <button type="button" id="buyBtn">Купити</button>
               </div><!--/.btn-->
               </div><!--/.product__card-->
               <div class="product__card" data-cat="shampo">
               <div class="product__card--akcia" style="display: block;">
                  <span>
                     акція
                  </span>
               </div><!--/.akcia-->
               <div class="product__card--img">
                  <a href="pages/tovar.html">
                     <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.webp" type="image/webp">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.jpg" alt="shampo" class="img">
                     </picture>
                  </a>
               </div><!--/.img-->
               <div class="product__card--title">
                  <p>
                     Шампунь для всіх типів шкіри 
                     DAILY ACT ALL SKIN TYPES
                  </p>
               </div><!--/.title-->
               <div class="product__card--price">
                  <span data-price="560">560</span>
                  <span>грн</span>
               </div><!--/.price-->
               <div class="product__card--btn">
                  <button type="button" id="buyBtn">Купити</button>
               </div><!--/.btn-->
               </div><!--/.product__card-->
               <div class="product__card" data-cat="shampo">
               <div class="product__card--akcia" style="display: block;">
                  <span>
                     акція
                  </span>
               </div><!--/.akcia-->
               <div class="product__card--img">
                  <a href="pages/tovar.html">
                     <picture>
                     <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.webp" type="image/webp">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main_slider/shampo.jpg" alt="shampo" class="img">
                     </picture>
                  </a>
               </div><!--/.img-->
               <div class="product__card--title">
                  <p>
                     Шампунь для всіх типів шкіри 
                     DAILY ACT ALL SKIN TYPES
                  </p>
               </div><!--/.title-->
               <div class="product__card--price">
                  <span data-price="560">560</span>
                  <span>грн</span>
               </div><!--/.price-->
               <div class="product__card--btn">
                  <button type="button" id="buyBtn">Купити</button>
               </div><!--/.btn-->
               </div><!--/.product__card-->

         
            </div><!--/.product__slider-->
         </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.main__slider-->
         <!--about us section-->
      <section class="about__us">
         <div class="container">
         <div class="aout__us--row">
            <div class="about__title">
               <h2><?php the_field('zagolovok_opysu'); ?></h2>
            </div><!--/.about__title-->
            <?php
               if( have_rows('bloky_opysu') ):
                  while( have_rows('bloky_opysu') ) : the_row();
            ?>
            <div class="block__text">
               <div class="block__text--title">
                  <h3><?php echo get_sub_field('zagolovok_bloku_opysu'); ?></h3>
               </div><!--/.title-->
               <div class="block__text--text">
                  <?php 
                     if( have_rows('tekst_bloku_opysu') ):
                        while( have_rows('tekst_bloku_opysu') ) : the_row();
                  ?>
                     <p><?php echo get_sub_field('tekst_rozdilu_bloku'); ?></p>
                  <?php
                        endwhile;
                     endif;
                  ?>
               </div><!--/.text-->
            </div><!--/.block__text-->
            <?php
                  endwhile;
               endif;
            ?>
         </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.about__us-->
      <?php get_footer(); ?>