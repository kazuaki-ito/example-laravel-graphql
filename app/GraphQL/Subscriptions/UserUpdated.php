<?php

namespace App\GraphQL\Subscriptions;

use Illuminate\Http\Request;
use Nuwave\Lighthouse\Schema\Types\GraphQLSubscription;
use Nuwave\Lighthouse\Subscriptions\Subscriber;

class UserUpdated extends GraphQLSubscription
{
  /**
   * Check if subscriber is allowed to listen to the subscription.
   *
   * @param  \Nuwave\Lighthouse\Subscriptions\Subscriber $subscriber
   * @param  \Illuminate\Http\Request $request
   * @return bool
   */
  public function authorize(Subscriber $subscriber, Request $request): bool
  {
    logger()->info('authorize');
  }

  /**
   * Filter which subscribers should receive the subscription.
   *
   * @param  \Nuwave\Lighthouse\Subscriptions\Subscriber $subscriber
   * @param  mixed $root
   * @return bool
   */
  public function filter(Subscriber $subscriber, $root): bool
  {
    logger()->info('filter');
  }
}
