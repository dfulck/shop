<?php

namespace App\Observers;

use App\Models\brand;

class BrandObserver
{
    /**
     * Handle the brand "created" event.
     *
     * @param  \App\Models\brand  $brand
     * @return void
     */
    public function created(brand $brand)
    {
        session()->flash('success','successfully new brand');
    }

    /**
     * Handle the brand "updated" event.
     *
     * @param  \App\Models\brand  $brand
     * @return void
     */
    public function updated(brand $brand)
    {
        session()->flash('info','Updated successfully');
    }

    /**
     * Handle the brand "deleted" event.
     *
     * @param  \App\Models\brand  $brand
     * @return void
     */
    public function deleted(brand $brand)
    {
        session()->flash('error','successfully deleted brand');
    }

    /**
     * Handle the brand "restored" event.
     *
     * @param  \App\Models\brand  $brand
     * @return void
     */
    public function restored(brand $brand)
    {
        //
    }

    /**
     * Handle the brand "force deleted" event.
     *
     * @param  \App\Models\brand  $brand
     * @return void
     */
    public function forceDeleted(brand $brand)
    {
        //
    }
}
