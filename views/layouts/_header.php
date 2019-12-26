<?php
/**
 * Created by PhpStorm.
 * User: singletonn
 * Date: 10/16/18
 * Time: 11:33 AM
 */

use yii\helpers\Html;
use yii\web\View;
use pantera\content\widgets\block\Block;
use pantera\leads\widgets\form\LeadForm;
use pantera\geolocation\widgets\geolocation\Geolocation;

/* @var $this View */
?>
<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-5">
                <button type="button" class="wsnavtoggle d-lg-none" id="wsnavtoggle">
                    <div class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </div>
                </button>
                <a href="/" class="header__site-logo site-logo">
                    <img class="site-logo__img" src="/images/logo.png" alt="ENERGON">
                </a>
            </div>
            <div class="col-lg-6 order-lg-0 order-3 mt-4 mt-lg-0">
                <form class="search-form">
                    <div class="input-group input-group-lg">
                        <input class="search-form__field search-field form-control" type="text" placeholder="Что ищем?">
                        <div class="input-group-append">
                            <button type="submit" class="search-form__submit btn btn-primary"><span class="sr-only">Поиск</span></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-md-7 d-none d-md-block text-right">
                <?= LeadForm::widget([
                    'key' => 'callMe',
                    'text' => 'Заказать звонок',
                    'options' => [
                        'class' => 'btn btn-lg btn-primary header__btn',
                    ],
                ]) ?>
                <?= LeadForm::widget([
                    'key' => 'question',
                    'text' => 'Задать вопрос',
                    'options' => [
                        'class' => 'btn btn-lg btn-secondary header__btn',
                    ],
                ]) ?>
            </div>
        </div>
    </div>
</header>
