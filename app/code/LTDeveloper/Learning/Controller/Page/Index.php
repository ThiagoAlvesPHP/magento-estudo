<?php
namespace LTDeveloper\Learning\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

use LTDeveloper\Learning\Api\ColorInterface;
use LTDeveloper\Learning\Api\SizeInterface;

use LTDeveloper\Learning\Model\Product\Shoe;
use LTDeveloper\Learning\Model\Product\Shirt;

class Index extends Action
{
    private $pageFactory;

    protected $size;
    protected $color;
    protected $product;
    protected $shirt;

    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        SizeInterface $size,
        ColorInterface $color,
        Shoe $product,
        Shirt $shirt
        )
    {
        $this->pageFactory = $pageFactory;
        $this->size = $size;
        $this->color = $color;
        $this->product = $product;
        $this->shirt = $shirt;
        parent::__construct($context);
    }

    public function execute() {

        // echo $this->product->getShoe();
        echo '<pre>';
        print_r($this->shirt);

        // return $this->pageFactory->create();
    }
}
