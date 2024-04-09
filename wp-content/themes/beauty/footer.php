   </main>
   <!--footer-->
   <footer class="footer">
      <div class="container">
         <div class="footer__row">
         <div class="footer__brand">
            <div class="footer__brand--logo">
            <?php
                  if( have_rows('rozdilne_logo', 'option') ):
                     while( have_rows('rozdilne_logo', 'option') ) : the_row();
                     $sub_value = get_sub_field('logo_tekst');
               ?>
                     <p><?php echo $sub_value; ?></p>
               <?php
                     endwhile;
                  endif;
               ?>
            </div><!--/.img-->
            <div class="footer__brand--copy">
               &copy; 2023 &mdash; <script>document.write(new Date().getFullYear());</script> <?php the_field('nazva_magazynu', 'option'); ?><br>
               <?php the_field('zahyst_vid_kopiyuvannya', 'option'); ?>
            </div><!--/.copy-->
         </div><!--/.footer__brand-->
         <div class="footer__catalog">
            <div class="footer__catalog--title">
               <h3><?php the_field('blok_katalog', 'option'); ?></h3>
            </div><!--/.title-->
            <ul class="footer__catalog--menu">
               <li>
               <a href="pages/catalog.html">Шампуні</a>
               </li>
               <li>
               <a href="pages/catalog.html">Маски</a>
               </li>
               <li>
               <a href="pages/catalog.html">Кондиціонери</a>
               </li>
               <li>
               <a href="pages/catalog.html">Термозахист</a>
               </li>
               <li>
               <a href="pages/catalog.html">Набори</a>
               </li>
               <li>
               <a href="pages/catalog.html">Трихологія</a>
               </li>
               <li>
               <a href="pages/catalog.html">Ампули</a>
               </li>
               <li>
               <a href="pages/catalog.html">Чоловікам</a>
               </li>
               <li>
               <a href="pages/catalog.html">Гребінці</a>
               </li>
               <li>
               <a href="pages/catalog.html">Косметика</a>
               </li>
            </ul><!--/.menu-->
         </div><!--/.footer__catalog-->
         <div class="footer__menu">
            <div class="footer__menu--title">
               <h3><?php the_field('blok_menyu', 'option'); ?></h3>
            </div><!--/.title-->
            <?php 
                  wp_nav_menu(array(
                  'theme_location'  => 'secondary',
                  'menu'            => 'Menu Footer', 
                  'container'       => 'ul',
                  'menu_class'      => 'footer__menu--menu', 
                  'echo'            => true,
                  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                  'depth'           => 0,
                  ));
               ?>
         </div><!--/.footer__menu-->
         <div class="footer__contact">
            <div class="footer__contact--title">
               <h3><?php the_field('blok_kontakty', 'option'); ?></h3>
            </div><!--/.title-->
            <div class="footer__contact--adres">
               <div class="adres__phone">
               <i class="fas fa-phone-square-alt"></i>
               <a href="tel:+<?php the_field('osnovnyj_telefon', 'option'); ?>"><?php the_field('osnovnyj_telefon', 'option'); ?></a>
               </div><!--/.adres__phone-->
               <div class="adres__telegram">
               <i class="fab fa-viber"></i>
               <a href="viber://chat?number=%2B<?php the_field('vajber', 'option'); ?>"><?php the_field('vajber', 'option'); ?></a>
               </div><!--/.adres__telegram-->
               <div class="adres__mail">
               <i class="fas fa-envelope"></i>
               <a href="mailto:<?php the_field('elektronna_adresa', 'option'); ?>"><?php the_field('elektronna_adresa', 'option'); ?></a>
               </div><!--/.adres__mail-->
               <div class="adres__map">
               <i class="fas fa-map-marker-alt"></i>
               <span><?php the_field('adresa_kompaniyi', 'option'); ?></span>
               </div><!--/.adres__map-->
               <div class="adres__social">
               <p><?php the_field('blok_socz_merezhi', 'option'); ?></p>
               <?php
                  if( have_rows('soczilni_merezhi', 'option') ):
                     while( have_rows('soczilni_merezhi', 'option') ) : the_row();
                     $soc_icon = get_sub_field('ikonka_merezhi');
                     $soc_link = get_sub_field('posylannya_na_merezhu');
               ?>
               <a href="<?php echo $soc_link; ?>" target="_blank">
                  <?php echo $soc_icon; ?>
               </a>
               <?php
                     endwhile;
                  endif;
               ?>
               </div><!--/.adres__social-->
            </div><!--/.adres-->
         </div><!--/.footer__contact-->
         </div><!--/.footer__row-->
      </div><!--/.container-->
   </footer><!--/.footer-->
   <!--back top btn-->
   <div class="back__top" id="backTop">
      <div class="back__top--content">
         <span><?php the_field('knopka_skrolu_na_goru', 'option'); ?></span>
         <i class="fas fa-chevron-up"></i>
      </div><!--content-->
   </div><!--/.back__top-->
   <?php get_template_part( 'templates/modal'); ?>
   <?php wp_footer(); ?>
   </body>
   </html>