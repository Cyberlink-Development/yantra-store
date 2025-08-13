<?php

namespace App\View\Composers;

use App\Model\PostType;
use Illuminate\View\View;
use App\Model\Setting;

class GlobalComposer
{
    public function compose(View $view){
        $setting = Setting::find(1);
        $postTypes = PostType::where('status',1)->orderBy('ordering', 'asc')->get();
        $view->with([
            'setting'=>$setting,
            'postTypes' => $postTypes,
        ]);
    }
}
