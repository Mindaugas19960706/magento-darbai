<?php
    class Mindaugas_Google_Block_Block_Template

    {
        public $google_id, $module_enabled, $google_description;
        public function init()
        {
            $this->google_id          = Mage::getStoreConfig('google/google_settings/google_google_id',          Mage::app()->getStore());
            $this->google_description = Mage::getStoreConfig('google/google_settings/google_google_description', Mage::app()->getStore());
            $this->module_enabled   = Mage::getStoreConfig('google/google_settings/google_module_enable',    Mage::app()->getStore());
        }
    }