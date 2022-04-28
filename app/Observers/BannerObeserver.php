<?php

namespace App\Observers;

use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerObeserver
{
    /**
     * Handle the Banner "created" event.
     *
     * @param  \App\Models\Banner  $banner
     * @return void
     */
    public function created(Banner $banner)
    {
        //
    }

    /**
     * Handle the Banner "updated" event.
     *
     * @param  \App\Models\Banner  $banner
     * @return void
     */
    public function updated(Banner $banner)
    {
        if($banner->isDirty('image')) {
            Storage::delete($banner->getOriginal('image'));
        }

        if($banner->isDirty('bg_image')) {
            Storage::delete($banner->getOriginal('bg_image'));
        }
    }

    /**
     * Handle the Banner "deleted" event.
     *
     * @param  \App\Models\Banner  $banner
     * @return void
     */
    public function deleted(Banner $banner)
    {
        if(Storage::exists($banner->image)) {
            Storage::delete($banner->image);
        }

        if(Storage::exists($banner->bg_image)) {
            Storage::delete($banner->bg_image);
        }
    }

    /**
     * Handle the Banner "restored" event.
     *
     * @param  \App\Models\Banner  $banner
     * @return void
     */
    public function restored(Banner $banner)
    {
        //
    }

    /**
     * Handle the Banner "force deleted" event.
     *
     * @param  \App\Models\Banner  $banner
     * @return void
     */
    public function forceDeleted(Banner $banner)
    {
        //
    }
}
