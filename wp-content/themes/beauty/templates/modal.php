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
            <button type="button" class="_login switch__tabs switch__tabs--active"><?php the_field('tab_vhid', 'option'); ?></button>
            <button type="button" class="_register switch__tabs"><?php the_field('tab_reyestracziya', 'option'); ?></button>
         </div><!--/.-->
         <div class="modal__content--body">
            <div class="modal__login modal__login--active">
               <form data-action="#" id="loginForm" class="login__form">
               <div class="login__form--block">
                  <label for="emailAuth"><?php the_field('vhid_poshta', 'option'); ?></label>
                  <input type="email" id="emailAuth" name="emailAuth">
                  <p class="error__mail--auth"><?php the_field('pomylka_vvodu_vhid_poshta', 'option'); ?></p>
               </div><!--/.block-->
               <div class="login__form--block">
                  <label for="paswordAuth"><?php the_field('vhid_parol', 'option'); ?></label>
                  <input type="password" id="paswordAuth" name="paswordAuth">
                  <p class="error__password--auth"><?php the_field('pomylka_vvodu_vhid_parol', 'option'); ?></p>
               </div><!--/.block-->
               <div class="login__form--button">
                  <button id="sendAuth" type="button">
                     <?php the_field('knopka_vidpravyty', 'option'); ?>
                     <i class="fas fa-paper-plane"></i>
                  </button>
                  <button id="recoverPass" type="button">
                  <?php the_field('tekst_knopky_zabuly_parol', 'option'); ?>
                  </button>
               </div><!--/.button-->
               </form><!--/.login__form-->
            </div><!--/.modal__login-->
            <div class="modal__register">
               <form data-action="#" id="registerForm" class="register__form">
               <div class="register__form--block">
                  <label for="nameRegister"><?php the_field('reyestracziya_imya', 'option'); ?></label>
                  <input type="text" id="nameRegister" name="nameRegister">
                  <p class="error__name--register"><?php the_field('pomylka_reyestracziya_imya', 'option'); ?></p>
               </div><!--/.block-->
               <div class="register__form--block">
                  <label for="emailRegister"><?php the_field('vhid_poshta', 'option'); ?></label>
                  <input type="email" id="emailRegister" name="emailRegister">
                  <p class="error__mail--register"><?php the_field('pomylka_vvodu_vhid_poshta', 'option'); ?></p>
               </div><!--/.block-->
               <div class="register__form--block">
                  <label for="paswordRegister"><?php the_field('reyestracziya_parol', 'option'); ?></label>
                  <input type="password" id="paswordRegister" name="paswordRegister">
                  <p class="error__password--register"><?php the_field('pomylka_reyestracziya_parol', 'option'); ?></p>
               </div><!--/.block-->
               <div class="register__form--button">
                  <button id="sendRegister" type="button">
                     <?php the_field('knopka_vidpravyty', 'option'); ?>
                     <i class="fas fa-paper-plane"></i>
                  </button>
               </div><!--/.button-->
               </form><!--/.register__form-->
               <div class="register__oferta">
               <p>
                  <?php the_field('pidtverdyty_vidpravku', 'option'); ?>
               </p>
               <?php $ugoda_url = get_site_url( 73, 'ugoda-korystuvacha'); ?>
               <a href="<?php echo $ugoda_url; ?>" target="_blank">
                  <?php the_field('korystuvaczka_ugoda', 'option'); ?>
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
               <h3><?php the_field('zagolovok_bloku_vidnovlennya_parolyu', 'option'); ?></h3>
            </div><!--/.recover__title-->
            <div class="recover__text">
               <p><?php the_field('tekst_bloku_vidnovlennya_parolyu', 'option'); ?></p>
            </div><!--/.recover__text-->
            <form data-action="#" class="revover__form" id="recoverForm">
               <div class="revover__form--block">
               <label for="emailRecover"><?php the_field('vhid_poshta', 'option'); ?></label>
               <input type="email" id="emailRecover" name="emailRecover">
               <p class="error__mail--recover"><?php the_field('pomylka_vvodu_vhid_poshta', 'option'); ?></p>
               </div><!--/.block-->
               <div class="revover__form--button">
               <button id="sendRecover" type="button">
                  <?php the_field('knopka_vidpravyty', 'option'); ?>
                  <i class="fas fa-paper-plane"></i>
               </button>
               </div><!--/.button-->
            </form><!--/.recover__form-->
         </div><!--/.body-->
         </div><!--/.modal recover-->
      </div><!--/.modak__mask-->
   </div><!--/.modal-->