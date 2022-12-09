<?php

namespace application\controllers;

use application\core\Controller;

class ErrorController extends Controller {


    public function errorAction() {



        $this->view->render('Ошибка перехода на страницу');
    }



}