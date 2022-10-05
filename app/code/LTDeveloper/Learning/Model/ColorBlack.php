<?php

namespace LTDeveloper\Learning\Model;

use LTDeveloper\Learning\Api\ColorInterface;

class ColorBlack implements ColorInterface
{
    public function getColor()
    {
        return "Black";
    }
}
