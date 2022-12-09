<?php

namespace application\controllers;

use application\core\Controller;

class AssortmentController extends Controller {

    public function assortmentAction() {

        $this->view->render('Продукция');
    }


}