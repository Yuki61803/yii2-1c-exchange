<?php


namespace Yuki61803\exchange1c\models;

use Yuki61803\exchange1c\interfaces\ProductInterface;

/**
 * Class TestingProductClass
 *
 * @package Yuki61803\exchange1c\models
 */
class TestingGroupClass extends TestingClass
{
    protected static $property = 'groupClass';

    public static function methodRules()
    {
        return [
            [['getIdFieldName1c'], 'return' => 'string'],
            [
                ['createTree1c'],
                'return' => false,
                'params' => ['cml.classifier.groups']
            ],
        ];
    }
}