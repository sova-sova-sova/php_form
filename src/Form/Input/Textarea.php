<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Textarea extends Input {

    /** @var bool $auto_height высота у поля ввода автоматическая или нет */
    protected $auto_height = false;

    /**
     * Установка вклчённости авто высаоты
     * @param bool $auto_height включена ли автовысота
     * @return Textarea
     */
    public function setAutoHeight(bool $auto_height) {
        $this->auto_height = $auto_height;
        return $this;
    }

    protected function getType(): int { return EType::TEXTAREA; }
    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['auto_height'] = true;
        return $res;
    }
}
