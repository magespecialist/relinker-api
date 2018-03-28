<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\ReLinkerApi\Api\Data;

/**
 * @api
 */
interface ProcessorInterface
{
    /**
     * Execute a processor or return null on failure
     * @param \MSP\ReLinkerApi\Api\Data\RouteInterface $route
     * @param string $path
     * @return string
     */
    public function execute(\MSP\ReLinkerApi\Api\Data\RouteInterface $route, string $path): string;

    /**
     * Get processor code
     * @return string
     */
    public function getCode(): string;

    /**
     * Get processor description
     * @return string
     */
    public function getDescription(): string;
}
