<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\PowerStation;
use App\Models\Vallet;
use Illuminate\Http\Request;

class ValletPowerStationController extends Controller
{
    //
    public function index()
    {
        $vallets=PowerStation::with('vallet')->get();

        return view('partner.yek-list', compact('vallets'));
    }
}
