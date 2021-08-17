<?php

/* @var $this \yii\web\View */
/* @var $content string */
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;
use common\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
<?php


echo GhostMenu::widget([
	'encodeLabels'=>false,
	'activateParents'=>true,
	'items' => [
		[
			'label' => 'Backend routes',
			'items'=>UserManagementModule::menuItems()
		],
		[
			'label' => 'Frontend routes',
			'items'=>[
				['label'=>'Login', 'url'=>['/user-management/auth/login']],
				['label'=>'Logout', 'url'=>['/user-management/auth/logout']],
				['label'=>'Registration', 'url'=>['/user-management/auth/registration']],
				['label'=>'Change own password', 'url'=>['/user-management/auth/change-own-password']],
				['label'=>'Password recovery', 'url'=>['/user-management/auth/password-recovery']],
				['label'=>'E-mail confirmation', 'url'=>['/user-management/auth/confirm-email']],
			],
		],
	],
]);
?>
 <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>