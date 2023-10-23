<?php
/*
Template Name: Главная
*/
?>

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package belbovit
 */

get_header();
?>

	<section class="slider">
   
    
   
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php 
      
        $slides = carbon_get_post_meta( get_the_ID(), 'slider' );
  
        if( $slides ) {
          foreach( $slides as $slide ) {          
            // if( ! $slide[ 'image' ] ) {
            //   continue; 
            // }
          print 'photo'
          ?> 
          <div class="swiper-slide" 
          style="background-image: url(<?php echo $slide[ 'photo' ]  ?>)" >
          <div class="main-wrap">
            <div class="slider-cont-wrap">
              <h2>
                <?php echo $slide[ 'title' ]; ?>
              </h2>    
              
              <div class="descr">
                <?php echo $slide[ 'description' ]; ?>
              </div>
              <div class="btn">
                <a href="<?php echo $slide[ 'btn' ]; ?>">
                  Подробнее →                
                </a>
              </div>
            </div>
          
          

          </div>
        
        </div>

        <?php

          }
          
        }
        ?>
        
      </div>      
      <div class="swiper-pagination"></div>
    
    </div>
 </section>
 <section class="furniture-order">
  <div class="main-wrap">
    <h2>
      <?php echo carbon_get_post_meta('36','cat_title');?>
    </h2>
    <div class="furniture-order-wrap">


    <?php 
      
      $categories = carbon_get_post_meta( get_the_ID(), 'categories' );
      if( $categories ) {
        foreach( $categories as $cat ) {          
          // if( ! $slide[ 'image' ] ) {
          //   continue; 
          // }
        
        ?> 
        <div class="furniture-item">
          <div class="furniture-item-wrap">
            <div class="icon">
            <img src="<?php echo wp_get_attachment_image_url( $cat[ 'photo_1' ] ); ?>" alt="" />
                
            </div>
            <div class="text">
            <?php echo $cat[ 'title_1' ]  ?>
            </div>
            <div class="hide-el">
              <a href="<?php echo $cat[ 'btn_1' ]  ?>">
                <div class="line"></div>
                <span><?php echo $cat[ 'btn_text' ]  ?></span>
                <div class="line"></div>
              </a>            
            </div>
          </div>
        </div>

        <?php
        }
        

        }
        
        ?>


      
      
    </div>
  </div>
 </section>
 <section class="reason">
  <div class="main-wrap">
    <h2>
    <?php echo carbon_get_post_meta('36','reason_title');?>
    </h2>
    <div class="reason-wrap">


    <?php 
      
      $features = carbon_get_post_meta( get_the_ID(), 'features' );
      if( $features ) {
        foreach( $features as $feature ) {          
          $counter++;       
        ?> 


      <div class="reason-item">
        <div class="reason-item-header">
          <?php echo $counter;  ?>
        </div>
        <div class="reason-item-descr">
          <?php echo $feature[ 'descr' ]  ?>
        </div>
      </div>

      <?php 
        }}
      
      ?>
      
    </div>
  </div>
 </section>
 <section class="popular">
  <div class="main-wrap">
    <div class="popular-descr">
      Заказать мебель в Молодечно по индивидуальным размерам от производителя вы можете в "БелБоВиТ". Мы разработаем проект, изготовим мебель, доставим и профессионально соберем её, чтобы ваша кухня стала максимально удобной и красивой.

      Чтобы купить мебель на заказ по индивидуальному проекту от производителя из Молодечно, оставляйте заявку на сайте или по телефону. Также мы ждем вас в нашем магазине!
    </div>
    <div class="popular-title">
      Популярная мебель
    </div>
    
    <div class="popular-wrap">
      <div class="popular-item" style="background-image:       
      url(<?php echo bloginfo('template_url'); ?>/img/kuhnya_fenix_s_supermatovym_nanopokrytiem_ot_prvoj_mebelnoj_fabriki_806х550_2\ 1.png);">
      <p>Кухня</p>
      
      <div class="hide-el">
        <a href="#">
          <div class="line"></div>
          <span>Смотреть</span>
          <div class="line"></div>
        </a>            
      </div>

      </div>
      <div class="popular-item" style="background-image:       
      url(<?php echo bloginfo('template_url'); ?>/img/kuhnya_fenix_s_supermatovym_nanopokrytiem_ot_prvoj_mebelnoj_fabriki_806х550_2\ 1.png);">
      <p>Кухня</p>
      
      <div class="hide-el">
        <a href="#">
          <div class="line"></div>
          <span>Смотреть</span>
          <div class="line"></div>
        </a>            
      </div>

      </div>
      <div class="popular-item" style="background-image:       
      url(<?php echo bloginfo('template_url'); ?>/img/kuhnya_fenix_s_supermatovym_nanopokrytiem_ot_prvoj_mebelnoj_fabriki_806х550_2\ 1.png);">
      <p>Кухня</p>
      
      <div class="hide-el">
        <a href="#">
          <div class="line"></div>
          <span>Смотреть</span>
          <div class="line"></div>
        </a>            
      </div>

      </div>
      
    </div>

    <div class="btn">
      <a href="#">
        Перейти в каталог →
      </a>
    </div>
  </div>
 </section>

 <section class="news">
  <div class="main-wrap">
    <h2>
      Новости БелБоВиТ
    </h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">        
        <div class="swiper-slide">
          <div class="img"  style="">
            <img src="<?php echo bloginfo('template_url'); ?>/img/1.png" alt="">
          </div>
          <div class="info-wrap">
            <div class="date">
              20.09.2022
            </div>
            <h3 class="title">
              Заказать мебель теперь стало проще! Рассрочка без переплат.
            </h3>
            <div class="descr">
              Наш магазин предоставляет всем клиентам три вида рассрочки: БПС - Сбербанк - FUN карта, до 6 месяцев....
            </div>
            <div class="btn">
              <a href="#">
                Подробнее →
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="img"  style="">
            <img src="<?php echo bloginfo('template_url'); ?>/img/1.png" alt="">
          </div>
          <div class="info-wrap">
            <div class="date">
              20.09.2022
            </div>
            <h3 class="title">
              Заказать мебель теперь стало проще! Рассрочка без переплат.
            </h3>
            <div class="descr">
              Наш магазин предоставляет всем клиентам три вида рассрочки: БПС - Сбербанк - FUN карта, до 6 месяцев....
            </div>
            <div class="btn">
              <a href="#">
                Подробнее →
              </a>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="img"  style="">
            <img src="<?php echo bloginfo('template_url'); ?>/img/1.png" alt="">
          </div>
          <div class="info-wrap">
            <div class="date">
              20.09.2022
            </div>
            <h3 class="title">
              Заказать мебель теперь стало проще! Рассрочка без переплат.
            </h3>
            <div class="descr">
              Наш магазин предоставляет всем клиентам три вида рассрочки: БПС - Сбербанк - FUN карта, до 6 месяцев....
            </div>
            <div class="btn">
              <a href="#">
                Подробнее →
              </a>
            </div>
          </div>
        </div>
        
        
      </div>
      <div class="swiper-button-next">
        <img src="<?php echo bloginfo('template_url'); ?>/img/Rectangle 66.svg" alt="">
      </div>
      <div class="swiper-button-prev">
        <img src="<?php echo bloginfo('template_url'); ?>/img/Rectangle 65.svg" alt="">
      </div>
      <div class="swiper-pagination"></div>
    </div>

    <div class="btn">
      <a href="#">
        Смотреть все новости →
      </a>
    </div>
  </div>
 </section>

 <section class="experience">
  <div class="main-wrap">
    <h2>
      Опыт работы позволил нам добиться серьезных преимуществ
    </h2>
    <div class="experience-wrap">
      <div class="experience-col">
        <div class="experience-item r" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask\ group.png) ;">
          <div class="experience-item-descr">
            <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/с учетом планировки.svg" alt="">
            <p>
              Разработка модельного ряда с учётом европейских тенденций и планировок
            </p>
          </div>
          <!-- <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask group.png" alt=""> -->
        </div>
        <div class="experience-item l" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask\ group2.png) ;">
          <div class="experience-item-descr ">
            <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/с учетом планировки.svg" alt="">
            <p>
              Разработка модельного ряда с учётом европейских тенденций и планировок
            </p>
          </div>
          <!-- <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask group.png" alt=""> -->
        </div>
      </div>
      <div class="experience-col">
        <div class="experience-item r" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask\ group.png) ;">
          <div class="experience-item-descr">
            <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/с учетом планировки.svg" alt="">
            <p>
              Разработка модельного ряда с учётом европейских тенденций и планировок
            </p>
          </div>
          <!-- <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask group.png" alt=""> -->
        </div>
        <div class="experience-item l" style="background-image: url(<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask\ group2.png) ;">
          <div class="experience-item-descr ">
            <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/с учетом планировки.svg" alt="">
            <p>
              Разработка модельного ряда с учётом европейских тенденций и планировок
            </p>
          </div>
          <!-- <img src="<?php echo bloginfo('template_url'); ?>/img/svg-expir/Mask group.png" alt=""> -->
        </div>
      </div>
    </div>
    
  </div>
 </section>


 <section class="about">
  <div class="main-wrap">
    <h2>
      О БелБоВиТ
    </h2>
    <div class="about-wrap">
      <div class="content">
        <div class="descr">
          Наша фирма БелБоВиТ предлагает не просто огромный выбор мебели, мы создаем мебель под заказ. Выслушав ваши предпочтения о функционале и  дизайне мебели, мы готовы предоставить вам уникальный проект, продукт отвечающий всем вашим требованиям. Удобство и  уют в вашем доме сделать проще чем вы предполагаете, и мы поможем вам в этом!
        </div>
        <div class="btn">
          <a href="#">
            Читать подробнее →
          </a>
        </div>
      </div>
      <div class="img">
        <img src="<?php echo bloginfo('template_url'); ?>/img/logo/лого 4 1.png" alt="">
      </div>
    </div>
  </div>
 </section>

<?php 
get_footer();
?>

