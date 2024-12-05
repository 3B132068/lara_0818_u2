<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}

Route::get('hello/{name?}',[HellowController::class,'index'])->name('hello.index');

public function index($name='Everybody')
{
$data=['name'=>$name];
return view('hello.index',$data);
}
