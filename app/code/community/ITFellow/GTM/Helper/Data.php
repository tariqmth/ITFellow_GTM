<?php
class ITFellow_GTM_Helper_Data extends Mage_Core_Helper_Abstract
{
	const GTM_ENABLED = 'itfellow_gtm/itfellow_gtm_group/enable';
    const GTM_CONTAINER_ID = 'itfellow_gtm/itfellow_gtm_group/container_id';
    const GTM_REMARKETING_TAG = 'itfellow_gtm/itfellow_gtm_remarketing_group/enable_remarketing';
    const GTM_TRANSACTION_DATA = 'itfellow_gtm/itfellow_gtm_transaction_group/enable_transaction';
    const GTM_TRANSACTION_AFFILIATION = 'itfellow_gtm/itfellow_gtm_transaction_group/transaction_affiliation';

    /**
     * Return module status
     *
     * @return mixed
     */
    public function isGTMActive()
    {
        return Mage::getStoreConfig(self::GTM_ENABLED);
    }

    /**
     * Return Google Tag Manager container id
     *
     * @return mixed
     */
    public function getContainerId()
    {
        return Mage::getStoreConfig(self::GTM_CONTAINER_ID);
    }

    /**
     * Return status of remarketing tag
     *
     * @return mixed
     */
    public function isReMarketingTagActive()
    {
        return Mage::getStoreConfig(self::GTM_REMARKETING_TAG);
    }

    /**
     * Return status of transaction to Add transaction data to the data layer.
     *
     * @return mixed
     */
    public function isActiveTransaction()
    {
        return Mage::getStoreConfig(self::GTM_TRANSACTION_DATA);
    }

    /**
     * Return transaction affiliation
     *
     * @return string
     */
    public function getTransactionAffiliation()
    {
        return Mage::getStoreConfig(self::GTM_TRANSACTION_AFFILIATION);
    }
}
