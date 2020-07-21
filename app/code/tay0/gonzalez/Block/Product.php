<?php
namespace tay0\gonzalez\Block;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ProductRepository;
class Product extends Template{
    protected $CollectionFactory;
    protected $ProductRepository;
    public function __construct(Template\Context $context,CollectionFactory $CollectionFactory,ProductRepository $ProductRepository )
    {
        $this->CollectionFactory = $CollectionFactory;
        $this->ProductRepository = $ProductRepository;
//
        parent::__construct($context);
    }
    public function GetProduct()
    {
        return $this->CollectionFactory->create()->addAttributetoFilter('is_special','yes');

    }
    public function getProductBySku($sku)
    {
        return $this->ProductRepository->get($sku);
    }
}
