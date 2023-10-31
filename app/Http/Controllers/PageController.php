<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    function homepage(): View
    {
        return view('index');
    }

    function shop(): View
    {
        return view('shop');
    }
    function productDetails(): View
    {
        return view('details');
    }
    function cart(): View
    {
        return view('cart');
    }
    function checkout(): View
    {
        return view('checkout');
    }
    function contact(): View
    {
        return view('contact');
    }
    function termsAndCondition(): View
    {
        return view('terms');
    }
    public function getCities(Request $request)
    {
        $cities = City::where('province_id', $request->province_id)->get();
        return view('layouts.states', compact('cities'));
    }
    public function returnPolicy()
    {
        return view('return_policy');
    }
    public function privacyPolicy()
    {
        return view('privacy_policy');
    }
    public function about()
    {
        return view('about');
    }
    public function faq()
    {
        return view('faq');
    }
}