//first create model

discountCategory -mcr

category is created dont create again


create table
discountCategory by field
'discount'

and create table for connect category to discountCategory by down fields

public function up()
{
Schema::create('category_discount_category', function (Blueprint $table) {
$table->foreignId('category_id')->constrained();
$table->foreignId('discount_category_id')->constrained();
});
}

lets go



// model category
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function products()
    {
        return $this->belongsToMany(product::class);
    }


    public function discountCategories()
    {
        return $this->belongsToMany(discountCategory::class);
    }
    public function HasDiscountCategory(category $category)
    {
        $categories=$this->discountCategories()->where('category_id',$category->id)->get();


        return $categories;
    }

    public function parent()
    {
        return $this->belongsTo(category::class,'category_id');
    }

    //end model category

    //start model discountCategory

<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

class discountCategory extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function categories()
    {
        return $this->belongsToMany(category::class);
    }
}

//end model discountCategory

    //start controller create discount for category
public function store(Request $request,category $category)
{
    $discount= discountCategory::query()->create([
        'discount'=>$request->get('discount')
    ]);

    $category->discountCategories()->sync($discount->id);

    return redirect()->back();

}
public function update(Request $request, discountCategory $discountCategory)
{
    $discountCategory->update([
        'discount'=>$request->get('discount')
    ]);

    return redirect()->back();
}

public function destroy(discountCategory $discountCategory)
{
    $discountCategory->delete()
    }
//end controller for discount category

    //view

//this typing number of discount
@foreach($category->HasDiscountCategory($category) as $discount)
    <span>{{$discount->discount}}</span>
@endforeach

// this function is created in discountCategory

public function getCostWithDiscount(product $product)
{
if ($this->exists()) {
return $product->cost - $product->cost * $this->discount / 100;
}
return $product->cost;

}
//for show Cost by discount in view
@foreach($category->HasDiscountCategory($category) as $discount)
    <span>{{$discount->getCostWithDiscount($product)}}</span>
@endforeach

//end ///end ///end ////end this discount category


