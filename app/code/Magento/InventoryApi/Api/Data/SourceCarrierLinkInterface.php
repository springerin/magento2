<?php

namespace Magento\InventoryApi\Api\Data;


/**
 * @api
 */
interface SourceCarrierLinkInterface extends ExtensibleDataInterface

{

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\InventoryApi\Api\Data\SourceCarrierLinkExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\InventoryApi\Api\Data\SourceCarrierLinkExtensionInterface|null $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\InventoryApi\Api\Data\SourceCarrierLinkExtensionInterface $extensionAttributes);
}