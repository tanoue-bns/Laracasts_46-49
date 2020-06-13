<?php

namespace App\Providers;

use App\Events\ProductPurchased;
use App\Listeners\AwardAchievements;
use App\Listeners\SendSharableCoupon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // memo: ここに作成したイベント(ProductPurchased)が読み込まれたとき、実行するクラス(AwardAchievements,SendSharableCoupon)を定義
        ProductPurchased::class => [
            AwardAchievements::class,
            SendSharableCoupon::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     * 
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
