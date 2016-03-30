<?php
class ITFellow_GTM_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_CONTAINER_ID = 'itfellow_gtm/itfellow_gtm_group/container_id';
    const XML_PATH_ENABLE_REMARKETING = 'itfellow_gtm/itfellow_gtm_remarketing_group/enable_remarketing';
    const XML_PATH_ENABLE_TRANSACTION = 'itfellow_gtm/itfellow_gtm_transaction_group/enable_transaction';
    const XML_PATH_TRANSACTION_AFFILIATION = 'itfellow_gtm/itfellow_gtm_transaction_group/transaction_affiliation';

    /**
     * Return module status
     *
     * @return mixed
     */
    public function isActive()
    {
        return Mage::getStoreConfig(self::XML_PATH_ENABLED);
    }

    /**
     * Return Google Tag Manager container id
     *
     * @return mixed
     */
    public function getContainerId()
    {
        return Mage::getStoreConfig(self::XML_PATH_CONTAINER_ID);
    }

    /**
     * Return remarketing status
     *
     * @return mixed
     */
    public function isActiveRemarketing()
    {
        return Mage::getStoreConfig(self::XML_PATH_ENABLE_REMARKETING);
    }

    /**
     * Return transaction status
     *
     * @return mixed
     */
    public function isActiveTransaction()
    {
        return Mage::getStoreConfig(self::XML_PATH_ENABLE_TRANSACTION);
    }

    /**
     * Return transaction affiliation
     *
     * @return string
     */
    public function getTransactionAffiliation()
    {
        return Mage::getStoreConfig(self::XML_PATH_TRANSACTION_AFFILIATION);
    }
}
