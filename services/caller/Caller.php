<?php

namespace services\caller;

use services\caller\interfaces\CallerInterface;
use yii\base\BaseObject;


class Caller extends BaseObject implements CallerInterface {

    /**
     * @return string
    */
    public function start(): string {

        return 'Start';
    }
}