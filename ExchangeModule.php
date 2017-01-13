<?php

namespace Yuki61803\exchange1c;

/**
 * exchange module definition class
 */
class ExchangeModule extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'Yuki61803\exchange1c\controllers';
    public $productClass;
    public $documentClass;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
