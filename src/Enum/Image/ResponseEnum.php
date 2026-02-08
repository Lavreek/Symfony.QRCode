<?php

namespace App\Enum\Image;

/**
 * Перечисление доступных значений для формирования ответов.
 */
enum ResponseEnum: string
{
    /** Формат ответа JSON. */
    case JSON = 'json';

    /** Формат ответа FILE. */
    case FILE = 'file';
}
