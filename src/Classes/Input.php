<?php
/**
 * User: h.ghasempour
 * Date: 11/15/2018
 * Time: 11:11 AM
 */

namespace Hgh\YiiAdvanceInput\Classes;


use extensions\Helper\Helper;
use yii\base\InvalidConfigException;
use yii\base\Model;
use yii\base\Widget;
use yii\widgets\ActiveForm;

/**
 * Class Input
 * @package Hgh\YiiAdvanceInput\Classes
 */
abstract class Input extends Widget
{
    /** @var string $name */
    public $name;
    /** @var ActiveForm $form */
    public $form;
    /** @var Model $model */
    public $model;
    /** @var array $wrapperOptions */
    public $wrapperOptions;
    /** @var string $label */
    public $label;
    /** @var string $unit */
    public $unit;
    /** @var string $unit */
    public $description;
    /** @var string $name */
    public $icon;
    /** @var bool $isRtl */
    public $rtl = false;
    /** @var array $options */
    protected $options;

    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        parent::init();
        if (!isset($this->name))
            throw new InvalidConfigException("The \"name\" field should be exists.");
        if (!empty($this->form) && empty($this->model))
            throw new InvalidConfigException('If you are using "$form", you have to pass "$model" too.');
        if (!empty($this->model) && empty($this->form))
            throw new InvalidConfigException('If you are using "$model", you have to pass "$form" too.');
        $this->options["id"] = $this->getNameWithDashSeparator($this->name);
        if (isset($this->options["rtl"]))
            $this->rtl = true;
        if (!empty($this->icon)) {
            if (!isset($this->wrapperOptions["class"]))
                $this->wrapperOptions["class"] = "";
            $this->wrapperOptions["class"] .= " with-icon";
        }

    }

    /**
     * Executes the widget.
     * @return string the result of widget execution to be outputted.
     */
    public function run()
    {
        return $this->render($this->getViewName(), $this->getPassVariables());
    }

    /**
     * @return array
     */
    protected function getPassVariables()
    {
        return [
            "options"        => $this->options,
            "name"           => $this->name,
            "form"           => $this->form,
            "model"          => $this->model,
            "label"          => $this->label,
            "unit"           => $this->unit,
            "description"    => $this->description,
            "icon"           => $this->icon,
            "errorString"    => $this->getErrorString(),
            "wrapperOptions" => $this->wrapperOptions,
            "isRtl"          => $this->rtl,
        ];
    }


    /**
     * @return string
     */
    private function getErrorString()
    {
        $errorString = "";
        if (!empty($this->model))
            foreach ($this->model->getErrors($this->name) as $error)
                $errorString .= $error . "<br>";

        if (!empty($errorString))
            $this->wrapperOptions["class"] .= " has-error";

        return $errorString;
    }

    /**
     * @param string $name
     * @return string
     */
    protected function getNameWithDashSeparator($name)
    {
        $dashedName = strtolower(strtolower(str_replace("[", "-", str_replace("]", "", $name))));
        if (!empty($this->model)) {
            $modelName = strtolower(Helper::getClassName(get_class($this->model)));
            $nameWithoutModelName = trim(str_replace($modelName, "", $dashedName), "-");

            return $modelName . "-" . $nameWithoutModelName;
        }

        return $dashedName;
    }

    /**
     * @return string
     */
    abstract protected function getViewName();
}