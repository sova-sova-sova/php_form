<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class VideoPicker extends Input {

    /** @var string $src путь к уже ранее загруженного видео, для отображения */
    protected $src = '';
    /** @var string $upload_url ссылка для загрузки нового файла */
    protected $upload_url = '';
    /** @var array $ajax_data дополнительные данные для отправки дополнительных данных */
    protected $ajax_data = [];

    /**
     * Установка пути к уже ранее загруженного видео
     * @param string $src путь к уже ранее загруженного видео
     * @return VideoPicker
     */
    public function setSrc(string $src) {
        $this->src = $src;
        return $this;
    }

    /**
     * Установка ссылки для загрузки нового файла
     * @param string $upload_url ссылка для загрузки нового файла
     * @return VideoPicker
     */
    public function setUploadUrl(string $upload_url) {
        $this->upload_url = $upload_url;
        return $this;
    }

    /**
     * Установка данных для отправки дополнительных данных
     * @param array $ajax_data
     * @return VideoPicker
     */
    public function setAjaxData(array $ajax_data)
    {
        $this->ajax_data = $ajax_data;
        return $this;
    }




    protected function getType(): int { return EType::VIDEO; }

    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['src']        = $this->src;
        $res['input_opt']['upload_url'] = $this->upload_url;
        $res['input_opt']['ajax_data']  = $this->ajax_data;
        return $res;
    }
}
