<?php
namespace api\modules\v1\controllers;

use services\caller\Caller;
use services\caller\interfaces\CallerInterface;use Yii;
use yii\base\InvalidConfigException;use yii\rest\Controller;

class CallerController extends Controller
{

    public function actionIndex()
    {
        $caller = Yii::$app->components->caller;
        $caller2 = Yii::createObject(CallerInterface::class);

        $cal= new Caller();

        return 'yes';
    }
}