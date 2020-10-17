<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class DatePicker extends Input {

    /** @var bool $timepicker нужно ли выбирать время */
    public $timepicker = false;
    /** @var bool $range нужно ли выбирать диапозон дат */
    public $range = false;

    /**
     * установка необходимости выбора ещё и времени
     * @param bool $timepicker нужно ли выбирать время
     * @return DatePicker
     */
    public function setTimepicker(bool $timepicker) {
        $this->timepicker = $timepicker;
        return $this;
    }

    /**
     * установка необходимости выбора диапозона дат
     * @param bool $range нужно ли выбирать диапозон дат
     * @return DatePicker
     */
    public function setRange(bool $range) {
        $this->range = $range;
        return $this;
    }

    protected function getType(): int {
        if($this->timepicker || $this->range){
            if($this->range){
                return ($this->timepicker) ? EType::DATE_RANGE_TIME : EType::DATE_RANGE;
            } else {
                return EType::DATE_TIME;
            }
        } else {
            return EType::DATE;
        }
    }

    public function toJSON(): array {
        $res =  parent::toJSON();
        $res['input_opt']['timepicker'] = $this->timepicker;
        $res['input_opt']['range']      = $this->range;
        return $res;
    }
}
