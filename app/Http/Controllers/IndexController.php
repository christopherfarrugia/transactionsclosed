<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class IndexController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all()->random(1);
        return view('index')->with('testimonials', $testimonials);
    }

}