<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public $shop;
    public function __construct($shop)
    {
        $this->shop = json_decode(str_replace('&quot;', '"', $shop));
        // dd($this->shop);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.profile-sidebar');
    }
}
