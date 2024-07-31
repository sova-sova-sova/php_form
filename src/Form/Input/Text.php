<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Text extends Input {
    /** @var ?string Маска ввода  */
    var $mask = null;

    protected function getType(): int { return EType::TEXT; }

    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['mask'] = $this->mask;
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
