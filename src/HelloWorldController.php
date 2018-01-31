<?php

namespace Simon\HelloWorld;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    //
    public function index()
    {
    	$testMessage = "HelloWorld";
    	return view('HelloWorld::welcome', compact('testMessage'));
    }
}
