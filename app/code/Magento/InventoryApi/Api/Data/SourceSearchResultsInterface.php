<?php

namespace Magento\InventoryApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface SourceCollectionInterface
 * @api
 */
interface SourceSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get items
     *
     * @return \Magento\InventoryApi\Api\Data\SourceInterface[]
     */
    public function getItems();

    /**
     * Set items
     *
     * @param \Magento\InventoryApi\Api\Data\SourceInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
