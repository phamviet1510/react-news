<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Heroes;
use Illuminate\Http\Request;

class HeroesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        echo 123;die;
        $title = 'Dashboard';
        $breadcrumbs = [['title' => 'Home']];

        return view('admin.home.heroes', compact('title', 'breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function show(Heroes $heroes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function edit(Heroes $heroes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heroes $heroes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heroes  $heroes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heroes $heroes)
    {
        //
    }
}
