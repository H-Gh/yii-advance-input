<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:11 AM
 */

namespace Hgh\YiiAdvanceInput\Classes\Input\Checkbox\WithValueInput;


use Hgh\YiiAdvanceInput\Classes\Input\Checkbox\WithValueInput;

/**
 * Class DropDown
 * @package Hgh\YiiAdvanceInput\Classes\Input\Checkbox\WithValueInput
 */
class Dropdown extends WithValueInput
{
    /** @var array $items */
    public $items;


    /**
     * @throws \yii\base\InvalidConfigException
     * @throws \Exception
     */
    public function init()
    {
        if (empty($this->items) || !is_array($this->items))
            throw new \Exception("Items property pm dropdown style should provide and be an array");
        parent::init();
    }

    /**
     * @return array
     */
    protected function getPassVariables()
    {
        return array_merge(
            parent::getPassVariables(),
            ["items" => $this->items]
        );
    }

    /**
     * @return string
     */
    protected function getViewName()
    {
        return "@vendor/hgh/yii-advance-input/src/views/input/inputWithCheckbox/dropDownInput";
    }
}