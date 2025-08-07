<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Model\Settings;

class GlobalComposer
{
    public function compose(View $view){
        $setting = Settings::find(1);
        $view->with('setting',$setting);
    }
}
