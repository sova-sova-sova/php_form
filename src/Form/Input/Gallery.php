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


    /** @var bool можно ли скачивать файл */
    protected $is_download_enabled = true;
    /** @var bool можно ли загружать файл */
    protected $is_upload_enabled = true;
    /** @var bool можно ли удалять файл  */
    protected $is_remove_enabled = true;

    /**
     * @param array $ajax_data
     * @return Gallery
     */
    public function setAjaxData(array $ajax_data): Gallery
    {
        $this->ajax_data = $ajax_data;
        return $this;
    }


    /**
     * Установка ссылки для загрузки нового файла
     * @param string $upload_url ссылка для загрузки нового файла
     * @return Gallery
     */
    public function setUploadUrl(string $upload_url): Gallery
    {
        $this->upload_url = $upload_url;
        return $this;
    }

    /**
     * @param array $value
     * @return Gallery
     */
    public function setValue($value): Gallery
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param bool $is_download_enabled
     * @return Gallery
     */
    public function setIsDownloadEnabled(bool $is_download_enabled): Gallery
    {
        $this->is_download_enabled = $is_download_enabled;
        return $this;
    }

    /**
     * @param bool $is_upload_enabled
     * @return Gallery
     */
    public function setIsUploadEnabled(bool $is_upload_enabled): Gallery
    {
        $this->is_upload_enabled = $is_upload_enabled;
        return $this;
    }

    /**
     * @param bool $is_remove_enabled
     * @return Gallery
     */
    public function setIsRemoveEnabled(bool $is_remove_enabled): Gallery
    {
        $this->is_remove_enabled = $is_remove_enabled;
        return $this;
    }



    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['ajax_data'] = $this->ajax_data;
        $res['input_opt']['upload_url'] = $this->upload_url;
        $res['input_opt']['is_download_enabled'] = $this->is_download_enabled;
        $res['input_opt']['is_upload_enabled'] = $this->is_upload_enabled;
        $res['input_opt']['is_remove_enabled'] = $this->is_remove_enabled;
        return $res;
    }
}
