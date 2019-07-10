<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:11 AM
 */

namespace Hgh\YiiAdvanceInput\Classes\Input;


use Hgh\ClassHelper\ClassHelper;
use Hgh\YiiAdvanceInput\Classes\Input;

/**
 * Class Checkbox
 * @package Hgh\YiiAdvanceInput\Classes\Input
 */
class Checkbox extends Input
{
    /** @var bool $checkbox */
    public $checkbox = true;
    /** @var array $checkboxOptions */
    public $checkboxOptions;
    /** @var string $checkboxName */
    protected $checkboxName;
    /** @var bool $attributeValue */
    protected $checkboxValue = false;

    /**
     * @throws \ReflectionException
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();
        if ($this->checkbox) {
            $this->checkboxName = $this->getCheckboxName($this->name);
            $this->checkboxValue = $this->attributeValue($this->checkboxName);
            $this->checkboxOptions["id"] = $this->getNameWithDashSeparator($this->checkboxName);
            if (!isset($this->checkboxOptions["class"]))
                $this->checkboxOptions["class"] = "";
            $this->checkboxOptions["class"] .= " advance-input-checkbox";
            if (!isset($this->wrapperOptions["class"]))
                $this->wrapperOptions["class"] = "";
            $this->wrapperOptions["class"] .= " with-checkbox";
        }
    }

    /**
     * @param string $name
     * @return string|null
     * @throws \ReflectionException
     */
    protected function attributeValue($name)
    {
        $attributeNameFlow = $this->getAttributeNameFlow($name);
        if (!empty($this->model)) {
            $modelName = ClassHelper::getName($this->model);
            $modelPostValues = \Yii::$app->request->post($modelName);
            foreach ($attributeNameFlow as $index => $attribute) {
                if (isset($modelPostValues[$attribute])) {
                    if ($index + 1 == count($attributeNameFlow))
                        return $modelPostValues[$attribute];
                    $modelPostValues = $modelPostValues[$attribute];
                }
                else
                    break;
            }
        }
        else if (!empty($this->value))
            return $this->value;

        $currentModelAttribute = $this->model;
        foreach ($attributeNameFlow as $index => $attribute) {
            if (isset($currentModelAttribute->{$attribute}))
                $currentModelAttribute = $currentModelAttribute->{$attribute};
            else
                break;
            if ($index + 1 == count($attributeNameFlow))
                return $currentModelAttribute;
        }

        return null;
    }

    /**
     * @param string $name
     * @return string
     * @throws \ReflectionException
     */
    protected function getCheckboxName($name)
    {
        $attributeNameFlow = $this->getAttributeNameFlow($name);
//        $checkboxName = "";
//        if (!empty($this->model)) {
//            $modelName = ClassHelper::getName($this->model);
//            $checkboxName = $modelName;
//        }
//        foreach ($attributeNameFlow as $index => $attribute)
//            $checkboxName .= "[$attribute]";
//
//        return $checkboxName;
        if (count($attributeNameFlow) == 1)
            return $name . "-checkbox";

        return preg_replace("/\[([^\[]*)\]$/", $name, "[$1-checkbox]");
    }


    /**
     * @param string $name
     * @return array
     * @throws \ReflectionException
     */
    private function getAttributeNameFlow($name)
    {
        preg_match_all("/\[([^\[\]]+)\]/", $name, $match);
        if (empty($match[1]))
            return [$name];

        if (!empty($this->model)) {
            $modelNameIndex = array_search(ClassHelper::getName($this->model), $match[1]);
            if ($modelNameIndex !== false)
                unset($match[1][$modelNameIndex]);
        }

        return $match[1];
    }

    /**
     * @return array
     */
    protected function getPassVariables()
    {
        return array_merge(
            parent::getPassVariables(),
            [
                "checkboxName"    => $this->checkboxName,
                "checkboxValue"   => $this->checkboxValue,
                "checkbox"        => $this->checkbox,
                "checkboxOptions" => $this->checkboxOptions
            ]
        );
    }

    /**
     * @return string
     */
    protected function getViewName()
    {
        return "@vendor/hgh/yii-advance-input/src/views/input/checkboxInput";
    }
}