<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:20 AM
 */

/**
 * @var  \yii\Web\View         $this
 * @var yii\widgets\ActiveForm $form
 * @var \yii\base\Model        $model
 * @var string                 $label
 * @var string                 $name
 * @var array                  $options
 * @var string                 $description
 * @var array                  $wrapperOptions
 * @var string                 $icon
 * @var bool                   $isRtl
 */

use yii\helpers\Html;

$yiiAdvanceInputAsset = \Hgh\YiiAdvanceInput\assets\YiiAdvanceInputAsset::register($this);
if ($isRtl)
    $yiiAdvanceInputAsset->rtl();
else
    $yiiAdvanceInputAsset->ltr();

echo Html::beginTag("div", ["class" => "advance-input"]);
if ((empty($label) && $label !== false) && !empty($model)) {
    $attributeLabels = $model->attributeLabels();
    if (isset($attributeLabels[$name]))
        echo Html::tag("label", $attributeLabels[$name], ["for" => $options["id"]]);
}
elseif (!empty($label))
    echo Html::tag("label", $label, ["for" => $options["id"]]);
if (!empty($description))
    echo Html::tag("div", $description, ["class" => "description"]);
if (isset($wrapperOptions))
    echo Html::beginTag("div", $wrapperOptions);
echo Html::beginTag("div", ["class" => "advance-input-holder field-" . $options["id"]]);
if (!empty($icon)) {
    echo Html::beginTag("div", ["class" => "icon", "id" => $options["id"] . "-btn"]);
    echo Html::tag("i", "", ["class" => $icon]);
    echo Html::endTag("div");
}