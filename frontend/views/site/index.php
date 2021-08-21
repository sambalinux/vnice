<?php
use yii\helpers\Html;
?>     
  <!-- MAIN SLIDER -->
<section class="main-slider" data-loop="true" data-autoplay="true" data-interval="7000">
      <div class="inner">
        
        <!-- Slide One -->
        <div class="slide slideResize slide1" style="background-image: url(<?= Yii::getAlias('@web') ?>/img/home-slider-1.jpg);">
          <div class="container">
            <div class="slide-inner1 common-inner">
              <span class="h1 from-bottom">Welcome to Vnice</span><br>
              <span class="h4 from-bottom">El mejor lugar para consentir tu cuerpo</span><br>
              <a href="javascript:void(0)" class="btn btn-primary first-btn waves-effect waves-light scale-up">Haz tu cita! </a>
            </div>
          </div>
        </div>

        <!-- Slide Two -->
        <div class="slide slideResize slide2" style="background-image: url(<?= Yii::getAlias('@web') ?>/img/home-slider-2.jpg);">
          <div class="container">
            <div class="slide-inner2 common-inner">
              <span class="h1 from-bottom">Salón de Belleza</span><br>
              <span class="h4 from-bottom">We provide best screen care & aging solution </span><br>
              <a href="javascript:void(0)" class="btn btn-primary first-btn waves-effect waves-light scale-up">More Details</a>
            </div>
          </div>
        </div>

        <!-- Slide Three -->
        <div class="slide slideResize slide3" style="background-image: url(<?= Yii::getAlias('@web') ?>/img/home-slider-3.jpg);">
          <div class="container">
            <div class="common-inner slide-inner3">
              <img src="img/favicon.png" alt="Logo Icon" class="img-responsive">
              <span class="h1 from-bottom">Servicio Spa</span><br>
              <span class="h4 from-bottom">The real place of Mindfullness & Healthy body</span><br>
              <a href="cart.html" class="btn btn-primary first-btn waves-effect waves-light scale-up">Buy Now</a>
            </div>
          </div>
        </div>

        <!-- Slide Four -->
        <div class="slide slideResize slide4" style="background-image: url(<?= Yii::getAlias('@web') ?>/img/home-slider-4.jpg);">
          <div class="container">
            <div class="common-inner slide-inner4">
              <span class="h1 from-bottom">Most Beautiful Theme</span><br>
              <span class="h4 from-bottom">Angel is a beautiful theme and easy to customize</span><br>
              <a href="javascript:void(0)" class="btn btn-primary first-btn waves-effect waves-light scale-up">More Details</a>
            </div>
          </div>
        </div>

      </div>
    </section>
       



