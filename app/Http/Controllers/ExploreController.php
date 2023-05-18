<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pops;

class ExploreController extends Controller
{
    public function index()
    {   
        if(request('search')) {
            $pops = Pops::where('tweet', 'LIKE', '%' .request('search'). '%')->get();
        }
        else {
            $pops = Pops::all();
        }
        return view ('explore')->with('pops', $pops);

    }
}
