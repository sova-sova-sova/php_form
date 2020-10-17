<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;


class Radio extends Input {

    /** @var array $options массив с вариантами */
    protected $options = [];

    /**
     * Установка списка вариантов
     * @param array $options список вариантов ['id'=>number,'title'=>string]
     * @return Radio
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
        return $this;
    }

    protected function getType(): int { return EType::RADIO; }
    public function toJSON(): array {
        $res =  parent::toJSON();
        $res['input_opt']['options'] = $this->options;
        return $res;
    }
}
