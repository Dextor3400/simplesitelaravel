<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::all();

        return view('advertisements.index',compact('advertisements'));
    }
}
