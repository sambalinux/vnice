<?php
use yii\helpers\Html;
?>  
    <!-- HEADER -->
    <header id="pageTop" class="header">

      <!-- TOP INFO BAR -->
      <div class="top-info-bar">
        <div class="container">
          <div class="top-bar-right">
            <ul class="list-inline">
              <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i> vnice.cordoba@gmail.com</a></li>
              <li><span><i class="fa fa-phone" aria-hidden="true"></i>9932616733</span></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-md main-nav navbar-light">
        <div class="container">
     
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="index.html"><img class="lazyestload" data-src="<?= Yii::getAlias('@web') ?>/img/vnice_logo1.jpg" src="<?= Yii::getAlias('@web') ?>/img/vnice_logo1.jpg" alt="logo"></a>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                
                <?= Html::a('<span class="sr-only">(current)</span>INICIO', ['/site/index'], ['class' => 'nav-link']) ?>
                
              </li>
  
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Nosotros</a>
                <ul class="dropdown-menu">
                  <li>
                  <?= Html::a('Nuestra Identidad', ['/site/about']) ?>
                 </li>
                  <li>
                    <?= Html::a('Nuestro Equipo', ['/site/team']) ?>
                  </li>
                </ul>
              </li>

              <li class=" dropdown megaDropMenu nav-item " >
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Servicios</a>

                <ul class="row dropdown-menu justify-content-md-between">
                  <li class="">
                    <ul class="list-unstyled">
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                    </ul>
                  </li>

                  <li class="">
                    <ul class="list-unstyled">
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                    </ul>
                  </li>

                  <li class="">
                    <ul class="list-unstyled">
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                      <li><a href="#">Servicio X</a></li>
                    </ul>
                  </li>

                  <li class="">
                    <ul class="list-unstyled">
                      <li><a href="javascript:void(0)" class="px-md-0"><img class="img-responsive lazyestload" data-src="img/home/pricing-1.jpg" src="img/home/pricing-1.jpg" alt="logo"></a></li>
                    </ul>
                  </li>
                </ul>
              </li>


              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">Noticias</a>
              </li>
  
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">GALERIA</a>
                <ul class="dropdown-menu menu-right">
                  <li><a href="#">Fotográfica</a></li>
                  <li><a href="#">Videos</a></li>
                  <li><a href="#">Testimonios</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="javascript:void(0)">SOY VNICE</a>
                <ul class="dropdown-menu menu-right">
                  <li><a href="#">Iniciar sesión</a></li>
                  <li><a href="#">Registrarme</a></li>
                </ul>
              </li>


            </ul>
          </div>

          <div class="cart_btn">
            <a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i><span class="badge">0</span></a>
          </div>
          <!-- header search ends-->
        </div>
      </nav>
      
    </header>