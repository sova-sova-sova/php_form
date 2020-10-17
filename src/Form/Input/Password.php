<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Password extends Input {
    protected function getType(): int { return EType::PASSWORD; }
}
