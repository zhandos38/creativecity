<?php

namespace App\Observers;

use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerObeserver
{
    /**
     * Handle the Partner "created" event.
     *
     * @param  \App\Models\Partner  $partner
     * @return void
     */
    public function created(Partner $partner)
    {
        //
    }

    /**
     * Handle the Partner "updated" event.
     *
     * @param  \App\Models\Partner  $partner
     * @return void
     */
    public function updated(Partner $partner)
    {
        if($partner->isDirty('image')){
            Storage::delete($partner->getOriginal('image'));
        }
    }

    /**
     * Handle the Partner "deleted" event.
     *
     * @param  \App\Models\Partner  $partner
     * @return void
     */
    public function deleted(Partner $partner)
    {
        if(Storage::exists($partner->image)) {
            Storage::delete($partner->image);
        }
    }

    /**
     * Handle the Partner "restored" event.
     *
     * @param  \App\Models\Partner  $partner
     * @return void
     */
    public function restored(Partner $partner)
    {
        //
    }

    /**
     * Handle the Partner "force deleted" event.
     *
     * @param  \App\Models\Partner  $partner
     * @return void
     */
    public function forceDeleted(Partner $partner)
    {
        //
    }
}
