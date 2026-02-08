<?php

namespace App\DTO\Image;

use LAVREEK\Library\Request\RequestReceive;

/**
 * Объект передачи данных для создания QR кода.
 */
class ComposeRequest extends RequestReceive
{
    /** @var string Ссылка для формирования QR кода. */
    public string $link;

    /** @var MetaProperties|null Дополнительные данные для формирования. */
    public ?MetaProperties $meta = null;
}
