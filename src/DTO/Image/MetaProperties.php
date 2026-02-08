<?php

namespace App\DTO\Image;

use App\Const\QRConst;
use LAVREEK\Library\Request\VariableReceive;

/**
 * Объект передачи данных для дополнительных данных при формировании QR кода.
 */
class MetaProperties extends VariableReceive
{
    /** @var int Размер белой границы. */
    public int $margin = QRConst::MARGIN;

    /** @var int Размер формируемого изображения. */
    public int $size = QRConst::SIZE;
}
