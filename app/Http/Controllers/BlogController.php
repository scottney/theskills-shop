<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Storage;

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
        $validatedData = $request->validate([
            'title' => ['required'],
            'author' =>[ 'required'],
            'blog_post_image' => ['image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:8192'],
            'blog_post_video' => ['mimetypes:video/avi,video/mp4,video/mpeg,video/quicktime, video/mov, video/wmv, video/avchd, video/flv, video/f4v, video/swf, video/mkv, video/webm, video/mpeg-2', 'max:1024000'],
            'description' => ['required'],
            'created_at' => [''],
        ]);

        //Get the item passed in the fields
        $imageField = $request->file('blog_post_image');
        $videoField = $request->file('blog_post_video');
        $allFields = $request->file('blog_post_image') && $request->file('blog_post_video');

        if ($imageField !== null && $allFields == false) {
            //Get filename with the extension
            $imageFileWithExt = $request->file('blog_post_image')->getClientOriginalName();

            //Get just filename
            $filenameImage = pathinfo($imageFileWithExt,PATHINFO_FILENAME);

            //Get just ext
            $extensionImage = $request->file('blog_post_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameImageToStore = $filenameImage.'_'.time().'.'.$extensionImage;

            $pathImage = $request->file('blog_post_image')->storeAs('public/blog/images',$fileNameImageToStore);

            if ($validatedData) {

                $blogPost = Blog::create([
                    'title' => $request->input('title'),
                    'author' => $request->input('author'),
                    'blog_post_image' => $pathImage,
                    'blog_post_video' => null,
                    'description' => $request->input('description'),
                ]);

                if ($blogPost) {
                    return redirect()->route('adminBlog')->with('blogpost-create-success', 'Your Blog Post was successfully created.');
                } else {
                    return redirect()->back()->with('blogpost-create-failed', 'A problem was encountered while creating your post. Please re-check the details and try again.');
                }
            }
        } elseif ($videoField !== null && $allFields == false) {
            $videoFileWithExt = $request->file('blog_post_video')->getClientOriginalName();

            $filenameVideo = pathinfo($videoFileWithExt,PATHINFO_FILENAME);

            $extensionVideo = $request->file('blog_post_video')->getClientOriginalExtension();

            $fileNameVideoToStore = $filenameVideo.'_'.time().'.'.$extensionVideo;

            $pathVideo = $request->file('blog_post_video')->storeAs('public/blog/videos',$fileNameVideoToStore);

            if ($validatedData) {

                $blogPost = Blog::create([
                    'title' => $request->input('title'),
                    'author' => $request->input('author'),
                    'blog_post_image' => null,
                    'blog_post_video' => $pathVideo,
                    'description' => $request->input('description'),
                ]);

                if ($blogPost) {
                    return redirect()->route('adminBlog')->with('blogpost-create-success', 'Your Blog Post was successfully created.');
                } else {
                    return redirect()->back()->with('blogpost-create-failed', 'A problem was encountered while creating your post. Please re-check the details and try again.');
                }
            }
        } else {
            $imageFileWithExt = $request->file('blog_post_image')->getClientOriginalName();
            $videoFileWithExt = $request->file('blog_post_video')->getClientOriginalName();

            $filenameImage = pathinfo($imageFileWithExt,PATHINFO_FILENAME);
            $filenameVideo = pathinfo($videoFileWithExt,PATHINFO_FILENAME);

            $extensionImage = $request->file('blog_post_image')->getClientOriginalExtension();
            $extensionVideo = $request->file('blog_post_video')->getClientOriginalExtension();

            $fileNameImageToStore = $filenameImage.'_'.time().'.'.$extensionImage;
            $fileNameVideoToStore = $filenameVideo.'_'.time().'.'.$extensionVideo;

            $pathImage = $request->file('blog_post_image')->storeAs('public/blog/images',$fileNameImageToStore);
            $pathVideo = $request->file('blog_post_video')->storeAs('public/blog/videos',$fileNameVideoToStore);

            if ($validatedData) {

                $blogPost = Blog::create([
                    'title' => $request->input('title'),
                    'author' => $request->input('author'),
                    'blog_post_image' => $pathImage,
                    'blog_post_video' => $pathVideo,
                    'description' => $request->input('description'),
                ]);

                if ($blogPost) {
                    return redirect()->route('adminBlog')->with('blogpost-create-success', 'Your Blog Post was successfully created.');
                } else {
                    return redirect()->back()->with('blogpost-create-failed', 'A problem was encountered while creating your post. Please re-check the details and try again.');
                }
            }
        }  
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
        //Get the item passed in the fields
        $imageField = $request->file('blog_post_image');
        $videoField = $request->file('blog_post_video');
        $allFields = $request->file('blog_post_image') && $request->file('blog_post_video');

        if ($imageField !== null && $allFields == false) {
            //Get filename with the extension
            $imageFileWithExt = $request->file('blog_post_image')->getClientOriginalName();

            //Get just filename
            $filenameImage = pathinfo($imageFileWithExt,PATHINFO_FILENAME);

            //Get just ext
            $extensionImage = $request->file('blog_post_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameImageToStore = $filenameImage.'_'.time().'.'.$extensionImage;

            $pathImage = $request->file('blog_post_image')->storeAs('public/blog/images',$fileNameImageToStore);

            $blog->update([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'blog_post_image' => $pathImage,
                'description' => $request->input('description'),
            ]);

            if ($blog) {
                return redirect()->route('adminBlog')->with('blogpost-update-successfull', 'Blog post updated successfully !!!');
            } else {
                return redirect()->back()->with('blogpost-update-failed', 'A problem was encountered while updating your post. Please re-check the details and try again.');
            }

        } elseif ($videoField !== null && $allFields == false) {
            $videoFileWithExt = $request->file('blog_post_video')->getClientOriginalName();

            $filenameVideo = pathinfo($videoFileWithExt,PATHINFO_FILENAME);

            $extensionVideo = $request->file('blog_post_video')->getClientOriginalExtension();

            $fileNameVideoToStore = $filenameVideo.'_'.time().'.'.$extensionVideo;

            $pathVideo = $request->file('blog_post_video')->storeAs('public/blog/videos',$fileNameVideoToStore);

            $blog->update([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'blog_post_video' => $pathVideo,
                'description' => $request->input('description'),
            ]);

            if ($blog) {
                return redirect()->route('adminBlog')->with('blogpost-update-successfull', 'Blog post updated successfully !!!');
            } else {
                return redirect()->back()->with('blogpost-update-failed', 'A problem was encountered while updating your post. Please re-check the details and try again.');
            }

        } else {
            $imageFileWithExt = $request->file('blog_post_image')->getClientOriginalName();
            $videoFileWithExt = $request->file('blog_post_video')->getClientOriginalName();

            $filenameImage = pathinfo($imageFileWithExt,PATHINFO_FILENAME);
            $filenameVideo = pathinfo($videoFileWithExt,PATHINFO_FILENAME);

            $extensionImage = $request->file('blog_post_image')->getClientOriginalExtension();
            $extensionVideo = $request->file('blog_post_video')->getClientOriginalExtension();

            $fileNameImageToStore = $filenameImage.'_'.time().'.'.$extensionImage;
            $fileNameVideoToStore = $filenameVideo.'_'.time().'.'.$extensionVideo;

            $pathImage = $request->file('blog_post_image')->storeAs('public/blog/images',$fileNameImageToStore);
            $pathVideo = $request->file('blog_post_video')->storeAs('public/blog/videos',$fileNameVideoToStore);

            $blog->update([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'blog_post_image' => $pathImage,
                'blog_post_video' => $pathVideo,
                'description' => $request->input('description'),
            ]);

            if ($blog) {
                return redirect()->route('adminBlog')->with('blogpost-update-successfull', 'Blog post updated successfully !!!');
            } else {
                return redirect()->back()->with('blogpost-update-failed', 'A problem was encountered while updating your post. Please re-check the details and try again.');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if (Storage::exists($blog->blog_post_image)) {
            $blogData = Storage::delete($blog->blog_post_image) && $blog->delete();

            if ($blogData) {
                return redirect()->route('adminBlog')->with('blog-post-delete-success', 'Blog post deleted successfully !!!');
            } else {
                return redirect()->back()->with('blog-post-delete-failed', 'There was an error deleting your blog post. Please try again later !!!');
            }
        } elseif (Storage::exists($blog->blog_post_video)) {
            $blogData = Storage::delete($blog->blog_post_video) && $blog->delete();

            if ($blogData) {
                return redirect()->route('adminBlog')->with('blog-post-delete-success', 'Blog post deleted successfully !!!');
            } else {
                return redirect()->back()->with('blog-post-delete-failed', 'There was an error deleting your blog post. Please try again later !!!');
            }
        } elseif (Storage::exists($blog->blog_post_image) && Storage::exists($blog->blog_post_video)) {
            $blogData = Storage::delete($blog->blog_post_image) && Storage::delete($blog->blog_post_video) && $blog->delete();

            if ($blogData) {
                return redirect()->route('adminBlog')->with('blog-post-delete-success', 'Blog post deleted successfully !!!');
            } else {
                return redirect()->back()->with('blog-post-delete-failed', 'There was an error deleting your blog post. Please try again later !!!');
            }
        } else {
            $blogData = $blog->delete();

            if ($blogData) {
                return redirect()->route('adminBlog')->with('blog-post-delete-success', 'Blog post deleted successfully !!!');
            } else {
                return redirect()->back()->with('blog-post-delete-failed', 'There was an error deleting your blog post. Please try again later !!!');
            }
        }
    }

    public function delete($id)
    {
        $blog = Blog::find($id);

        return view('pages.blog.pages.delete', ['blog'=>$blog]);
    }
}
