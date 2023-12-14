<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        // $trains = Train::where('orario_di_partenza', '>', now())->get();
        $trains = Train::where('orario_di_partenza', '>', now())->orderBy('orario_di_partenza', 'asc')->get();
        return view('guest.index', compact('trains'));
    }
}
