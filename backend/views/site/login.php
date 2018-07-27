<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = yii::t('app','title_login');

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];

$fieldOptions3 = [
    'options' => ['hidden' => 'hidden'],
];
?>

<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>WEBCAT</b>cms</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <h4 class="login-box-msg"><?=yii::t('app','title_login_form'); ?></h4>

        <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false,'options' => ['autocomplete' => 'off']]); ?>

        <?= $form
            ->field($model, 'username', $fieldOptions1)
            ->label(false)
            ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

        <?= $form
            ->field($model, 'password', $fieldOptions2)
            ->label(false)
            ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

       <div class="row">
            <div class="col-xs-4">
                <?= $form->field($model, 'rememberMe', $fieldOptions3)->checkbox() ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
                <?= Html::submitButton(yii::t('app','sing_in'), ['class' => 'btn btn-primary btn-block btn-flat ', 'name' => 'login-button']) ?>
            </div>
            <!-- /.col -->
            <div class="col-xs-4"></div>
            <!-- /.col -->
        </div>


        <?php ActiveForm::end(); ?>
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
