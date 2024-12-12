<?php

namespace GoAI\EAA\Block;

use Magento\Framework\View\Element\Template;
use GoAI\EAA\Helper\Data;
use Magento\Framework\UrlInterface;

class Script extends Template
{
    private $helper;
    private $urlBuilder;

    public function __construct(
        Template\Context $context,
        Data $helper,
        UrlInterface $urlBuilder,
        array $data = []
    ) {
        $this->helper = $helper;
        $this->urlBuilder = $urlBuilder;
        parent::__construct($context, $data);
    }

    public function isEnabled()
    {
        return $this->helper->isEnabled();
    }

    public function getScriptUrl()
    {
        return $this->helper->getScriptUrl();
    }
}
