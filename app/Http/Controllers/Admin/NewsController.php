<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;
use App\Http\Requests\NewsFormRequest;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller {
    public function get() {
        $news = News::all();

        return view('admin/news', compact('news'));
    }

    public function post(NewsFormRequest $request) {
        $news = new News();

        $news->title = $request->input('title');
        $news->text = $request->input('text');

        $news->save();
        
        $file = $request->file('image');

        if ($file != null) {
            $news->image_path = "./news/" . $news->id . "." . $request->file('image')->extension();
            Storage::disk('local')->put($news->image_path, $file);

            $news->save();
        }

        $news = News::all();
        return view('admin/news', compact('news'));
    }

}
