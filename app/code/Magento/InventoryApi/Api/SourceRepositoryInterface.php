<?php


/**
 * @api
 */
interface SourceRepositoryInterface
{
    /**
     * Save Source data.
     *
     * @param \Magento\InventoryApi\Api\Data\SourceInterface $source
     * @return \Magento\InventoryApi\Api\Data\SourceInterface
     *
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(\Magento\InventoryApi\Api\Data\SourceInterface $source);

    /**
     * Load Source data by given sourceId.
     *
     * @param int $sourceId
     * @return \Magento\InventoryApi\Api\Data\SourceInterface
     */
    public function get($sourceId);

    /**
     * Load Source data collection by given search criteria
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface
     * @return \Magento\InventoryApi\Api\Data\SourceSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null);

    /**
     * Delete Source entity
     *
     * @param \Magento\InventoryApi\Api\Data\SourceInterface $source
     * @return bool
     */
    public function delete(\Magento\InventoryApi\Api\Data\SourceInterface $source);
}
