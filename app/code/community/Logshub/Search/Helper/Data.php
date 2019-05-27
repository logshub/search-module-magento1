<?php

class Logshub_Search_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isEnabled()
    {
        return (bool)Mage::getStoreConfig('logshubsearch/general/enable');
    }

    public function getApiDomain()
    {
        return $this->escapeJsValue((string)Mage::getStoreConfig('logshubsearch/general/api_domain'));
    }

    public function getApiPublicKey()
    {
        return $this->escapeJsValue((string)Mage::getStoreConfig('logshubsearch/general/api_pub_key'));
    }

    public function getApiProductsLimit()
    {
        return (int)Mage::getStoreConfig('logshubsearch/general/api_prod_limit');
    }

    public function getApiCategoriesLimit()
    {
        return (int)Mage::getStoreConfig('logshubsearch/general/api_cat_limit');
    }

    public function getApiFeatures()
    {
        return $this->escapeJsValue((string)Mage::getStoreConfig('logshubsearch/general/api_features'));
    }

    public function getHtmlContainerSelector()
    {
        return $this->escapeJsValue((string)Mage::getStoreConfig('logshubsearch/appereance/container_selector'));
    }

    public function getFullscreen()
    {
        return (bool)Mage::getStoreConfig('logshubsearch/appereance/fullscreen') ? 'true' : 'false';
    }

    public function getStartupQuery()
    {
        return $this->escapeJsValue((string)Mage::getStoreConfig('logshubsearch/appereance/startup_query'));
    }

    public function getDefaultCurrency()
    {
        return $this->escapeJsValue((string)Mage::getStoreConfig('logshubsearch/appereance/currency'));
    }

    public function includeJquery()
    {
        return (bool)Mage::getStoreConfig('logshubsearch/appereance/include_jquery');
    }

    /**
     * quoteEscape method from magento 1.9, not available in 1.6
     * escapeHtml ?
     */
    protected function escapeJsValue($data, $addSlashes = false)
    {
        if ($addSlashes === true) {
            $data = addslashes($data);
        }

        return htmlspecialchars($data, ENT_QUOTES, null, false);
    }
}
