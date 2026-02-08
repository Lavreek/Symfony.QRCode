<?php

namespace App\Const;

use App\Enum\Image\FormatEnum;
use App\Enum\Image\ResponseEnum;

/**
 * Константы стандартных настроек для формирования QR кода.
 */
class QRConst
{
    /** @var string Стандартный формат файла. */
    const string DEFAULT_FORMAT_TYPE = FormatEnum::PNG->value;

    /** @var string Стандартный ответ для формирования QR кода. */
    const string DEFAULT_RESPONSE = ResponseEnum::JSON->value;

    /** @var int Размер белой границы. */
    const int MARGIN = 30;

    /** @var int Размер формируемого изображения. */
    const int SIZE = 200;
}
