<?php

namespace tay0\gonzalez\Observer;

use Magento\Framework\Event\ObserverInterface;

class TopmenuHtmlGetAfter implements ObserverInterface
{
    /**
     * Parent layout of the block
     *
     * @var \Magento\Framework\View\LayoutInterface
     */
    protected $layout;

    /**
     * @param \Magento\Framework\View\LayoutInterface $layout
     */
    public function __construct(
        \Magento\Framework\View\LayoutInterface $layout
    ) {
        $this->layout = $layout;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        // TODO: Implement execute() method.
        $transportObject = $observer->getEvent()->getData('transportObject');
        if ($transportObject) {
            $textLinkHtml = $this->layout->createBlock('Magento\Framework\View\Element\Template')
                ->setTemplate('tay0_gonzalez::html/topmenu.phtml')->toHtml();
            $topmenuHtml = $transportObject->getHtml().$textLinkHtml;
            $transportObject->setHtml($topmenuHtml);
//        $product = $observer->getProduct();
//        $sproduct = $product->getCustomAttribute('is_special')->getValue() == 'yes';
//          echo ($sproduct);
        }
        return $this;
    }
}
