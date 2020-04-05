<?php

namespace Mastering\MagentoMichalModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $_elemFactory;

    public function __construct(\Mastering\MagentoMichalModule\Model\ElemFactory $elemFactory)
    {
        $this->_elemFactory = $elemFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('mastering_magentomichalmodule'),
            [
                'name' => 'Elem 1',
                'description' => 'To jst test elem 1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('mastering_magentomichalmodule'),
            [
                'name' => 'Elem 2',
                'description' => 'To jst test elem 2'
            ]
        );

        $setup->endSetup();

    }
}
