<?php

namespace App\Observers;

use App\Models\Contact;
use Illuminate\Support\Facades\Storage;

class ContactObeserver
{
    /**
     * Handle the Contact "created" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function created(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "updated" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function updated(Contact $contact)
    {
        if($contact->isDirty('content_ru')){
            Storage::delete($contact->getOriginal('content_ru'));
        }
        if($contact->isDirty('content_kz')){
            Storage::delete($contact->getOriginal('content_kz'));
        }
        if($contact->isDirty('content_en')){
            Storage::delete($contact->getOriginal('content_en'));
        }
    }

    /**
     * Handle the Contact "deleted" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function deleted(Contact $contact)
    {
        if(Storage::exists($contact->content_ru)) {
            Storage::delete($contact->content_ru);
        }
        if(Storage::exists($contact->content_kz)) {
            Storage::delete($contact->content_kz);
        }
        if(Storage::exists($contact->content_en)) {
            Storage::delete($contact->content_en);
        }
    }

    /**
     * Handle the Contact "restored" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function restored(Contact $contact)
    {
        //
    }

    /**
     * Handle the Contact "force deleted" event.
     *
     * @param  \App\Models\Contact  $contact
     * @return void
     */
    public function forceDeleted(Contact $contact)
    {
        //
    }
}
