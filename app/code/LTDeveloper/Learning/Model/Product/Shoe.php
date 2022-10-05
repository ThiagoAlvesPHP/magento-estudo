<?php

namespace LTDeveloper\Learning\Model\Product;

use LTDeveloper\Learning\Api\ColorInterface;
use LTDeveloper\Learning\Api\SizeInterface;

class Shoe
{
    protected $size;
    protected $color;

    public function __construct(ColorInterface $color, SizeInterface $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getShoe()
    {
        return "My Shoe is {$this->size->getSize()} and {$this->color->getColor()}";
    }
}
