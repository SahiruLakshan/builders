<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;
use App\Models\Service;

class ProfessionalController extends Controller
{
    public function index()
    {
        return view('admin.addprofessionalsCategory');
    }

    // public function webprofessional(Request $request)
    // {
    //     $districts = District::with('city')->select('dis_id', 'dis_name')->get();
    //     $services = Service::select('id', 'servicename')->get();
    //     dd($districts);
    //     return view('webpages.professionalform', compact('districts', 'services'));
    // }
    // public function webprofessional(Request $request)
    // {
    //     $districts = District::with('city')->select('dis_id', 'dis_name')->get();
    //     $services = Service::select('id', 'servicename')->get();

    //     return view('webpages.professionalform', compact('districts', 'services'));
    // }
    // In your controller
    public function professionalForm(Request $request)
    {
        $districts = District::with('city')->select('dis_id', 'dis_name')->get();
        $services = Service::select('id', 'servicename')->get();
        return view('webpages.professionalsform', compact('districts', 'services'));
    }


}
