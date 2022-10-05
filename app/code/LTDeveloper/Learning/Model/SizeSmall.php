<?php

namespace LTDeveloper\Learning\Model;

use LTDeveloper\Learning\Api\SizeInterface;

class SizeSmall implements SizeInterface
{
    public function getSize()
    {
        return "Small";
    }
}
