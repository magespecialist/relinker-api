<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\ReLinkerApi\Api;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
interface RouteRepositoryInterface
{
    /**
     * Save Route
     * @param \MSP\ReLinkerApi\Api\Data\RouteInterface $route
     * @return int
     */
    public function save(\MSP\ReLinkerApi\Api\Data\RouteInterface $route): int;

    /**
     * Get Route by id
     * @param int $routeIid
     * @return \MSP\ReLinkerApi\Api\Data\RouteInterface
     */
    public function get(int $routeIid): \MSP\ReLinkerApi\Api\Data\RouteInterface;

    /**
     * Get by Path value
     * @param string $path
     * @return \MSP\ReLinkerApi\Api\Data\RouteInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByPath(string $path): \MSP\ReLinkerApi\Api\Data\RouteInterface;

    /**
     * Delete Route
     * @param int $routeIid
     * @return void
     */
    public function deleteById(int $routeIid);

    /**
     * Get a list of Route
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MSP\ReLinkerApi\Api\RouteSearchResultsInterface
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ): \MSP\ReLinkerApi\Api\RouteSearchResultsInterface;
}
