<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:20 AM
 */

/**
 * @var \yii\Web\View          $this
 * @var yii\widgets\ActiveForm $form
 * @var \yii\base\Model        $model
 * @var string                 $label
 * @var string                 $name
 * @var array                  $options
 * @var string                 $description
 * @var array                  $wrapperOptions
 * @var string                 $icon
 * @var bool                   $checkbox
 * @var array                  $checkboxOptions
 * @var string                 $checkboxName
 * @var string                 $checkboxValue
 * @var string                 $unit
 * @var array                  $inputOptions
 * @var string                 $errorString
 * @var array                  $items
 * @var bool                   $isRtl
 */

echo $this->render("@vendor/hgh/yii-advance-input/src/views/core/header", [
    "model"           => $model,
    "form"            => $form,
    "label"           => $label,
    "name"            => $name,
    "options"         => $options,
    "description"     => $description,
    "wrapperOptions"  => $wrapperOptions,
    "checkbox"        => $checkbox,
    "checkboxOptions" => $checkboxOptions,
    "checkboxValue"   => $checkboxValue,
    "icon"            => $icon,
    "checkboxName"    => $checkboxName,
    "isRtl"           => $isRtl
]);
if ($checkbox && !empty($checkboxOptions))
    echo $this->render("@vendor/hgh/yii-advance-input/src/views/core/checkboxElement", [
        "checkbox"        => $checkbox,
        "checkboxOptions" => $checkboxOptions,
        "checkboxName"    => $checkboxName,
        "checkboxValue"   => $checkboxValue
    ]);
echo $this->render("@vendor/hgh/yii-advance-input/src/views/core/dropDownElement", [
    "form"         => $form,
    "model"        => $model,
    "name"         => $name,
    "inputOptions" => $inputOptions,
    "value"        => $value,
    "errorString"  => $errorString,
    "items"        => $items
]);
echo $this->render("@vendor/hgh/yii-advance-input/src/views/core/footer", [
    "model"          => $model,
    "form"           => $form,
    "wrapperOptions" => $wrapperOptions,
    "unit"           => $unit,
    "errorString"    => $errorString
]);