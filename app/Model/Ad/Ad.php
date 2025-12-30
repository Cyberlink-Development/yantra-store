<?php

namespace App\Model\Ad;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','client_name','image','image_size','link','open_in_new_tab','ad_position','ad_layout','ordering','status','start_date','end_date'];

    public function scopeActive($query){
        return $query->where('status','1');
    }
    public function scopeCurrentlyActive($query)
    {
        //If ads needs to be shown for limited time
        $now = now();
        return $query->where('status', '1')
            ->where(function($q) use ($now) {
                $q->whereNull('start_date')->orWhere('start_date', '<=', $now);
            })
            ->where(function($q) use ($now) {
                $q->whereNull('end_date')->orWhere('end_date', '>=', $now);
            });
    }
    public function scopeByPosition($query, $position)
    {
        return $query->where('ad_position', $position);
    }

    public function isNewTab()
    {
        return $this->open_in_new_tab === '1';
    }
}
