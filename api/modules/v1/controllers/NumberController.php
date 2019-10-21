<?php

declare(strict_types = 1);

namespace api\modules\v1\controllers;

use api\modules\v1\models\Number;
use yii\rest\Controller;


class NumberController extends Controller
{
    public $modelClass = 'api\modules\v1\models\Number';

    /**
     * Generate number
     *
     * @return int
     *@throws \Exception
     *@throws \Throwable
*/
    public function actionGenerate(): int
    {
        $number = $this->randomCompoundNumber();

        if ($this->existNumber($number) !== false) {
            $this->actionGenerate();
        }

        $model = new Number();
        $model->setAttribute('id', $number);
        $model->save(true);

        return $number;
    }

    /**
     * Public method for checking exist number
    *
    * @param int $number
    *
    * @return bool
    */
    public function actionRetrieve(int $number): bool
    {
        return $this->existNumber($number)? true : false;
    }

    /**
     * FInd number by value
     *
     * @param int $number
     *
     * @return bool
     */
    protected function existNumber(int $number): bool
    {
        $number = Number::findOne(['id' => $number]);

        return $number ? true : false;
    }

    /**
    * @throws \Exception
    */
    protected function randomCompoundNumber()
    {
         $number = random_int(0, 1000000);

         if ($this->checkNumberIsSimple($number)) {
             $this->randomCompoundNumber();
         }

         return $number;
    }

    /**
     * Checking number that it not simple number
    *
    * @param int $num
    *
    * @return bool
    */
    protected function checkNumberIsSimple(int $num): bool
    {
       for ($x = 2; $x <= sqrt($num); $x++) {
           if (!($num % $x)) {
               return false;
           }
       }

       return true;
    }
}