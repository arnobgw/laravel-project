<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class PagesController extends Controller
{
    public function index()
    {
        return view('/layout/index');
    }

    public function setupEmployee(){
        return view('/pages.entities.employee');
    }
}
