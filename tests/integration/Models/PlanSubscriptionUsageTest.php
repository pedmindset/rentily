<?php

namespace Gerarodjbaez\Laraplans\Tests\Integration\Models;

use Config;
use Carbon\Carbon;
use App\Models\Plan;
use App\Tests\TestCase;
use App\Tests\Models\User;
use App\Models\PlanFeature;

class PlanSubscriptionUsageTest extends TestCase
{
    /**
     * Check if usage has expired.
     *
     * @test
     * @return void
     */
    public function it_can_check_if_usage_has_expired()
    {
        Config::set('laraplans.features', [
            'listings_per_month' => [
                'resettable_interval' => 'month',
                'resettable_count' => 1
            ]
        ]);

        $plan = Plan::create([
            'name' => 'Pro',
            'description' => 'Pro plan',
            'interval' => 'month'
        ]);

        $plan->features()->saveMany([
            new PlanFeature(['code' => 'listings_per_month', 'value' => 50]),
        ]);

        $user = User::create([
            'email' => 'test@example.org',
            'name' => 'Test user',
            'password' => '123'
        ]);

        $user->newSubscription('main', $plan)->create();

        $usage = $user->subscriptionUsage('main')->record('listings_per_month');

        $this->assertFalse($usage->isExpired());

        $usage->valid_until = Carbon::now()->subDay(); // date is in the past by 1 day...

        $usage->save();

        $this->assertTrue($usage->isExpired());
    }
}
