<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\City;
use App\Models\District;

class ProfileSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public $shop;
    // public function __construct($shop)
    // {
    //     $this->shop = json_decode(str_replace('&quot;', '"', $shop));
    //     // dd($this->shop);
    public function __construct($shop)
    {
        $shopData = json_decode(str_replace('&quot;', '"', $shop), true);

        $districtId = $shopData['district'] ?? '';
        $cityId = $shopData['city'] ?? '';

        $shopData['district_name'] = $districtId ? District::where('dis_id', $districtId)->value('dis_name') : '';
        $shopData['city_name'] = $cityId ? City::where('ds_id', $cityId)->value('ds_name') : '';

        $this->shop = (object) $shopData;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        return view('components.profile-sidebar');
    }
}
