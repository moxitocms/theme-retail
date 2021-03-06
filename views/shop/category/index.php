<?php

use common\modules\shop\widgets\productFilter\ProductFilter;
use common\modules\shop\models\ShopCategory;
use frontend\themes\retail\widgets\shopProducts\ProductsList;
use yii\helpers\Html;

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Каталог', 'url' => ['/shop/catalog/index']];
foreach ($model->parents as $key => $parent) {
    if ($key == 0) continue;
    $this->params['breadcrumbs'][] = ['label' => $parent->name, 'url' => $parent->present()->getUrl()];
}
$this->params['breadcrumbs'][] = $this->title;

$dataProvider->pagination = ['defaultPageSize' => 12];

/**
 * @var $view \yii\web\View
 * @var $searchModel \common\modules\shop\models\ShopProductsSearchFrontend
 * @var $dataProvider \yii\data\ActiveDataProvider
 */
?><h1><?= Html::encode($this->title) ?></h1>
<div class="row">
    <div class="col-lg-3">
        <?= ProductFilter::widget([
            'searchModel' => $searchModel,
            'showPricesFilters' => false,
            'registerJsAssets' => false,
        ]) ?>
        <?php if (0 && ($categories = ShopCategory::find()->roots()->one()->getChildren()->andWhere(['status' => 1])->all())) : ?>
            <div class="list-group mt-5">
                <?php foreach ($categories as $category): ?>
                    <a class="list-group-item list-group-item-action" href="<?=$category->present()->getUrl()?>"><?= $category->name ?></a>
                <?php endforeach;?>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-lg-9 order-lg-2">
        <?= ProductsList::widget([
            'dataProvider' => $dataProvider,
        ]) ?>
    </div>
</div>
