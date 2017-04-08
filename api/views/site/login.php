<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use backend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login-layout">
<?php $this->beginBody() ?>
<div class="main-container">
<div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">后台系统管理</span>
                                    <span class="white" id="id-text2">Vsersion 1.0</span>
                                </h1>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="用户登录中心">
                                                <i class="ace-icon fa fa-coffee green"></i>
                                                用户登录中心
                                            </h4>

                                            <div class="space-6"></div>

                                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                                                <fieldset>
                                                    <?= $form->field($model, 'username') ?>
                                                    <?= $form->field($model, 'password')->passwordInput() ?>
                                                    <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'ace'])->label(Html::tag('span', '记住密码',['class'=>'lbl'])); ?>
                                                    <div class="clearfix">
                                                        <?= Html::submitButton('登录', ['class' => 'width-35 pull-right btn btn-sm btn-primary', 'name' => 'login-button']) ?>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            <?php ActiveForm::end(); ?>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->
                            </div><!-- /.position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>