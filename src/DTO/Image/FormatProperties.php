<?php

namespace App\DTO\Image;

use App\Const\QRConst;
use LAVREEK\Library\Request\VariableReceive;

/**
 * Объект передачи данных для дополнительных данных при формировании QR кода.
 */
class FormatProperties extends VariableReceive
{
    public string $type = QRConst::DEFAULT_FORMAT_TYPE;
}
