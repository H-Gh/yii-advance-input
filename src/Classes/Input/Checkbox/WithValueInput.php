<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:11 AM
 */

namespace Hgh\YiiAdvanceInput\Classes\Input\Checkbox;

use Hgh\YiiAdvanceInput\Classes\Input\Checkbox;

/**
 * Class WithValueInput
 * @package Hgh\YiiAdvanceInput\Classes\Input\Checkbox
 */
class WithValueInput extends Checkbox
{
    /** @var string $value */
    public $value;
    /** @var array $inputOptions */
    public $inputOptions;
    /** @var mixed $attributeValue */
    protected $attributeValue;
    /** @var bool $checkbox */
    public $checkbox = false;

    /**
     * @return void
     * @throws \yii\base\InvalidConfigException
     * @throws \ReflectionException
     */
    public function init()
    {
        parent::init();
        $this->attributeValue = $this->attributeValue($this->name);
        $this->checkboxName = $this->getCheckboxName($this->name);
        if (!isset($this->wrapperOptions["class"]))
            $this->wrapperOptions["class"] = "";
        $this->wrapperOptions["class"] .= " with-input";
        $this->inputOptions["id"] = $this->getNameWithDashSeparator($this->name);
        if ($this->checkbox && !empty($this->checkboxOptions) && empty($this->attributeValue))
            $this->inputOptions["disabled"] = "disabled";
        else
            $this->checkboxValue = true;
    }

    /**
     * @param string $name
     * @return string
     * @throws \ReflectionException
     */
    protected function getCheckboxName($name)
    {
        $checkboxName = parent::getCheckboxName($name);

        return preg_replace("/(.+)\[([^\[\]]+)\]$/i", '$1[$2-checkbox]', $checkboxName);
    }

    /**
     * @return array
     */
    protected function getPassVariables()
    {
        return array_merge(
            parent::getPassVariables(),
            [
                "value"        => $this->attributeValue,
                "inputOptions" => $this->inputOptions
            ]
        );
    }
}