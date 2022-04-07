<?php

get_header();


?>




</php>
<section class="hero-section">
  <div class="hero-section__container container">
    <div class="hero-section__content ">
      <h1 class="hero-section__heading h1"><?php  echo get_field('hero_heading');?></h1>
      <div class="hero-section__location"><?php  echo get_field('hero_description');?></div>
      <button>Записаться</button>
    </div>
  </div>
  <div class="hero-section__bg-wrap">
    <img class="hero-section__bg-image" src="<?php echo get_field('bg_hero');?>" alt="">
  </div>
</section>
        <section class="about-section section">
    <div class="about-container container">
        <div class="about-heading">
            <h3 class="about-heading__h3"><?php  echo get_field('about_heading');?></h3>
        </div>
        <div class="about-content">
            <p class="about-content__text">
                <?php  echo get_field('about_description_1th');?>
                <span class="content__delimited"></span>
                <?php  echo get_field('about_description_2th');?>
            </p>
            <div class="about-content__number">
                <div class="about-content__number-item">
                    <p class="number"><?php  echo get_field('about_number_1th');?> <span>М</span> </p>
                    <p class="description"><?php  echo get_field('about_number_descr_1th');?></p>
                </div>
                <div class="about-content__number-item">
                    <p class="number"><?php  echo get_field('about_number_2th');?></p>
                    <p class="description"><?php  echo get_field('about_number_descr_2th');?></p>
                </div>
                <div class="about-content__number-item">
                    <p class="number"><?php  echo get_field('about_number_3th');?></p>
                    <p class="description"><?php  echo get_field('about_number_descr_3th');?></p>
                </div>
                <div class="about-content__number-item">
                    <p class="number"><?php  echo get_field('about_number_4th');?></p>
                    <p class="description"><?php  echo get_field('about_number_descr_4th');?></p>
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="section location-section">
    <div class="location-container container">
        <div class="location-content">
            <div class="location-content__location">
                <h3 class="locaion-h3"><?php  echo get_field('location_heading');?></h3>
                <p class="location-content__adress"><?php  echo get_field('location_heading_descr');?></p>
            </div>
            <div class="location-content__text">
                <p class="location-content__paragraph">
                    <?php  echo get_field('location_description');?>
                </p>
            </div>
        </div>
        <div class="location-map">
            <img src="<?php echo get_field('map_img'); ?>" alt="">
            <div class="location-map__nav">
                <a href="#" class=" location-map__nav-item nav-item">Все обьекты</a>
                <a href="#" class=" location-map__nav-item nav-item">Рестораны</a>
                <a href="#" class=" location-map__nav-item nav-item">Парки</a>
                <a href="#" class=" location-map__nav-item nav-item">Магазины</a>
                <a href="#" class=" location-map__nav-item nav-item">Образование</a>
                <a href="#" class=" location-map__nav-item nav-item">Спорт</a>
            </div>
        </div>

    </div>
</section>
<div class="section style-section">
    <div class="container style-container">
        <div class="style-content">
            <h4 class="style-h4"><?php  echo get_field('style_heading');?></h4>
            <p class="style-content__text">
            <?php  echo get_field('style_descr_1th');?>
            <span class="content__delimited"></span>	
            <?php  echo get_field('style_descr_2th');?>
            </p>
        </div>
        <div class="style-img">
            <img src="<?php echo get_template_directory_uri().'/assets/img/style.jpg'?>" alt="">
        </div>
    </div>
    <!-- Style Slider Render -->
    <?php $images = get_field('style_slider_img');
        if ($images): ?>
        <!-- Swiper Container -->
        <div class="slider-container">
            <div class="swiper">
                <div class="swiper-wrapper">
        <!-- Render Slides -->
                    <?php foreach( $images as $image ):?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="">
                            </div>
                    <?php endforeach; ?>
        <!-- Render Slides -->
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        
        <?php  endif; ?>
        <!-- End Style Slider Render -->
</div>
<div class="features-section section">
    <div class="features-container">
        <div class="features-content">
            <div class="container">
                <h3 class="feature-h3">
                    Преимущества
                </h3>
            </div>
            <div class="features-swiper">
                <div class="features-swiper-wrapper">

                    <!-- Render Slides -->
                    <?php
                    $images = get_field('feature_slider_img');

                    foreach( $images as $image ){ ?>
                        <div class="features-slide">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="">
                            <p class="features-descr"><?php echo esc_html($image['caption']);?></p>
                        </div>
                    
                    <?php };    ?>
                    <!-- END Render Slides -->

                </div>
            </div>
        </div>
    </div>
</div>
<div class="offer-section section">
    <div class="offer-container container">
        <h3 class="offer-h3">Предложения</h3>


            <!-- Post RENDER Apartaments offer -->
            <?php
            
            
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name' => 'Tip de apartament',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );

            foreach( $my_posts as $post ){
                setup_postdata( $post );
            ?>
                <div class="offer-content">
                    <div class="offer-content_img">
                        <img src="<?php  echo get_field('post_img');?>" alt="">
                    </div>
                    <div class="offer-content_text">
                        <p class="offer-content_text-descriptor">cтоимость по запросу</p>
                        <h4 class="offer-content_text-h4"><?php echo the_title() ?></h4>
                        <p class="offer-content_text-text"><?php  echo get_field('description');?></p>
                        <button class="offer-button"><?php  echo get_field('button_text');?></button>

                    </div>
                </div>
            <?php
            }
         
            ?>
            <!-- END Post RENDER Apartaments offer -->
    </div>
    <div class="offer-swiper_container">


        <!-- Slider Render -->
        <?php $offer_images = get_field('offer_slider_img');
                if ($offer_images): ?>
                <!-- Swiper Container -->
                <div class="offer-swiper">
                    <div class="offer-wrapper">
                <!-- Render Slides -->
                            <?php foreach( $offer_images as $offer_image ): ?>
                                <div class="offer-slide">
                                    <img src="<?php echo esc_url($offer_image['url']); ?>" alt="<?php echo esc_url($offer_image['alt']); ?>">
                                </div>
                            <?php endforeach;  ?>
                <!-- Render Slides -->
                    </div>
                        <div class="offer-pagination"></div>
                        <div class="offer-button-prev"></div>
                        <div class="offer-button-next"></div>
                </div>
                 </div>
                <?php  endif; ?>
                <!-- Slider Render -->
</div>
        <div class="params-section section">
    <div class="params-container container">
        <h3 class="params-h3">
            Характеристики
        </h3>
        <div class="params-content">
            <div class="params-content_item">
                <h6 class="params-h6">Сервис</h6>
                <p class="params-descr">Две зоны ресепшн 24/7</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Паркинг</h6>
                <p class="params-descr">Наземный, охраняемый паркинг</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Кондиционирование</h6>
                <p class="params-descr">Центральная система кондиционирования</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Лифты</h6>
                <p class="params-descr">Бесшумные премиальные лифты OTIS</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Территория</h6>
                <p class="params-descr">Огороженная и&nbsp;охраняемая территория</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Остекление</h6>
                <p class="params-descr">Высококачественные стеклопакеты
                    с&nbsp;повышенным шумоизоляции</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Пожарная сигнализация</h6>
                <p class="params-descr">Автоматическая система пожаротушения</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Вентиляция</h6>
                <p class="params-descr">Система принудительной приточно-вытяжной вентиляции</p>
            </div>
            <div class="params-content_item">
                <h6 class="params-h6">Система безопасности</h6>
                <p class="params-descr">Соверменная система охраны</p>
            </div>

        </div>
    </div>
</div>
<div class="comfort-section section">
    <h3 class="comfort-h3 container">Зона комфорта</h3>

    <!-- Comfort Slider Render -->
    <?php $Comfortimages = get_field('comfort_slider_img');
        if ($Comfortimages): ?>
        <!-- Swiper Container -->
        <div class="slider-container comfort-container">
            <div class="swiper">
                <div class="swiper-wrapper">
        <!-- Render Slides -->
                    <?php foreach( $Comfortimages as $Comfortimage ):?>
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($Comfortimage['url']); ?>" alt="">
                            </div>
                    <?php endforeach; ?>
        <!-- Render Slides -->
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        
    <?php  endif; ?>
    <!-- End Comfort Slider Render -->
</div>
<div class="parteners-section section">
    <div class="parteners-container container">
        <h3 class="parteners-h3">Партнеры</h3>
        <div class="parteners-content">
            <div class="parteners-content_item">
                <img src="./img/parteners.png" alt="">
            </div>
            <div class="parteners-content_item">
                <img src="./img/parteners2.png" alt="">
            </div>
            <div class="parteners-content_item">
                <img src="./img/parteners3.png" alt="">
            </div>
            <div class="parteners-content_item">
                <img src="./img/parteners4.png" alt="">
            </div>
            <div class="parteners-content_item">
                <img src="./img/parteners5.png" alt="">
            </div>
            <div class="parteners-content_item">
                <img src="./img/parteners6.png" alt="">
            </div>
        </div>
    </div>
</div>

<?php

get_footer();


?>
