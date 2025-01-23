<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\Html;
use yii\helpers\Url;
use yii\bootstrap4\ActiveForm;
use common\helpers\AlfHelpers;

$this->title = AlfHelpers::t('Inicia Sesión');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-login row">
        <div class="col"></div>
        <div class="col-md-5">
            <div class="my-3">
                <div class="card-body">
                    <p class="generalTitle">
                        <?= Html::encode($this->title) ?>
                    </p>

                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                    <div class="signupField">
                        <img src="/images/signup-name.svg" aria-label="signup-name" style="width: 18px;"/>
                        <div style="flex: 1;"><?= $form->field($model, 'username')->textInput(['placeholder' => 'Usuario']) ?></div>
                    </div>

                    <div class="signupField">
                        <img src="/images/signup-password.svg" aria-label="signup password" style="width: 18px;"/>
                        <div style="flex: 1;"><?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Contraseña']) ?></div>
                    </div>


                    <p style="margin:8px 0; text-align: end;">
                        <a href="<?= Url::to(["site/request-password-reset"]) ?>" style="color: #049edd; font-size: 12px;">¿Olvidaste tu contraseña?</a>
                    </p>

                    <button type="submit" name="login-button" class="submitLogin">INICIAR SESIÓN</button>

                    <div class="loginTxt">
                        <div class="decorationLineGray"></div>
                        <p class="loginIndct" >O inicia sesión</p>
                        <div class="decorationLineGray"></div>
                    </div>

                    <p style="text-align: center; color: #aaa; font-size: 12px;">
                        ¿No tienes una cuenta?
                        <a href="<?= Url::to(["site/signup"]) ?>" style="color: #049edd; font-weight: bold; letter-spacing: 1px;"> <?= AlfHelpers::t("Crear cuenta") ?></a>
                    </p>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>