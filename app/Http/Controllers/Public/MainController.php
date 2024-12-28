<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public  function  index()
    {
        $teachers = Teacher::all();
        return view('public.index', compact('teachers'));
    }
}
