<?php


namespace Mastering\MagentoMichalModule\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;

class Index extends Action
{

    protected $_pageFactory;

    protected $_elemFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Mastering\MagentoMichalModule\Model\ElemFactory $elemFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_elemFactory = $elemFactory;
        return parent::__construct($context);
    }


    /**
     * @inheritDoc
     */
    public function execute()
    {

        $elem = $this->_elemFactory->create();

        $collection = $elem->getCollection();

        foreach($collection as $item){
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();

        return $this->_pageFactory->create();
    }

}
