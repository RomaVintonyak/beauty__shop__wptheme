   <!DOCTYPE html>
   <html <?php language_attributes(); ?>>
   <head>
   <meta charset="<?php bloginfo('charset'); ?>" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
   <meta name="description" content="<?php bloginfo('description'); ?>" />
   <meta name="keywords" content="<?php the_field('klyuchovi_frazy_ceo', 'option'); ?>" />
   <meta name="google" content="notranslate" />
   <meta name="author" content="Roman Coder" />
   <meta name="robots" content="index, follow" />
   <!--fav icon-->
   <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
   <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
   <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
   <meta name="msapplication-TileColor" content="#2b5797">
   <meta name="theme-color" content="#ffffff">
   <!--disable format detection (iPhone / IPod / IPad) -->
   <meta name="format-detection" content="telephone=no" />
   <!--BlackBerry-->
   <meta http-equiv="x-rim-auto-match" content="none" />
   <title><?php bloginfo('name'); ?> &mdash; 
   <?php if(is_404()){
      echo 'Такої сторінки не існує';
   }else{
      the_title();
   }
   ?>
   </title>
   <?php wp_head(); ?>
   </head>
   <body>
   <!--header block-->
   <header class="header" id="header">
      <!--header__baner-->
      <section class="header__baner">
         <div class="container">
         <div class="header__baner--row">
            <h3>
               <?php the_field('diyucha_akcziya', 'option'); ?>
            </h3>
         </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.header__baner-->
      <!--header menu-->
      <nav class="header__menu">
         <div class="container">
         <div class="header__menu--row">
         <?php 
                  wp_nav_menu(array(
                  'theme_location'  => 'primary',
                  'menu'            => 'Menu Header', 
                  'container'       => 'ul',
                  'menu_class'      => 'nav__menu', 
                  'echo'            => true,
                  'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                  'depth'           => 0,
                  ));
               ?>
            <div class="nav__login">
               <div class="burger__btn">
               <span></span>
               <span></span>
               <span></span>
               <span></span>
               </div><!--/.burger-->
               <a class="_popup nav__login--popup" href="#">
               <i class="fas fa-user"></i>
               <span><?php the_field('login_na_sajti', 'option'); ?></span>
               </a>
            </div><!--/.nav__login-->
         </div><!--/.row-->
         </div><!--/.container-->
      </nav><!--/.header__menu-->
      <!--header brand-->
      <section class="header__brand">
         <div class="container">
         <div class="header__brand--row">
            <div class="navbar__brand">
               <a href="<?php echo home_url(); ?>">
                  <img src="<?php the_field('logo_kompaniyi', 'option'); ?>" alt="logo" class="img">
               </a>
            </div><!--/.navbar__brand-->
            <div class="navbar__content">
               <div class="navbar__content--phone">
               <i class="fas fa-phone-square-alt"></i>
               <a href="tel:+<?php the_field('osnovnyj_telefon', 'option'); ?>" >
                  <?php the_field('osnovnyj_telefon', 'option'); ?>
               </a>
               </div><!--/.phone-->
               <div class="navbar__content--time">
               <p>
                  <i class="fas fa-clock"></i>
                  <span><?php the_field('nazva_bloku_grafik_roboty', 'option'); ?></span>
               </p>
               <?php
                  if( have_rows('grafik_roboty', 'option') ):
                     while( have_rows('grafik_roboty', 'option') ) : the_row();
                     $sub_value = get_sub_field('robochyj_diapazon');
               ?>
                     <p><?php echo $sub_value; ?></p>
               <?php
                     endwhile;
                  endif;
               ?>
               </div><!--/.time-->
               <a href="pages/basket.html" class="navbar__content--basket">
               <i class="fas fa-shopping-cart"></i>
               <p id="basketCount">00</p>
               </a><!--/.basket-->
            </div><!--/.navbar__content-->
         </div><!--/.row-->
         </div><!--/.container-->
      </section><!--header__brand-->
      <!--header cat-->
      <section class="header__product">
         <div class="container">
         <div class="header__product--row">
            <?php
            $args = array(
               'taxonomy' => 'product_cat',
               'hide_empty' => false,
            );
            $product_categories = get_terms( $args );
            $count = count($product_categories);
            if ( $count > 0 ){
               echo '<ul class="product__menu">';
               foreach ( $product_categories as $product_category ) {
                  echo '<li class="product__menu--item">';
                  echo '<a href="' . get_term_link( $product_category ) . '"' . ' class="product__menu--link" data-filter="'. $product_category->slug . '">' . $product_category->name . '</a>';
                  echo '</li>';
               }
               echo '</ul>';
            }
            ?>
         </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.header__product-->
   </header><!--/.header-->
   <main>