<?php

namespace App\Observers;

use App\Models\Point;
use Illuminate\Support\Facades\Storage;

class PointObeserver
{
    /**
     * Handle the Point "created" event.
     *
     * @param  \App\Models\Point  $point
     * @return void
     */
    public function created(Point $point)
    {
        //
    }

    /**
     * Handle the Point "updated" event.
     *
     * @param  \App\Models\Point  $point
     * @return void
     */
    public function updated(Point $point)
    {
        if($point->isDirty('image')){
            Storage::delete($point->getOriginal('image'));
        }
    }

    /**
     * Handle the Point "deleted" event.
     *
     * @param  \App\Models\Point  $point
     * @return void
     */
    public function deleted(Point $point)
    {
        if(Storage::exists($point->image)) {
            Storage::delete($point->image);
        }
    }

    /**
     * Handle the Point "restored" event.
     *
     * @param  \App\Models\Point  $point
     * @return void
     */
    public function restored(Point $point)
    {
        //
    }

    /**
     * Handle the Point "force deleted" event.
     *
     * @param  \App\Models\Point  $point
     * @return void
     */
    public function forceDeleted(Point $point)
    {
        //
    }
}
