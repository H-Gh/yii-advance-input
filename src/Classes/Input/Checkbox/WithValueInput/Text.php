<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:11 AM
 */

namespace Hgh\YiiAdvanceInput\Classes\Input\Checkbox\WithValueInput;


use Hgh\YiiAdvanceInput\Classes\Input\Checkbox\WithValueInput;

/**
 * Class TextInput
 * @package Hgh\YiiAdvanceInput\Classes\Input\Checkbox\WithValueInput
 */
class Text extends WithValueInput
{
    /**
     * @return string
     */
    protected function getViewName()
    {
        return "@vendor/hgh/yii-advance-input/src/views/input/inputWithCheckbox/textInput";
    }
}