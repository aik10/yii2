<?php 

namespace app\controllers;

use yii\web\Controller;

/**
* 
*/
class MyController extends Controller
{
    function actionHello () {
        return $this->render('hello');
    }
}

?>