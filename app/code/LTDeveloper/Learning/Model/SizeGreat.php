<?php

namespace LTDeveloper\Learning\Model;

use LTDeveloper\Learning\Api\SizeInterface;

class SizeGreat implements SizeInterface
{
    public function getSize()
    {
        return "Great";
    }
}
