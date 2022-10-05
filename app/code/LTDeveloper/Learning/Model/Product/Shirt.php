<?php

namespace LTDeveloper\Learning\Model\Product;

class Shirt
{
    protected $typeText;
    protected $typeNumber;
    protected $typeArray = [];
    protected $typeInitParameter;

    const MY_CONSTANT = "MY CUSTOM CONTANT";

    public function __construct(
        $typeText = 'my string',
        $typeNumber = 2022,
        $typeArray = ["customName" => "Thiago", "customColor" => "Orange"],
        $typeInitParameter = self::MY_CONSTANT
    )
    {
        $this->typeText = $typeText;
        $this->typeNumber = $typeNumber;
        $this->typeArray = $typeArray;
        $this->typeInitParameter = $typeInitParameter;
    }
}
