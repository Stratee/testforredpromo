<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function renderNewsPage(){
        $newsModel = new NewsModel();
        return view('news', ['news' => $newsModel->all()]);
    }

    public function renderSimilarNewsPage(){
        $newsModel = new NewsModel();
        return view('news', ['news' => $newsModel->all()]);
    }
}
