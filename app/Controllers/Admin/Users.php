<?php namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Users extends BaseController{
    public function index()
    {
        echo '<h2>This is Admin User Area</h2>';
    }
    public function getAllUsers()
    {
       echo '<h2>Show All User</h2>';
    }
}
