<?php

namespace App\Enum\Image;

/**
 * Перечисление доступных форматов для обработки.
 */
enum FormatEnum: string
{
    /** Формат файла PNG. */
    case PNG = 'png';

    /** Формат файла SVG. */
    case SVG = 'svg';
}
