<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:20 AM
 */

/**
 * @var        $this \yii\Web\View
 * @var string $checkboxName
 * @var string $checkboxValue
 * @var array  $checkboxOptions
 */

use yii\helpers\Html;

echo Html::beginTag("div", ["class" => "checkbox"]);
echo Html::checkbox($checkboxName, is_null($checkboxValue) ? false : (int)$checkboxValue, $checkboxOptions);
echo Html::endTag("div");