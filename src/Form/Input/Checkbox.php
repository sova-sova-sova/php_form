<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Checkbox extends Input {


    /** @var bool $checked включён ли флажок */
    protected $checked = false;

    /**
     * установка включённости флажка
     * @param bool $checked включён ли флажок
     * @return Checkbox
     */
    public function setChecked(bool $checked) {
        $this->checked = $checked;
        return $this;
    }

    protected function getType(): int { return EType::CHECKBOX; }
    public function toJSON(): array {
        $res =  parent::toJSON();
        $res['input_opt']['checked'] = $this->checked;
        return $res;
    }
}
