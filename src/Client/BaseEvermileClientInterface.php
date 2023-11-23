<?php

namespace Hyperzod\EvermileSdkPhp\Client;

/**
 * Interface for a Evermile client.
 */
interface BaseEvermileClientInterface
{
   /**
    * Gets the API key used by the client to send requests.
    *
    * @return null|string the API key used by the client to send requests
    */
   public function getApiKey();

   /**
    * Gets the base URL for Evermile's API.
    *
    * @return string the base URL for Evermile's API
    */
   public function getApiBase();
}
