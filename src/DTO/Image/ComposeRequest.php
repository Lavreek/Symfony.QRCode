<?php

namespace App\DTO\Image;

use App\Const\QRConst;
use LAVREEK\Library\Request\RequestReceive;

/**
 * Объект передачи данных для создания QR кода.
 */
class ComposeRequest extends RequestReceive
{
    /** @var null|string Ссылка для формирования QR кода. */
    public ?string $link = null;

    /** @var bool Сохранить данные о созданном QR коде. */
    public bool $store = false;

    /** @var string Стандартный формат формирования ответа. */
    public string $response = QRConst::DEFAULT_RESPONSE;

    /** @var FormatProperties|null Дополнительные настройки файла. */
    public ?FormatProperties $format = null;

    /** @var MetaProperties|null Дополнительные данные для формирования. */
    public ?MetaProperties $meta = null;
}
