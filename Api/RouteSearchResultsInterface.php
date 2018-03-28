<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\ReLinkerApi\Api;

interface RouteSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get an array of objects
     * @return \MSP\ReLinkerApi\Api\Data\RouteInterface[]
     */
    public function getItems();

    /**
     * Set objects list
     * @param \MSP\ReLinkerApi\Api\Data\RouteInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
