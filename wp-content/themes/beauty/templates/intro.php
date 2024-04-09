      <!--intro section-->
      <section class="intro">
         <div class="intro__row">
            <div class="intro__slider" id="introSlider">
               <?php
                  $args = array(
                     'post_type'      => 'seting',
                     'post_status'    => 'publish',
                     'posts_per_page' => 5,
                  );
                  $setingPost = new WP_Query( $args, 'cat=20' );
               ?>
               <?php if ($setingPost->have_posts()) : while ($setingPost->have_posts()) : $setingPost->the_post(); ?>	
                     <?php
                        if( have_rows('golovni_zobrazhennya') ):
                           while( have_rows('golovni_zobrazhennya') ) : the_row();   
                                 if( have_rows('zobrazhennya_slajdera') ):
                                    while( have_rows('zobrazhennya_slajdera') ) : the_row();
                                    $banerWebP = get_sub_field('baner_slajderawebp');
                                    $banerJpj = get_sub_field('baner_slajderajpeg');
                        ?>
                        <picture>
                           <source srcset="<?php echo $banerWebP ?>" type="image/webp">
                           <img src="<?php echo $banerJpj ?>" alt="logo" class="img">
                        </picture>
                                 <?php
                                    endwhile;
                                 endif;
                                 ?>
                        <?php
                           endwhile;
                        endif;
                        ?>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
               <?php endif; ?>
            </div><!--/.intro__slider-->
            <?php $site_url = get_site_url( 63, 'katalog'); ?>
            <a class="intro__link" href="<?php echo $site_url; ?>"></a>
         </div><!--/.intro__row-->
      </section><!--/.intro-->