<?php
/**
 * Created by PhpStorm.
 * User: FRAMGIA\pham.tuan.viet
 * Date: 17/07/2018
 * Time: 13:58
 */

namespace App\Http\Controllers\Admin;


class TestController extends BaseController
{
    public function __construct()
    {
        parent::__construct();

        $this->viewData['title'] = trans('home.title');
    }

    public function index()
    {
        return view('admin.welcome', $this->viewData);
    }
}