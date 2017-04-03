<?php


namespace Yuki61803\exchange1c;


use yii\base\Event;

class ExchangeEvent extends Event
{
    public $model;
    public $ids = [];
}