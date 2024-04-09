<?php
/**
 * Template Name: Catalog
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <!-- Font Awesome -->
   <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"/>-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
   <!--custom styles-->
   <link rel="stylesheet" href="../css/style.min.css" />
   <meta name="description" content="Магазин косметики" />
   <meta name="keywords" content="" />
   <meta name="google" content="notranslate" />
   <meta name="author" content="Roman Coder" />
   <meta name="robots" content="index, follow" />
   <!--fav icon-->
   <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
   <link rel="manifest" href="../img/favicon/site.webmanifest">
   <link rel="mask-icon" href="../img/favicon/safari-pinned-tab.svg" color="#5bbad5">
   <meta name="msapplication-TileColor" content="#2b5797">
   <meta name="theme-color" content="#ffffff">
   <!--disable format detection (iPhone / IPod / IPad) -->
   <meta name="format-detection" content="telephone=no" />
   <!--BlackBerry-->
   <meta http-equiv="x-rim-auto-match" content="none" />
   <title>Beauty&commat; &mdash; Каталог товарів</title>
</head>
<body>
   <!--header block-->
   <header class="header" id="header">
      <!--header__baner-->
      <section class="header__baner">
         <div class="container">
            <div class="header__baner--row">
               <h3>
                  Купуй одним чеком на суму від 2500 грн. 
                  та отримуй подарунок 🎁 на суму від 250 грн.
               </h3>
            </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.header__baner-->
      <!--header menu-->
      <nav class="header__menu">
         <div class="container">
            <div class="header__menu--row">
               <ul class="nav__menu">
                  <li class="nav__menu--item">
                     <a href="../index.html" class="nav__menu--link">Головна</a>
                  </li>
                  <li class="nav__menu--item">
                     <a href="catalog.html" class="nav__menu--link active">Каталог</a>
                  </li>
                  <li class="nav__menu--item">
                     <a href="pro_nas.html" class="nav__menu--link">Про нас</a>
                  </li>
                  <li class="nav__menu--item">
                     <a href="dostavka.html" class="nav__menu--link">Оплата і доставка</a>
                  </li>
                  <li class="nav__menu--item">
                     <a href="obmin.html" class="nav__menu--link">Обмін та повернення</a>
                  </li>
                  <li class="nav__menu--item">
                     <a href="ugoda.html" class="nav__menu--link">Угода користувача</a>
                  </li>
                  <li class="nav__menu--item">
                     <a href="contact.html" class="nav__menu--link">Контактна інформація</a>
                  </li>
                  <li class="nav__menu--item">
                     <a href="akcii.html" class="nav__menu--link">Акції та знижки</a>
                  </li>
               </ul><!--/.-->
               <div class="nav__login">
                  <div class="burger__btn">
                     <span></span>
                     <span></span>
                     <span></span>
                     <span></span>
                  </div><!--/.burger-->
                  <a class="_popup nav__login--popup" href="#">
                     <i class="fas fa-user"></i>
                     <span>Вхід</span>
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
                  <a href="../index.html">
                     <img src="../img/logo/logo.svg" alt="logo" class="img">
                  </a>
               </div><!--/.navbar__brand-->
               <div class="navbar__content">
                  <div class="navbar__content--phone">
                     <i class="fas fa-phone-square-alt"></i>
                     <a href="tel:+380(96)3607663" >096 360 76 63</a>
                  </div><!--/.phone-->
                  <div class="navbar__content--time">
                     <p>
                        <i class="fas fa-clock"></i>
                        <span>Графік роботи:</span>
                     </p>
                     <p>Пн&ndash;Пт &mdash; 09:00 &ndash; 18:00</p>
                     <p>Сб&ndash;Нд &mdash; 11:00 &ndash; 15:00</p>
                  </div><!--/.time-->
                  <a href="basket.html" class="navbar__content--basket">
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
               <ul class="product__menu">
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="shampo">Шампуні</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="masky">Маски</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="kondycionery">Кондиціонери</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="termozahyst">Термозахист</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="nabory">Набори</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="tryhologia">Трихологія</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="ampuly">Ампули</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="cholovikam">Чоловікам</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="grebinci">Гребінці</a>
                  </li>
                  <li class="product__menu--item">
                     <a href="catalog.html" class="product__menu--link" data-filter="kosmetyka">Косметика</a>
                  </li>
               </ul><!--/.product__menu-->
            </div><!--/.row-->
         </div><!--/.container-->
      </section><!--/.header__product-->
   </header><!--/.header-->
   <main>
      <!--katalog-->
      <section class="catalog">
         <div class="container">
            <div class="catalog__row">
               <div class="catalog__row--title">
                  <div class="catalog__title">
                     <h3>
                        Каталог
                     </h3>
                  </div><!--/.catalog__title-->
                  <div class="catalog__sort">
                     <h4>
                        Сортування:
                     </h4>
                     <div class="catalog__sort--radio">
                        <input type="radio" id="popular" name="sorter" checked>
                        <label for="popular">за популярністю</label>
                        <input type="radio" id="lowPrice" name="sorter">
                        <label for="lowPrice">спочатку дешевше</label>
                        <input type="radio" id="heightPrice" name="sorter">
                        <label for="heightPrice">спочатку дорожчі</label>
                     </div><!--/.radio-->
                  </div><!--/.catalog__sort-->
               </div><!--/.title-->
               <div class="catalog__row--content">
                  <div class="catalog__tovariv">
                     <div class="mix product__card" data-cat="shampo" data-order="560">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/main_slider/shampo.webp" type="image/webp">
                                 <img src="../img/main_slider/shampo.jpg" alt="shampo" class="img">
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
                     <div class="mix product__card" data-cat="shampo" data-order="560">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/main_slider/shampo.webp" type="image/webp">
                                 <img src="../img/main_slider/shampo.jpg" alt="shampo" class="img">
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
                     <div class="mix product__card" data-cat="shampo" data-order="560">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/main_slider/shampo.webp" type="image/webp">
                                 <img src="../img/main_slider/shampo.jpg" alt="shampo" class="img">
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
                     <div class="mix product__card" data-cat="tryhologia" data-order="900">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/tryhologia.webp" type="image/webp">
                                 <img src="../img/tovar/tryhologia.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              Гель для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="900">900</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="tryhologia" data-order="900">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/tryhologia.webp" type="image/webp">
                                 <img src="../img/tovar/tryhologia.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              Гель для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="900">900</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="ampuly" data-order="380">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/ampuly.webp" type="image/webp">
                                 <img src="../img/tovar/ampuly.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              ampuly для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="380">380</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="cholovikam" data-order="300">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/cholovikam.webp" type="image/webp">
                                 <img src="../img/tovar/cholovikam.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              cholovikam для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="300">300</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="grebinci" data-order="200">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/grebinci.webp" type="image/webp">
                                 <img src="../img/tovar/grebinci.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              grebinci для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="200">200</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="grebinci" data-order="200">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/grebinci.webp" type="image/webp">
                                 <img src="../img/tovar/grebinci.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              grebinci для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="200">200</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="grebinci" data-order="200">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/grebinci.webp" type="image/webp">
                                 <img src="../img/tovar/grebinci.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              grebinci для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="200">200</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="grebinci" data-order="200">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/grebinci.webp" type="image/webp">
                                 <img src="../img/tovar/grebinci.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              grebinci для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="200">200</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="masky" data-order="380">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/masky.webp" type="image/webp">
                                 <img src="../img/tovar/masky.jpg" alt="shampo" class="img">
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
                           <span data-price="380">380</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="masky" data-order="380">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/masky.webp" type="image/webp">
                                 <img src="../img/tovar/masky.jpg" alt="shampo" class="img">
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
                           <span data-price="380">380</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="kondycionery" data-order="850">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/kondycionery.webp" type="image/webp">
                                 <img src="../img/tovar/kondycionery.jpg" alt="shampo" class="img">
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
                           <span data-price="850">850</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="termozahyst" data-order="390">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/termozahyst.webp" type="image/webp">
                                 <img src="../img/tovar/termozahyst.jpg" alt="shampo" class="img">
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
                           <span data-price="390">390</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="termozahyst" data-order="390">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/termozahyst.webp" type="image/webp">
                                 <img src="../img/tovar/termozahyst.jpg" alt="shampo" class="img">
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
                           <span data-price="390">390</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="termozahyst" data-order="390">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/termozahyst.webp" type="image/webp">
                                 <img src="../img/tovar/termozahyst.jpg" alt="shampo" class="img">
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
                           <span data-price="390">390</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="nabory" data-order="1500">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/nabory.webp" type="image/webp">
                                 <img src="../img/tovar/nabory.jpg" alt="shampo" class="img">
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
                           <span data-price="1500">1500</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="nabory" data-order="1500">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/nabory.webp" type="image/webp">
                                 <img src="../img/tovar/nabory.jpg" alt="shampo" class="img">
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
                           <span data-price="1500">1500</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="kosmetyka" data-order="2300">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/kosmetyka.webp" type="image/webp">
                                 <img src="../img/tovar/kosmetyka.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              kosmetyka для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="2300">2300</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                     <div class="mix product__card" data-cat="kosmetyka" data-order="2300">
                        <div class="product__card--akcia" style="display: block;">
                           <span>
                              акція
                           </span>
                        </div><!--/.akcia-->
                        <div class="product__card--img">
                           <a href="../pages/tovar.html">
                              <picture>
                                 <source srcset="../img/tovar/kosmetyka.webp" type="image/webp">
                                 <img src="../img/tovar/kosmetyka.jpg" alt="shampo" class="img">
                              </picture>
                           </a>
                        </div><!--/.img-->
                        <div class="product__card--title">
                           <p>
                              kosmetyka для всіх типів шкіри 
                              DAILY ACT ALL SKIN TYPES
                           </p>
                        </div><!--/.title-->
                        <div class="product__card--price">
                           <span data-price="2300">2300</span>
                           <span>грн</span>
                        </div><!--/.price-->
                        <div class="product__card--btn">
                           <button type="button" id="buyBtn">Купити</button>
                        </div><!--/.btn-->
                     </div><!--/.product__card-->
                  </div><!--/.catalog__tovariv-->
                  <nav class="navigation pagination" role="navigation">
                     <div class="nav-links">
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="">2</a>
                        <a class="next page-numbers" href="">Далі</a>
                     </div><!--/.nav-links-->
                  </nav><!--/.pagination-->
               </div><!--/.content-->
            </div><!--/.catalog__row-->
         </div><!--/.container-->
      </section><!--/.catalog-->
   </main>
   <!--footer-->
   <footer class="footer">
      <div class="container">
         <div class="footer__row">
            <div class="footer__brand">
               <div class="footer__brand--logo">
                  <p>Beauty</p>
                  <p>Cosmetic</p>
               </div><!--/.img-->
               <div class="footer__brand--copy">
                  &copy; 2023 &mdash; <script>document.write(new Date().getFullYear());</script> BeautyCosmetic<br>
                  Всі права захищено
               </div><!--/.copy-->
            </div><!--/.footer__brand-->
            <div class="footer__catalog">
               <div class="footer__catalog--title">
                  <h3>
                     Каталог
                  </h3>
               </div><!--/.title-->
               <ul class="footer__catalog--menu">
                  <li>
                     <a href="catalog.html">Шампуні</a>
                  </li>
                  <li>
                     <a href="catalog.html">Маски</a>
                  </li>
                  <li>
                     <a href="catalog.html">Кондиціонери</a>
                  </li>
                  <li>
                     <a href="catalog.html">Термозахист</a>
                  </li>
                  <li>
                     <a href="catalog.html">Набори</a>
                  </li>
                  <li>
                     <a href="catalog.html">Трихологія</a>
                  </li>
                  <li>
                     <a href="catalog.html">Ампули</a>
                  </li>
                  <li>
                     <a href="catalog.html">Чоловікам</a>
                  </li>
                  <li>
                     <a href="catalog.html">Гребінці</a>
                  </li>
                  <li>
                     <a href="catalog.html">Косметика</a>
                  </li>
               </ul><!--/.menu-->
            </div><!--/.footer__catalog-->
            <div class="footer__menu">
               <div class="footer__menu--title">
                  <h3>
                     Меню
                  </h3>
               </div><!--/.title-->
               <ul class="footer__menu--menu">
                  <li>
                     <a href="pages/catalog.html">Каталог</a>
                  </li>
                  <li>
                     <a href="pages/pro_nas.html">Про нас</a>
                  </li>
                  <li>
                     <a href="pages/dostavka.html">Оплата і доставка</a>
                  </li>
                  <li>
                     <a href="pages/obmin.html">Обмін та повернення</a>
                  </li>
                  <li>
                     <a href="pages/ugoda.html">Угода користувача</a>
                  </li>
                  <li>
                     <a href="pages/contact.html">Контактна інформація</a>
                  </li>
                  <li>
                     <a href="pages/akcii.html">Акції та знижки</a>
                  </li>
               </ul>
            </div><!--/.footer__menu-->
            <div class="footer__contact">
               <div class="footer__contact--title">
                  <h3>
                     Контакти
                  </h3>
               </div><!--/.title-->
               <div class="footer__contact--adres">
                  <div class="adres__phone">
                     <i class="fas fa-phone-square-alt"></i>
                     <a href="tel:+380963607663">096 360 76 63</a>
                  </div><!--/.adres__phone-->
                  <div class="adres__telegram">
                     <i class="fab fa-viber"></i>
                     <a href="viber://chat?number=%2B380963607663">096 360 76 63</a>
                  </div><!--/.adres__telegram-->
                  <div class="adres__mail">
                     <i class="fas fa-envelope"></i>
                     <a href="mailto:beautycosmetics3007@gmail.com">beautycosmetics3007@gmail.com</a>
                  </div><!--/.adres__mail-->
                  <div class="adres__map">
                     <i class="fas fa-map-marker-alt"></i>
                     <span>Івано - Франківська обл. м. Бурштин</span>
                  </div><!--/.adres__map-->
                  <div class="adres__social">
                     <p>Ми в соц мережах:</p>
                     <a href="https://www.instagram.com/beauty.prof.cosmetics_?igsh=bDlpMnpsOGJlbWw4" target="_blank">
                        <i class="fab fa-instagram"></i>
                     </a>
                     <a href="https://www.tiktok.com/@prof.cosmetics_?_t=8kiXyt8n2pB&_r=1" target="_blank">
                        <i class="fab fa-tiktok"></i>
                     </a>
                  </div><!--/.adres__social-->
               </div><!--/.adres-->
            </div><!--/.footer__contact-->
         </div><!--/.footer__row-->
      </div><!--/.container-->
   </footer><!--/.footer-->
   <!--back top btn-->
   <div class="back__top" id="backTop">
      <div class="back__top--content">
         <span>Вгору</span>
         <i class="fas fa-chevron-up"></i>
      </div><!--content-->
   </div><!--/.back__top-->
   <!--modal window-->
   <div class="modal" id="modal">
      <div class="modal__mask">
         <div class="modal__content">
            <div class="modal__content--close">
               <button type="button" id="modalClose">
                  <i class="fas fa-times"></i>
               </button>
            </div><!--/.close-->
            <div class="modal__content--tabs">
               <button type="button" class="_login switch__tabs switch__tabs--active">Вхід</button>
               <button type="button" class="_register switch__tabs">Реєстрація</button>
            </div><!--/.-->
            <div class="modal__content--body">
               <div class="modal__login modal__login--active">
                  <form data-action="#" id="loginForm" class="login__form">
                     <div class="login__form--block">
                        <label for="emailAuth">Е-пошта</label>
                        <input type="email" id="emailAuth" name="emailAuth">
                        <p class="error__mail--auth">Введіть коректну email адресу...</p>
                     </div><!--/.block-->
                     <div class="login__form--block">
                        <label for="paswordAuth">Пароль</label>
                        <input type="password" id="paswordAuth" name="paswordAuth">
                        <p class="error__password--auth">Вкажіть пароль (не менше 10 символів)</p>
                     </div><!--/.block-->
                     <div class="login__form--button">
                        <button id="sendAuth" type="button">
                           Відправити
                           <i class="fas fa-paper-plane"></i>
                        </button>
                        <button id="recoverPass" type="button">
                           Забули пароль?
                        </button>
                     </div><!--/.button-->
                  </form><!--/.login__form-->
               </div><!--/.modal__login-->
               <div class="modal__register">
                  <form data-action="#" id="registerForm" class="register__form">
                     <div class="register__form--block">
                        <label for="nameRegister">Ім'я та прізвище</label>
                        <input type="text" id="nameRegister" name="nameRegister">
                        <p class="error__name--register">Введіть ім'я(не менше 6 символів)</p>
                     </div><!--/.block-->
                     <div class="register__form--block">
                        <label for="emailRegister">Е-пошта</label>
                        <input type="email" id="emailRegister" name="emailRegister">
                        <p class="error__mail--register">Введіть коректну email адресу...</p>
                     </div><!--/.block-->
                     <div class="register__form--block">
                        <label for="paswordRegister">Пароль</label>
                        <input type="password" id="paswordRegister" name="paswordRegister">
                        <p class="error__password--register">Вкажіть пароль (не менше 10 символів)</p>
                     </div><!--/.block-->
                     <div class="register__form--button">
                        <button id="sendRegister" type="button">
                           Відправити
                           <i class="fas fa-paper-plane"></i>
                        </button>
                     </div><!--/.button-->
                  </form><!--/.register__form-->
                  <div class="register__oferta">
                     <p>
                        Підтверджуючи реєстрацію, я приймаю умови
                     </p>
                     <a href="pages/ugoda.html" target="_blank">
                        користувальницької угоди
                     </a>
                  </div><!--/.register__oferta-->
               </div><!--/.modal__register-->
            </div><!--/.body-->
         </div><!--modal__content-->
         <div class="modal__recover">
            <div class="modal__recover--body">
               <div class="recover__close">
                  <button type="button" id="recoverClose">
                     <i class="fas fa-times"></i>
                  </button>
               </div><!--/.recover__close-->
               <div class="recover__title">
                  <h3>
                     Відновлення паролю
                  </h3>
               </div><!--/.recover__title-->
               <div class="recover__text">
                  <p>
                     Введіть адресу електронної пошти, яку ви вказали під 
                     час реєстрації. Ми надішлемо листа з інформацією для відновлення паролю.
                  </p>
               </div><!--/.recover__text-->
               <form data-action="#" class="revover__form" id="recoverForm">
                  <div class="revover__form--block">
                     <label for="emailRecover">Е-пошта</label>
                     <input type="email" id="emailRecover" name="emailRecover">
                     <p class="error__mail--recover">Введіть коректну email адресу...</p>
                  </div><!--/.block-->
                  <div class="revover__form--button">
                     <button id="sendRecover" type="button">
                        Відправити
                        <i class="fas fa-paper-plane"></i>
                     </button>
                  </div><!--/.button-->
               </form><!--/.recover__form-->
            </div><!--/.body-->
         </div><!--/.modal recover-->
      </div><!--/.modak__mask-->
   </div><!--/.modal-->
   <!--libs js conected-->
   <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.4.1.min.js"><\/script>');</script>
   <!--slick slider https://kenwheeler.github.io/slick/ -->
   <script src="../js/vendor/slick.min.js"></script>
   <!--lightbox galery https://lokeshdhakar.com/projects/lightbox2/ -->
   <script src="../js/vendor/lightbox.min.js"></script>
   <!-- main script -->
   <script src="../js/main.js"></script>
   <!-- mail script -->
   <script src="../js/mail.js"></script>
   <!-- modal script -->
   <script src="../js/modal.js"></script>
   <!-- catalog scritp -->
   <script src="../js/catalog.js"></script>
   <!-- reviews script -->
   <script src="../js/reviews.js"></script>
   <!-- basket script -->
   <script src="../js/basket.js"></script>
</body>
</html>