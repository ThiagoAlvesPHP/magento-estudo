<?php

namespace LTDeveloper\Learning\Model;

use LTDeveloper\Learning\Api\ColorInterface;

class ColorWhite implements ColorInterface
{
    public function getColor()
    {
        return "White";
    }
}
