<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasSlug;

    public function scopeActive($query){
        return $query->where('status', '1');
    }
    public function scopeHome($query){
        return $query->where('in_home','1');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $fillable=['parent_id','name','caption','slug','image','is_special', 'status','is_header', 'in_home','is_footer', 'in_slider','in_moving_text', 'meta_title', 'meta_description', 'description', 'banner'];


    public function products()
    {
        return $this->belongsToMany(Product::class,'product_categories');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    public function getParent(){
        // return 1;
        return Category::find($this->parent_id);
    }

    public function getDescendantIds()
    {
        $all = [];

        foreach ($this->children as $child) {
            $all[] = $child->id;
            $all = array_merge($all, $child->getDescendantIds());
        }

        return $all;
    }

    public static function getCategoriesExceptSubtree($currentCategoryId)
    {
        $currentCategory = self::with('children')->find($currentCategoryId);

        if (!$currentCategory) return self::where('status', 1)->get();

        $excludeIds = $currentCategory->getDescendantIds();
        $excludeIds[] = $currentCategory->id;

        return self::whereNotIn('id', $excludeIds)
                ->where('status', 1)
                ->get();
    }
}
