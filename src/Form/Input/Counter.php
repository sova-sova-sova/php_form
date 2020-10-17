<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Counter extends Input {
    protected function getType(): int { return EType::COUNTER; }

    /** @var double $min минимальное значение */
    protected $min;
    /** @var double $max максимальное значение */
    protected $max;
    /** @var double $step шаг в счётчике */
    protected $step;

    /**
     * установка минимального значение
     * @param float $min минимальное значение
     * @return Counter
     */
    public function setMin(float $min)     {
        $this->min = $min;
        return $this;
    }

    /**
     * установка максимакльного значения
     * @param float $max максимальное значение
     * @return Counter
     */
    public function setMax(float $max) {
        $this->max = $max;
        return $this;
    }

    /**
     * установка шага в счётчике
     * @param float $step шаг в счётчике
     * @return Counter
     */
    public function setStep(float $step) {
        $this->step = $step;
        return $this;
    }

    public function toJSON(): array {
        $res = parent::toJSON();
        if(isset($this->min))  $res['input_opt']['min']  = $this->min;
        if(isset($this->max))  $res['input_opt']['max']  = $this->max;
        if(isset($this->step)) $res['input_opt']['step'] = $this->step;
        return $res;
    }
}
