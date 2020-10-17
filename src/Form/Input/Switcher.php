<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Switcher extends Input {

    /** @var bool $checked включён ли переключатель */
    protected $checked = false;

    /**
     * Установка включённости переключателя
     * @param bool $checked включён ли переключатель
     * @return Switcher
     */
    public function setChecked(bool $checked) {
        $this->checked = $checked;
        return $this;
    }

    protected function getType(): int { return EType::SWITCH_IOS; }

    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['checked'] = $this->checked;
        return $res;
    }
}
