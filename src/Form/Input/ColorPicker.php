<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class ColorPicker extends Input {

    protected function getType(): int { return EType::COLOR_PICKER; }

}
