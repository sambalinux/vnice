<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        //'css/styles.css',
        'https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&family=Montserrat:wght@400;700&family=Open+Sans:wght@300;400;600;700&display=swap',
        'plugins/bootstrap/css/bootstrap.min.css',
        'plugins/font-awesome/css/font-awesome.min.css',
        'plugins/animate/animate.css',
        'plugins/selectbox/select_option1.css',
        'plugins/owl-carousel/owl.carousel.min.css',
        'plugins/fancybox/jquery.fancybox.min.css',
        'plugins/isotope/isotope.min.css',
        'plugins/datepicker/datepicker.min.css',
        'css/style.css',
        'css/default.css',



    ];
    public $js = [
        'plugins/jquery/jquery.min.js',
        //'js/scripts.js',
        'plugins/bootstrap/js/bootstrap.bundle.min.js',
        'plugins/selectbox/jquery.selectbox-0.1.3.min.js',
        'plugins/owl-carousel/owl.carousel.min.js',
        'plugins/isotope/isotope.min.js',
        'plugins/fancybox/jquery.fancybox.min.js',
        'plugins/isotope/isotope-triger.min.js',
        'plugins/datepicker/bootstrap-datepicker.min.js',
        'plugins/lazyestload/lazyestload.js',
        'plugins/smoothscroll/SmoothScroll.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
