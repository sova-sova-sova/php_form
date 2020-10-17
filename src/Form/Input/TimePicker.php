<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class TimePicker extends Input {
    protected function getType(): int { return EType::TIME; }
}
