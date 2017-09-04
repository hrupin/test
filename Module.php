<?php
namespace hrupin\test;

class Module extends \yii\base\Module{

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        \Yii::setComponents([
            'components' => [
                'test' => [
                    'class' => 'frontend\models\Test',
                    'identityClass' => 'hrupn\test\models\Test',
                ],
            ]
        ]);
    }
}