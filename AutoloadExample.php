<?php

namespace hrupin\test;

use hrupin\test\models\Test;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
    public function run()
    {
        $model = \Yii::createObject(Test::className());
        return $model->str;
    }
}
