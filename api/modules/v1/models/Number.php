<?php
/**
 * Created by PhpStorm.
 * User: HP Pavilion
 * Date: 27.04.2019
 * Time: 10:24
 */

namespace api\modules\v1\models;


use yii\db\ActiveRecord;

class Number extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'number';
    }

    /**
     * {@inheritdoc}
    */
    public function rules()
    {
        return [
             [['id'], 'required'],
//             [['id'], 'integer'],
            [ ['id'], 'integer', 'min' => 0, 'max' => 1000000],
        ];
    }

//    /**
//     * Method for find number by value
//    *
//    * @param int $number
//    *
//    * @return Number|null
//    */
//    public function findNumberByValue(int $number)
//    {
//        return $this->findOne(['value' => $number]);
//    }
}