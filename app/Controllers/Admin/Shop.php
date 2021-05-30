<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }
    public function product()
    {
        // return view('product');
        echo '<h2>This is Admin Product</h2>';
    }
}
