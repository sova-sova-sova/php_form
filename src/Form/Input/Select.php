<?php

namespace ModuleBZ\Form\Input;

use ModuleBZ\Form\enum\EType;
use ModuleBZ\Form\Input;

class Select extends Input {

    /** @var bool $multiple множественный ли выбор */
    protected $multiple = false;
    /** @var bool $search нужен ли поиск */
    protected $search = false;
    /** @var array $options варианты выбора */
    protected $options = [];
    /** @var bool $ajax поиск с ajax */
    protected $ajax = false;
    /** @var array $ajax_data данные для поиска */
    protected $ajax_data;
    /** @var string $ajax_url ссылка для ajax запросов */
    protected $ajax_url = '';
    /** @var bool Можно ли добавлять новые сущности названием */
    protected $can_add_value = false;

    /**
     * Установка необходимости множественного выбора
     * @param bool $multiple множественный ли выбор
     * @return Select
     */
    public function setMultiple(bool $multiple) {
        $this->multiple = $multiple;
        return $this;
    }

    /**
     * Установка необходимости поиска
     * @param bool $search нужен ли поиск
     * @return Select
     */
    public function setSearch(bool $search) {
        $this->search = $search;
        return $this;
    }

    /**
     * Установка варантов выбора
     * @param array $options список вариантов ['id'=>number,'title'=>string]
     * @return Select
     */
    public function setOptions(array $options) {
        $this->options = $options;
        return $this;
    }

    /**
     * Установка необходимости поиска через ajax
     * @param bool $ajax нужен ли поиск через ajax
     * @return Select
     */
    public function setAjax(bool $ajax) {
        $this->ajax = $ajax;
        return $this;
    }

    /**
     * Установка данных для ajax запроса
     * @param array $ajax_data данные для запроса
     * @return Select
     */
    public function setAjaxData(array $ajax_data) {
        $this->ajax_data = $ajax_data;
        return $this;
    }

    /**
     * Установка ссылки для ajax запросов
     * @param string $ajax_url ссылка для ajax запросов
     * @return Select
     */
    public function setAjaxUrl(string $ajax_url) {
        $this->ajax_url = $ajax_url;
        return $this;
    }

    /**
     * @param bool $can_add_value
     * @return Select
     */
    public function setCanAddValue(bool $can_add_value): Select
    {
        $this->can_add_value = $can_add_value;
        return $this;
    }


    protected function getType(): int {
        if($this->ajax)     return EType::SELECT_AJAX;
        if($this->multiple) return EType::SELECT_MULTI;
        if($this->search)   return EType::SELECT_SEARCH;
        return EType::SELECT;
    }
    public function toJSON(): array {
        $res = parent::toJSON();
        $res['input_opt']['multiple']       = $this->multiple;
        $res['input_opt']['search']         = $this->search;
        $res['input_opt']['options']        = $this->options;
        $res['input_opt']['ajax']           = $this->ajax;
        $res['input_opt']['ajax_data']      = $this->ajax_data;
        $res['input_opt']['ajax_url']       = $this->ajax_url;
        $res['input_opt']['can_add_value']  = $this->can_add_value;
        return $res;
    }
}
