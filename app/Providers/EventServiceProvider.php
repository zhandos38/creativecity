<?php

namespace App\Providers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Point;
use App\Models\Price;
use App\Observers\BannerObeserver;
use App\Observers\ContactObeserver;
use App\Observers\PartnerObeserver;
use App\Observers\PointObeserver;
use App\Observers\PriceObeserver;
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
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Banner::observe(BannerObeserver::class);
        Partner::observe(PartnerObeserver::class);
        Point::observe(PointObeserver::class);
        Price::observe(PriceObeserver::class);
        Contact::observe(ContactObeserver::class);
    }
}
