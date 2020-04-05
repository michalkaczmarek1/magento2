<?php


namespace Mastering\MagentoMichalModule\Model;


use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class Elem extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'mastering_magentomichalmodule';

    protected $_cacheTag = 'mastering_magentomichalmodule';

    protected $_eventPrefix = 'mastering_magentomichalmodule';

    protected function _construct()
    {
        $this->_init(\Mastering\MagentoMichalModule\Model\ResourceModel\Elem::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }


    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
