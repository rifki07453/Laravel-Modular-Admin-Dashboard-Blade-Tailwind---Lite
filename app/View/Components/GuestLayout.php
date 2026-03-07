<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

/**
 * Class GuestLayout
 * 
 * @description Komponen Blade untuk merender file `resources/views/layouts/guest.blade.php`.
 * Digunakan untuk membungkus halaman Auth menggunakan tag '<x-guest-layout>'.
 */
class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.guest');
    }
}
