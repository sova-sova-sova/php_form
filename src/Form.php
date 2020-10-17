<?php

namespace ModuleBZ;

use ModuleBZ\Form\Input;
use ModuleBZ\Layout\Layout;
use ModuleBZ\Layout\Row;

class Form extends Layout{
    /** @var array Массива значений для полей ввода */
    var $values = [];

    /** @var Layout[]  */
    var $inputs = [];

    /**
     * @param array $arr Функция для установки новых значений полей ввода
     * @return Form
     */
    public function setValues(array $arr = []){
        $this->values += $arr;
        return $this;
    }

    /**
     * @param Input $input добавление поля ввода без обрамления в строку и столбец
     * @return $this
     */
    public function addInput(Input $input){
        $this->inputs[] = $input;
        return $this;
    }

    /**
     * @param Row $row добавление строки в форму
     * @return $this
     */
    public function addRow(Row $row){
        $this->inputs[] = $row;
        return $this;
    }
    public function toJSON():array{
        return [
            'values'=>$this->values,
            'inputs'=>array_map(function($v){return $v->toJSON();},$this->inputs),
        ];
    }
}
