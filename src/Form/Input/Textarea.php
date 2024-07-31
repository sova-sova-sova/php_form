<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Textarea extends Input {

    /** @var bool $auto_height высота у поля ввода автоматическая или нет */
    protected $auto_height = true;

    /** @var bool is_html_editor это редактор html */
    protected $is_html_editor = false;

    /** @var string $TinyMCEApiKey api ключ от TinyMCE */
    protected $TinyMCEApiKey = '';

    /** @var string $TinyMCEImageUploadUrl ссылка для загрузки изображений */
    protected $TinyMCEImageUploadUrl = '';

    /**
     * Установка включённости авто высоты
     * @param bool $auto_height включена ли автовысота
     * @return Textarea
     */
    public function setAutoHeight(bool $auto_height) {
        $this->auto_height = $auto_height;
        return $this;
    }

    /**
     * Установка значения, можно ли текст редактировать как html
     * @param bool $is_html_editor
     * @return $this
     */
    public function setIsHtmlEditor(bool $is_html_editor) {
        $this->is_html_editor = $is_html_editor;
        return $this;
    }

    /**
     * Установка api-ключ от TinyMCE
     * @param string $TinyMCEApiKey
     * @return $this
     */
    public function setTinyMCEApiKey(string $TinyMCEApiKey) {
        $this->TinyMCEApiKey = $TinyMCEApiKey;
        return $this;
    }
    /**
     * Установка ссылки для загрузки изображения для TinyMCE
     * @param string $TinyMCEImageUploadUrl
     * @return $this
     */
    public function setTinyMCEImageUploadUrl(string $TinyMCEImageUploadUrl) {
        $this->TinyMCEImageUploadUrl = $TinyMCEImageUploadUrl;
        return $this;
    }


    protected function getType(): int { return EType::TEXTAREA; }
    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['auto_height'] = $this->auto_height;
        $res['input_opt']['is_html_editor'] = $this->is_html_editor;
        $res['input_opt']['TinyMCEApiKey'] = $this->TinyMCEApiKey;
        $res['input_opt']['TinyMCEImageUploadUrl'] = $this->TinyMCEImageUploadUrl;
        return $res;
    }
}
