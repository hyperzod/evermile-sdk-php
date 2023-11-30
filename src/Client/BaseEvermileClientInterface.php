<?php

namespace Hyperzod\EvermileSdkPhp\Client;

/**
 * Interface for a Evermile client.
 */
interface BaseEvermileClientInterface
{
   /**
    * Gets the Client ID used by the client to send requests.
    *
    * @return null|string the Client ID used by the client to send requests
    */
   public function getClientID();

   /**
    * Gets the Client Secret used by the client to send requests.
    *
    * @return null|string the Client Secret used by the client to send requests
    */
   public function getClientSecret();

   /**
    * Gets the Merchant ID used by the client to send requests.
    *
    * @return null|string the Merchant ID used by the client to send requests
    */
   public function getMerchantID();

   /**
    * Gets the base URL for Evermile's API.
    *
    * @return string the base URL for Evermile's API
    */
   public function getApiBase();

   /**
    * Get Access Token
    *
    * @return string the access token
    */
   public function getAccessToken();
}
