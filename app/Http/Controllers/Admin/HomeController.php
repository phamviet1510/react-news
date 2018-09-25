<?php

namespace App\Http\Controllers\Admin;

class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        // $this->viewData['title'] = trans('home.title');
    }

    public function index()
    {
        return view('admin.welcome');
    }

    public function dashboard()
    {
        $title = 'Dashboard';

        return view('admin.home.dashboard');
    }

    public function login()
    {
        return view('admin.home.login');
    }

}
