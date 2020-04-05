<?php


namespace Mastering\MagentoMichalModule\Model\ResourceModel\Elem;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'mastering_magentomichalmodule';
    protected $_eventObject = 'elem_collection';

    protected function _construct()
    {
        $this->_init(\Mastering\MagentoMichalModule\Model\Elem::class, \Mastering\MagentoMichalModule\Model\ResourceModel\Elem::class);
    }
}
