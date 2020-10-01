<?php

namespace zurunasi\Http\Controllers;

use zurunasi\Page_section;

class DestinationsController extends Controller
{
    public function index()
    {
        $intros = Page_section::where([['feature', "intro to destination"]])->take(1)->get();
        $other_intros = Page_section::where([['feature', "introduction"]])->get();


        return view('destinations.index', ['intros' => $intros, 'other_intro' => $other_intros]);
    }
}
