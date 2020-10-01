<?php

namespace zurunasi\Http\Controllers;

use zurunasi\Page_section;

class HomepageController extends Controller
{
    public function index()
    {
        $intros = Page_section::where([['feature', "introduction"]])->take(1)->get();
//          dd($intros);
        $news = Page_section::where('feature', "latest news")->take(1)->get();


        return view('index', ['intros' => $intros, 'news' => $news]);
    }

    public function editHome()
    {

        return view('admin.editHome');
    }

    public function store()
    {
        $data = request()->validate([
            'pageName' => 'required | min:3',
            'feature' => 'required',
            'title' => 'required | min:3',
            'desc' => ''
        ]);


        $intro = new Page_section();
        $intro->page_name = request('pageName');
        $intro->feature = request('feature');
        $intro->title = request('title');
        $intro->desc = request('desc');
        $intro->save();
        return back();

    }
}
