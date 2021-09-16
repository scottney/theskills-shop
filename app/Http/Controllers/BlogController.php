<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class BlogController extends Controller
{
     public function __construct() 
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.blog.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'created_at' => '',
        ]);

        if ($validatedData->fails()) {
            return redirect()->back()->withErrors($validatedData->messages()->all());
        } else {
            Blog::create([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'description' => $request->input('description'),
            ]);
        }

        return redirect()->route('blog')->with('success', 'Your blog post has been added !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
         return view('pages.blog.blog')
            ->with('blog', Blog::orderBy('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('pages.blog.pages.edit', ['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required'
        ]);

        $blog->update($request->all());

        return redirect()->route('blog')->with('info', 'Blog post updated successfully !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog')->with('warning', 'Blog post deleted successfully !!!');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        return view('pages.blog.pages.delete', ['blog'=>$blog]);
    }
}
