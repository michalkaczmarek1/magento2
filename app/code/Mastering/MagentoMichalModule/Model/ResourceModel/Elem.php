<?php


namespace Mastering\MagentoMichalModule\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Elem extends AbstractDb
{
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('mastering_magentomichalmodule', 'id');
    }
}
