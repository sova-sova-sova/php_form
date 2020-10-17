<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Gallery extends Input {
    protected function getType(): int { return EType::Gallery; }

    /** @var string $upload_url ссылка для загрузки нового файла */
    protected $upload_url = '';
    /** @var array $upload_url данные для ajax запроса */
    protected $ajax_data = [];

    /**
     * @param array $ajax_data
     * @return Gallery
     */
    public function setAjaxData(array $ajax_data)
    {
        $this->ajax_data = $ajax_data;
        return $this;
    }


    /**
     * Установка ссылки для загрузки нового файла
     * @param string $upload_url ссылка для загрузки нового файла
     * @return Gallery
     */
    public function setUploadUrl(string $upload_url) {
        $this->upload_url = $upload_url;
        return $this;
    }

    /**
     * @param array $value
     * @return Input
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['ajax_data'] = $this->ajax_data;
        $res['input_opt']['upload_url'] = $this->upload_url;
        return $res;
    }
}
