<?php

namespace Hyperzod\EvermileSdkPhp\Service;

use Hyperzod\EvermileSdkPhp\Enums\HttpMethodEnum;

class JobService extends AbstractService
{
   /**
    * Create a job on Evermile
    *
    * @param array $params
    *
    * @throws \Hyperzod\EvermileSdkPhp\Exception\ApiErrorException if the request fails
    *
    */
   public function create(array $params)
   {
      return $this->request(HttpMethodEnum::POST, '/jobs', $params);
   }
}
