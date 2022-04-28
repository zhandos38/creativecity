<?php

namespace App\Observers;

use App\Models\Price;
use Illuminate\Support\Facades\Storage;

class PriceObeserver
{
    /**
     * Handle the Price "created" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function created(Price $price)
    {
        //
    }

    /**
     * Handle the Price "updated" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function updated(Price $price)
    {
        if($price->isDirty('file')){
            Storage::delete($price->getOriginal('file'));
        }
    }

    /**
     * Handle the Price "deleted" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function deleted(Price $price)
    {
        if(Storage::exists($price->file)) {
            Storage::delete($price->file);
        }
    }

    /**
     * Handle the Price "restored" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function restored(Price $price)
    {
        //
    }

    /**
     * Handle the Price "force deleted" event.
     *
     * @param  \App\Models\Price  $price
     * @return void
     */
    public function forceDeleted(Price $price)
    {
        //
    }
}
