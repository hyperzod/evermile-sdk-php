<?php

namespace Hyperzod\EvermileSdkPhp\Client;

/**
 * Interface for a Evermile client.
 */
interface EvermileClientInterface extends BaseEvermileClientInterface
{
   /**
    * Sends a request to Evermile's API.
    *
    * @param string $method the HTTP method
    * @param string $path the path of the request
    * @param array $params the parameters of the request
    */
   public function request($method, $path, $params);
}
