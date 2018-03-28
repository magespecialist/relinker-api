<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\ReLinkerApi\Api;

interface ProcessorRepositoryInterface
{
    /**
     * Get a list of processors
     * @return \MSP\ReLinkerApi\Api\Data\ProcessorInterface[]
     */
    public function getList(): array;

    /**
     * Get a processor by code
     * @param string $code
     * @return Data\ProcessorInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getProcessorByCode(string $code): \MSP\ReLinkerApi\Api\Data\ProcessorInterface;
}
