<?php

use ModuleBZ\Form;
use ModuleBZ\Form\Input\Checkbox;
use ModuleBZ\Form\Input\ColorPicker;
use ModuleBZ\Form\Input\ImagePicker;
use ModuleBZ\Form\Input\Text;
use ModuleBZ\Layout\Row;
use \ModuleBZ\Layout\Column;
use \ModuleBZ\Layout\Title;
include_once("../vendor/autoload.php");

$form = (new Form())
    ->setValues(['a'=>'b'])
    ->addRow(
        (new Row())
        ->addColumn(
            (new Text())
                ->setValue('Hello')
                ->setName('text')
                ->setPlaceholder('Введите текст')
        )
        ->addColumn(
            (new Checkbox())
                ->setValue('Hello')
                ->setName('text')
                ->setPlaceholder('Введите текст')
                ->setChecked(true)
        )
        ->addColumn(
            (new ImagePicker())
                ->setValue('Hello')
                ->setName('text')
                ->setPlaceholder('Введите текст')
                ->setUploadUrl('asdasd')
        )
        ->addColumn(
            (new ColorPicker())
                ->setValue('#fff00000')
                ->setName('text')
                ->setPlaceholder('Введите текст')
        )
        //->addColumn( (new Column())->addTitle(new Title('Дарова'))->setAllClass('c-1-3') )
        //->addColumn( (new Column())->setAllClass('c-1-3')->addInput(new Form\Input()) )
    )
;

echo '<pre>';
var_dump($form->toJSON());
echo '</pre>';
