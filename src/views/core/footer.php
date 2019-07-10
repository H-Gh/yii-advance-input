<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:20 AM
 */

/**
 * @var $this \yii\Web\View
 * @var $unit string
 * @var $wrapperOptions array
 */

use yii\helpers\Html;

if (!empty($unit))
    echo Html::tag("div", $unit, ["class" => "unit"]);
echo Html::endTag("div");
if (!empty($wrapperOptions))
    echo Html::endTag("div");
echo Html::endTag("div");
