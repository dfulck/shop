<?php

namespace App\Observers;

use App\Models\product;

class ProductObserver
{
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Models\product  $product
     * @return void
     */
    public function created(product $product)
    {
        session()->flash('success','successfully new Product');
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Models\product  $product
     * @return void
     */
    public function updated(product $product)
    {
        session()->flash('info','Updated successfully');
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Models\product  $product
     * @return void
     */
    public function deleted(product $product)
    {
        session()->flash('error','successfully deleted Product');
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Models\product  $product
     * @return void
     */
    public function restored(product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Models\product  $product
     * @return void
     */
    public function forceDeleted(product $product)
    {
        //
    }
}
