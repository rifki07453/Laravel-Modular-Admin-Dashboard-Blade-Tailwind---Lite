<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

/**
 * Class AppLayout
 * 
 * @description Komponen Blade untuk merender file `resources/views/layouts/app.blade.php`.
 * Dengan ini kita bisa menggunakan tag '<x-app-layout>' di blade view.
 */
class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
