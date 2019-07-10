<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:20 AM
 */

/**
 * @var $this \yii\Web\View
 * @var $form yii\widgets\ActiveForm
 * @var $model \yii\db\ActiveRecord
 * @var $name string
 * @var $inputOptions array
 * @var $value string
 * @var $errorString string
 */

use yii\helpers\Html;

echo Html::beginTag("div", ["class" => "input"]);

if (!empty($form))
    echo $form->field($model, $name)->textarea($inputOptions)->label(false);
else
    echo Html::textarea($name, $value, $inputOptions);
echo Html::tag("div", $errorString, ["class" => "help-block"]);

echo Html::endTag("div");