<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Arr;

class UserQuery
{
  public function query1($_, array $args)
  {
    logger()->info(json_encode($args));
  }
}
