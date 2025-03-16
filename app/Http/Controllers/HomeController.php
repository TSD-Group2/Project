<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::all();
        return view('frontend.index',compact('stations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function aboutus()
    {
        return view('frontend.about');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contact_us(Request $request)
    {
        return view('frontend.contact-us');
    }
    public function privacy_policy(Request $request)
    {
        return view('frontend.privacy-policy');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
