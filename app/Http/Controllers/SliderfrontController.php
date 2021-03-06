<?php

namespace Djerelo\Http\Controllers;

use Illuminate\Http\Request;
use Djerelo\Slider;

class SliderfrontController extends Controller
{
    /**
     * @param array $middleware
     */
    public function index()
    {
        $data['images'] = Slider::select('image')->get()->toArray();

        return view('welcome',$data);
    }
}
