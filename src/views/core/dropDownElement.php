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
 * @var $items array
 * @var $inputOptions array
 * @var $name string
 * @var $value mixed
 * @var $errorString string
 */

use yii\helpers\Html;

echo Html::beginTag("div", ["class" => "input"]);

if (!empty($form))
    echo $form->field($model, $name)->dropDownList($items, $inputOptions)->label(false);
else
    echo Html::dropDownList($name, $value, $items, $inputOptions);
echo Html::tag("div", $errorString, ["class" => "help-block"]);
echo Html::endTag("div");