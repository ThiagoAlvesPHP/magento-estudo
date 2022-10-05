<?php

namespace LTDeveloper\Theme\Block;

// extend Tamplate in block
use Magento\Framework\View\Element\Template;

class CustomContent extends Template
{


    public function myFirstCustomMethod()
    {
        return "MY FIRST CUSTOM METHOD";
    }

    public function mySecondCustomMethod()
    {
        return "MY SECOND CUSTOM METHOD";
    }
}
