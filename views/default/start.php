<?php

use yii\widgets\ListView;
use Yuki61803\exchange1c\widgets\Panel;

/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 */

Panel::begin();
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '@vendor/Yuki61803/yii2-1c-exchange/views/widgets/article-item'
]);
Panel::end();