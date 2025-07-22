<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Text extends Input {
    /** @var ?string Маска ввода  */
    var $mask = null;
    /** @var array $options варианты выбора */
    protected $options = [];

    protected function getType(): int { return EType::TEXT; }

    /**
     * Установка варантов выбора
     * @param array $options список вариантов ['id'=>number,'title'=>string]
     * @return Text
     */
    public function setOptions(array $options) {
        $this->options = $options;
        return $this;
    }


    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['mask']    = $this->mask;
        $res['input_opt']['options'] = $this->options;
        return $res;
    }
    /**
     * @param string|null $mask
     * @return Text
     */
    public function setMask(string $mask): Text
    {
        $this->mask = $mask;
        return $this;
    }



}
