<?php

namespace Yuki61803\exchange1c\behaviors;

use yii\base\ActionFilter;

class BomBehavior extends ActionFilter
{
    public function afterAction($action, $result)
    {
        return chr(0xEF) . chr(0xBB) . chr(0xBF) . $result;
    }
}