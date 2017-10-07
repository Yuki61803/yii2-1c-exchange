<?php


namespace Yuki61803\exchange1c\controllers;


use Yuki61803\exchange1c\models\TestingClass;

class TestingController extends Controller
{
    public function actionIndex($class = null, $result = null)
    {
        /**
         * @var TestingClass $testingClass
         * @var TestingClass $resultClass
         */
        $testingClass = null;
        $resultClass = null;
        if ($class) {
            $className = 'Yuki61803\exchange1c\models\\' . $class;
            if (class_exists($className)) {
                $testingClass = new $className();
            } else {
                throw new \Exception("Class $className not found");
            }
            if ($result) {
                $resultClass = new $className(['method' => $result]);
            }
        }
        return $this->render('index', ['testingClass' => $testingClass, 'resultClass' => $resultClass]);
    }
}