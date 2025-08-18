<?php

namespace App\View\Composers;

use App\Model\PostType;
use Illuminate\View\View;
use App\Model\Setting;

class GlobalComposer
{
    public function compose(View $view){
        $setting = Setting::find(1);
        $postType_menus = PostType::where('status',1)->orderBy('ordering', 'asc')->get();
        $header = PostType::where('status',1)->where('is_header',1)->orderBy('ordering', 'asc')->get();
        $view->with([
            'setting'=>$setting,
            'postType_menus' => $postType_menus,
            'posttypeHeader' => $header,
        ]);
    }
}
