<?php
namespace tay0\gonzalez\Plugin\Catalog;

class Product
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        if (null !== $subject->getCustomAttribute('is_special')) {
            if ($subject->getCustomAttribute('is_special')->getValue() == 'yes'){
                $result = $result . ' - Special Promotion';
//                echo  $subject->getCustomAttribute('is_special')->getValue();
            }
        }
        return $result;
    }
}
