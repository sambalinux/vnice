<?php
use yii\helpers\Html;
?>
<!-- FOOTER -->
  <footer style="background-image: url(img/home/footer-bg.jpg);">
      <!-- BACK TO TOP BUTTON -->
      <a href="#pageTop" class="backToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
      <!-- FOOTER INFO -->
      <div class="clearfix footerInfo">
        <div class="container">
          <div class="row">
            <div class="col-sm-3 col-xs-12">
              <div class="footerText">
               
                <?= Html::a("<img src=".
                  Yii::getAlias('@web'). 
                 "'/img/vnice_logo1.jpg' width='200' height='200' src=".
                 Yii::getAlias('@web').
                 "'/img/vnice_logo.jpg'>",
                  ['/site/index'], ['class' => 'footerLogo']) ?>

                <p>Salón de Uñas con estilo y calidad especiales para ti.</p>
                <p>Avenida 5 entre Calles 16 y 18 No. 1614 94570 Córdoba, Veracruz de Ignacio de la Llave, México</p>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12 paddingLeft">
              <div class="footerInfoTitle">
                <h4>Interesting</h4>
              </div>
              <div class="useLink">
                <ul class="list-unstyled">
                  <li><a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Pestañas</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Spa</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Uñas</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Tintes</a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Depilación</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-3 col-xs-12">
              <div class="footerInfoTitle">
                <h4>Gallery</h4>
              </div>
              <div class="footerGallery row">
                <div class="col-4 col-md-6 col-lg-4 mb-3 mb-md-0">
                  <a href="gallery-v2.html">
                    <img class="lazyestload" data-src="<?= Yii::getAlias('@web') ?>/img/unas/una1.jpg" src="<?= Yii::getAlias('@web') ?>/img/unas/una1.jpg" alt="gallery-img">
                  </a>
                </div>

                <div class="col-4 col-md-6 col-lg-4 mb-3 mb-md-0">
                  <a href="gallery-v2.html">
                    <img class="lazyestload" data-src="<?= Yii::getAlias('@web') ?>/img/unas/una2.jpg" src="<?= Yii::getAlias('@web') ?>/img/unas/una2.jpg" alt="gallery-img">
                  </a>
                </div>

                <div class="col-4 col-md-6 col-lg-4 mb-3 mb-md-0">
                  <a href="gallery-v2.html">
                    <img class="lazyestload" data-src="<?= Yii::getAlias('@web') ?>/img/unas/una3.jpg" src="<?= Yii::getAlias('@web') ?>/img/unas/una3.jpg" alt="gallery-img">
                  </a>
                </div>

                <div class="col-4 col-md-6 col-lg-4">
                  <a href="gallery-v2.html">
                    <img class="lazyestload" data-src="<?= Yii::getAlias('@web') ?>/img/unas/una4.jpg" src="<?= Yii::getAlias('@web') ?>/img/unas/una4.jpg" alt="gallery-img">
                  </a>
                </div>

                <div class="col-4 col-md-6 col-lg-4">
                  <a href="gallery-v2.html">
                    <img class="lazyestload" data-src="<?= Yii::getAlias('@web') ?>/img/unas/una5.jpg" src="<?= Yii::getAlias('@web') ?>/img/unas/una5.jpg" alt="gallery-img">
                  </a>
                </div>

                <div class="col-4 col-md-6 col-lg-4">
                  <a href="gallery-v2.html">
                    <img class="lazyestload" data-src="<?= Yii::getAlias('@web') ?>/img/unas/una6.jpg" src="<?= Yii::getAlias('@web') ?>/img/unas/una6.jpg" alt="gallery-img">
                  </a>
                </div>
              </div>
            </div>

            <div class="col-sm-3 col-xs-12">
              <div class="footerInfoTitle">
                <h4>NEWSLETTER</h4>
              </div>

              <div class="footerText">
                <p>Suscribete a nuestro NEWSLETTER y recibe novedades y promociones.</p>
                <form class="input-group">
                  <input type="text" class="form-control" required="" placeholder="Mi correo" aria-describedby="basic-addon21">
                  <button type="submit" class="input-group-addon" id="basic-addon21">Enviar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- COPY RIGHT -->
      <div class="clearfix copyRight">
        <div class="container">
          <div class="row">
            <div class="col-md-5 order-md-1">
              <ul class="list-inline socialLink">
                <li><a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                <li><a href="javascript:void(0)"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
              </ul>
            </div>

            <div class="col-md-7">
              <div class="copyRightText">
                <p>&copy; 2021 Copyright vnice.mx</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>