<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Submit extends Input {
    /** @var string className для кнопки. Обычно для submit это blue */
    var $class_name = '';

    /**
     * Установка className для кнопки
     * @param string $class_name
     * @return Submit
     */
    public function setClassName(string $class_name) {
        $this->class_name = $class_name;
        return $this;
    }

    protected function getType(): int { return EType::SUBMIT; }

    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['className']  = $this->class_name;
        return $res;
    }
}
