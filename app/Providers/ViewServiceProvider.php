<?php

namespace App\Providers;

use App\Models\Contact;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(\Schema::hasTable('contacts')) {
            $contacts = Contact::getAllGroupByType();

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['phones' => isset($contacts[Contact::TYPE_PHONE]) ? $contacts[Contact::TYPE_PHONE] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['address' => isset($contacts[Contact::TYPE_ADDRESS]) ? $contacts[Contact::TYPE_ADDRESS] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['emails' => isset($contacts[Contact::TYPE_EMAIL]) ? $contacts[Contact::TYPE_EMAIL] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['vk' => isset($contacts[Contact::TYPE_VK]) ? $contacts[Contact::TYPE_VK] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['fb' => isset($contacts[Contact::TYPE_FB]) ? $contacts[Contact::TYPE_FB] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['instagram' => isset($contacts[Contact::TYPE_INSTAGRAM]) ? $contacts[Contact::TYPE_INSTAGRAM] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['whatsapp' => isset($contacts[Contact::TYPE_WHATSAPP]) ? $contacts[Contact::TYPE_WHATSAPP] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['cabinet' => isset($contacts[Contact::TYPE_CABINET]) ? $contacts[Contact::TYPE_CABINET] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['text' => isset($contacts[Contact::TYPE_TEXT]) ? $contacts[Contact::TYPE_TEXT] : false]);
            });

            View::composer(['*'], function ($view) use ($contacts) {
                $view->with(['presentation' => isset($contacts[Contact::TYPE_PRESENTATION]) ? $contacts[Contact::TYPE_PRESENTATION] : false]);
            });
        }
    }
}
