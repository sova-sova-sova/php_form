<?php

namespace ModuleBZ\Form;

use ModuleBZ\Layout\Input as LayoutInput;

class Input extends LayoutInput {

    /** @var string $label  Label для поля ввода */
    protected $label = '';

    /** @var string $placeholder  Placeholder для поля ввода */
    protected $placeholder = '';

    /** @var bool $disabled  Disabled поле */
    protected $disabled = false;

    /** @var bool $visible  Visible поле */
    protected $visible = false;

    /** @var string $name Аттрибут Name поля ввода, Ключ из массва VALUES для подстановки значения */
    protected $name = '';

    /** @var null $value Значение поле ввода */
    protected $value;

    /**
     * @param string $name Установка ключа аттрибут Name для поля ввода
     * @return Input
     */
    public function setName(string $name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $placeholder Установка Placeholder для поля ввода
     * @return Input
     */
    public function setPlaceholder(string $placeholder) {
        $this->placeholder = $placeholder;
        return $this;
    }
    /**
     * @param string $label Установка Placeholder для поля ввода
     * @return Input
     */
    public function setLabel(string $label) {
        $this->label = $label;
        return $this;
    }

    /**
     * @param null $value
     * @return Input
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * @param bool $disabled
     * @return Input
     */
    public function setDisabled(bool $disabled): Input
    {
        $this->disabled = $disabled;
        return $this;
    }

    /**
     * @param bool $visible
     * @return Input
     */
    public function setVisible(bool $visible): Input
    {
        $this->visible = $visible;
        return $this;
    }


    protected function getType():int{ return 0; }

    public function toJSON() : array {
        $res = parent::toJSON();
        $opt = [];
        $res['type'] = $this->getType();
        if($c = $this->name)  {
            $res['key_value'] = $c;
            $opt['name'] = $c;
        }
        $opt['value'] = $this->value;
        if($c = $this->name)        $opt['name']        = $c;
        if($c = $this->label)       $opt['label']       = $c;
        if($c = $this->placeholder) $opt['placeholder'] = $c;
        if($c = $this->disabled)    $opt['disabled']    = $c;
        if($c = $this->visible)     $opt['visible']    = $c;
        $res['input_opt'] = $opt;
        return $res;
    }
}
