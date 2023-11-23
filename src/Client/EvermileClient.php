<?php

namespace Hyperzod\EvermileSdkPhp\Client;

use Hyperzod\EvermileSdkPhp\Service\CoreServiceFactory;

class EvermileClient extends BaseEvermileClient
{
    /**
     * @var CoreServiceFactory
     */
    private $coreServiceFactory;

    public function __get($name)
    {
        if (null === $this->coreServiceFactory) {
            $this->coreServiceFactory = new CoreServiceFactory($this);
        }

        return $this->coreServiceFactory->__get($name);
    }
}
