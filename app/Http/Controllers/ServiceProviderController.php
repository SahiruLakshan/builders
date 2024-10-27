<?php

namespace App\Http\Controllers;
use App\Models\City;

use App\Models\District;
use App\Models\Service;

use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function addserviceproviders(Request $request)
    {
        $dictricts = District::with('city')->select('dis_id', 'dis_name')->get();
        $services = Service::select('id', 'servicename')->get();
        // dd($dictricts);
        return view('admin.addserviceprovider', compact('dictricts', 'services'));
    }
}
