<?php
namespace api\modules\v1\controllers;

use yii\rest\Controller;
use services\caller\Caller;
use services\caller\interfaces\CallerInterface;

class CallerController extends Controller
{

    public function actionIndex()
    {
        $caller2 = \Yii::createObject(CallerInterface::class);

        $cal= new Caller();

        return 'yes';
    }
}