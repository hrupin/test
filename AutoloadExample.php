<?php

namespace hrupin\test;

/**
 * This is just an example.
 */
class AutoloadExample extends \yii\base\Widget
{
    public function run()
    {
        $model = \Yii::createObject(Module::getInstance()->modelMap['test']::className());
        return $model->str;
    }
}
