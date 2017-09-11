<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Menus;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $menus = Menus::all();
      return view('admin.menu_operations', ['menus' => $menus]);
    }
	
















}
