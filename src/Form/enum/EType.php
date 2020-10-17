<?

namespace ModuleBZ\Form\enum;

class EType{
    const HIDDEN               = 1;  // Поле ввода типа Hidden
    const TEXT                 = 2;  // Обычное однострочное поле ввода типа text
    const SELECT               = 3;  // Обычное простое ниспадающее меню с заданным списком
    const DATE                 = 4;  // Поле выбора даты
    const SELECT_SEARCH        = 5;  // Ниспадающее меню с поиском, без ajax, с заданным списком
    const SUBMIT               = 6;  // Кнопка сохранения формы
    const SELECT_MULTI         = 7;  // Ниспадающее меню с множественным выбором, без ajax, с заданным списком
    const DATE_RANGE_TIME      = 8;  // Выбор периода вместе со временем
    const DATE_TIME            = 9;  // Выбор даты вместе со временем
    const TEXTAREA             = 10; // Обычное многстрочное поле ввода
    const CHECKBOX             = 11; // Булевое поле ввода "галочка"
    const YANDEX_COUNTRY_CITY  = 12; // Поле ввода города и страны с помощью яндекса
    const SWITCH_IOS           = 13; // Булевое поле ввода типа как в ios переключатель
    const COLOR_PICKER         = 14; // Выбор цвета
    const AVATAR_PICKER        = 15; // Выбор автарки
    const SELECT_AJAX          = 16; // Ниспадающее меню с множественным выбором, с ajax
    const CANCEL               = 17; // Кнопка отмены сохранения формы
    const EMAIL                = 18; // Обычное однострочное поле ввода типа mail
    const SCRIPT               = 19; // Скрипт для инициализации чего-нибудь
    const HTML                 = 20; // Вставка какого-либо html-контента
    const IMAGE                = 21; // Подгрузка картинки
    const RADIO                = 22; // Выбор одного из множества
    const VIDEO                = 23; // Видео
    const CONTACTS             = 24; // Контакты
    const SUBMIT_AND_CLOSE     = 25; // Кнопка сохранения формы и закрытия карточки
    const SHOP_ITEM_VALUES     = 26; // Поле ввода для выбора свойств товара
    const CATEGORY_CHOOSE      = 27; // Поле ввода выбора вложенных категорий
    const PASSWORD             = 28; // Поле ввода пароля
    const DADATA_ADDRESS       = 29; // Поле поиска адреса через Dadata
    const DSEK_FILES           = 30; // Поле ввода загрузки файлов для темы DSEK
    const KPTRACKING_FILE      = 31; // Поле ввода загрузки файла для темы KPTracking
    const SOVA_ORDER_STATUS    = 32; // Поле ввода выбора статуса заказа для Sova
    const DATE_RANGE           = 33; // Поле ввода выбора двух дат
    const TIME                 = 34; // Поле ввода времмени
    const COUNTER              = 35; // Счётчик
    const Gallery              = 36; // Галерея
}
