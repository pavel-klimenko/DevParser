<?php

namespace Symfony\Config\ZenstruckFoundry;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PersistenceConfig 
{
    private $flushOnce;
    private $_usedProperties = [];

    /**
     * Flush only once per call of `PersistentObjectFactory::create()` in userland.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function flushOnce($value): static
    {
        $this->_usedProperties['flushOnce'] = true;
        $this->flushOnce = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('flush_once', $value)) {
            $this->_usedProperties['flushOnce'] = true;
            $this->flushOnce = $value['flush_once'];
            unset($value['flush_once']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['flushOnce'])) {
            $output['flush_once'] = $this->flushOnce;
        }

        return $output;
    }

}
