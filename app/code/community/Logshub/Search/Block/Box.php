<?php

class Logshub_Search_Block_Box extends Mage_Core_Block_Template
{
    public function getHelper()
    {
        return Mage::helper('logshubsearch/data');
    }

    protected function _toHtml()
    {
        if (!$this->getHelper()->isEnabled()){
            return '';
        }
        
        return parent::_toHtml();
    }

    public function getDefaultThemeStyles()
    {
        $theme = Mage::getSingleton('core/design_package')->getTheme('frontend');
        $package = Mage::getSingleton('core/design_package')->getPackageName();

        // magento 1.9
        if ($theme === 'default' && $package == 'rwd'){
            return '#header-search {padding:0; margin-bottom: 50px; position:relative; width:auto;}';
        }
    }
}
