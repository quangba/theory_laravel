<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index() {
        $title = "CGC3";
        $content = "CGC3 learning LARAVEL ";
        $data = [
            'title' => $title,
            'content' => $content,
        ];

        // Cach1
        return view('home', $data);

        // Cach2
        // return view('home', compact('title', 'content'));

        // Cach3
        // return view('home')->with([
        //     'title' => $title,
        //     'content' => $content,
        // ]);

        // Cach4 use class View
        // return View::make('home')->with([
        //     'title' => $title,
        //     'content' => $content,
        // ]);

        // Chuyen view thanh HTML
        // $content = view('home');
        // $content = $content->render();
        // dd($content);
    }

    public function detail($id) {
        return view('home', compact('id'));
    }
}
