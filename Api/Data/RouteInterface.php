<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\ReLinkerApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface RouteInterface extends ExtensibleDataInterface
{
    const ID = 'route_id';
    const NAME = 'name';
    const PATH = 'path';
    const ENABLED = 'enabled';
    const PROCESSOR = 'processor';
    const QS = 'qs';

    /**
     * Get value for rule_id
     * @return int
     */
    public function getId();

    /**
     * Set value for rule_id
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * Get value for name
     * @return string
     */
    public function getName();

    /**
     * Set value for name
     * @param string $value
     * @return void
     */
    public function setName($value);

    /**
     * Get value for path
     * @return string
     */
    public function getPath();

    /**
     * Set value for path
     * @param string $value
     * @return void
     */
    public function setPath($value);

    /**
     * Get value for enabled
     * @return bool
     */
    public function getEnabled();

    /**
     * Set value for enabled
     * @param bool $value
     * @return void
     */
    public function setEnabled($value);

    /**
     * Get value for processor
     * @return string
     */
    public function getProcessor();

    /**
     * Set value for processor
     * @param string $value
     * @return void
     */
    public function setProcessor($value);

    /**
     * Get value for qs
     * @return string
     */
    public function getQs();

    /**
     * Set value for qs
     * @param string $value
     * @return void
     */
    public function setQs($value);

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \MSP\ReLinkerApi\Api\Data\RouteExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     * @param \MSP\ReLinkerApi\Api\Data\RouteExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \MSP\ReLinkerApi\Api\Data\RouteExtensionInterface $extensionAttributes
    );
}
