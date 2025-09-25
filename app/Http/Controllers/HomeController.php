<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        return view('frontend.index');
    }

    public function shop ()
    {
        return view('frontend.shop');
    }

    public function returnProcess ()
    {
        return view('frontend.return-process');
    }

    public function viewCart ()
    {
        return view('frontend.view-cart');
    }

    public function checkout ()
    {
        return view('frontend.checkout');
    }

    public function category ()
    {
        return view('frontend.category');
    }

    public function subCategory ()
    {
        return view('frontend.sub-category');
    }

    public function productDetails()
    {
        return view('frontend.product-details');
    }

    public function viewProduct ()
    {
        return view('frontend.view-product');
    }

    public function privacyPolicy ()
    {
        return view('frontend.privacy-policy');
    }

    public function termsCondition ()
    {
        return view('frontend.Terms&Conditions');
    }

    public function refundPolicy ()
    {
        return view('frontend.refund-policy');
    }

    public function paymentPolicy ()
    {
        return view('frontend.paymentpolicy');
    }

    public function contactUs () 
    {
        return view('frontend.contact-us');
    }

    public function aboutUs ()
    {
        return view('.frontend.about-us');
    }

}