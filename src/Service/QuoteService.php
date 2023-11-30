<?php

namespace Hyperzod\EvermileSdkPhp\Service;

use Hyperzod\EvermileSdkPhp\Enums\HttpMethodEnum;

class QuoteService extends AbstractService
{
   /**
    * Create a Quote on Evermile
    *
    * @param array $params
    *
    * @throws \Hyperzod\EvermileSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function create(array $params)
   {
      return $this->request(HttpMethodEnum::POST, '/quote', $params);
   }
}
