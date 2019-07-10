<?php
/**
 * User: h.ghasempour
 * Date: 12/27/2017
 * Time: 5:07 PM
 */

namespace Hgh\YiiAdvanceInput\Assets;

/**
 * Class YiiAdvanceInputAsset
 * @package Hgh\YiiAdvanceInput\assets
 */
class YiiAdvanceInputAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/hgh/yii-advance-input/src/res';

    public $css = [
        'css/advance-input.css'
    ];

    public $js = [
        'js/advance-input.js'
    ];

    public $depends = [
        'Hgh\YiiBootstrapToggle\YiiBootstrapToggleAsset'
    ];

    /**
     * @return void
     */
    public function rtl()
    {
        $this->css[] = [
            'css/advance-input-rtl.css'
        ];
    }

    /**
     * @return void
     */
    public function ltr()
    {
        $this->css[] = [
            'css/advance-input-ltr.css'
        ];
    }
}