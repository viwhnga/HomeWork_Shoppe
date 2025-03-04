<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;


class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.homepage');
    }

    public function getBlog()
    {
        return view('page.blog');
    }
    public function getproductDetail()
    {
        return view('page.productDetail');
    }
    public function getContact()
    {
        return view('page.contact');
    }
    public function getShop()
    {
        return view('page.shop');
    }
    public function getCart()
    {
        return view('page.cart');
    }
    public function getCheckout()
    {
        return view('page.checkout');
    }
}
