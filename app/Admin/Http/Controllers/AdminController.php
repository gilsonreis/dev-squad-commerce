<?php


namespace App\Admin\Http\Controllers;


use App\Http\Controllers\Controller;

abstract class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
