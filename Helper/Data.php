<?php

namespace GoAI\EAA\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const CACHE_LIFETIME = 86400;
    const CACHE_NAME = 'goai_script_cache_';
    const XML_PATH_ENABLED = 'goai_eaa/general/enable';
    const XML_PATH_SCRIPT_URL = 'goai_eaa/general/script_url';

    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ENABLED, ScopeInterface::SCOPE_STORE);
    }

    public function getScriptUrl()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_SCRIPT_URL, ScopeInterface::SCOPE_STORE);
    }
}
