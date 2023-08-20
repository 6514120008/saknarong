<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContentRequest;

use App\Models\Content;


class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        return view('content.index', compact('contents'));
    }

    public function create()
    {
        return view('content.form');
    }

    public function store(ContentRequest $request)
    {
        $contents = new Content;
        $contents->topic = $request->topic;
        $contents->description = $request->description;
        $contents->tags = $request->tags;
        $contents->links = $request->links;
        $contents->user_id = 1;
        $contents->save();
        return redirect('/content');
    }
}
