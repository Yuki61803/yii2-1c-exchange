<?php


namespace Yuki61803\exchange1c\controllers;


class InterfaceController extends Controller
{
    public function actionCheck($variable)
    {
        return $this->render('check', ['variable' => $variable]);
    }
}