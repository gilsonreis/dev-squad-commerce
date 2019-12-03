<?php


namespace App\Admin\Http\Controllers;


class DashboardController extends AdminController
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
