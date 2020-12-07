<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Tag;
use App\Category;
use Image;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at','desc')->paginate(12);
        return view('links.blog.blog')->with('blogs', $blogs);
    }

    public function create_article()
    {
        $categories = Category::all();
        return view('links/blog/create-article')->with('categories', $categories);
    }

    public function store_article(Request $request)
    {
        //dd($request);
        // validate the data
        $this->validate($request, [
            'fullnames'         =>  'required|string|max:255',
            'email'             =>  'required|string|max:255',
            'avatar'            =>  'sometimes|image|max:2048',
            'category'          =>  'required|string',
            'title'             =>  'required|string|max:255',
            'body'              =>  'required|string',
            'image_file'        =>  'required|image|max:2048' 
        ]);

        $blog                   =   new Blog;
        $blog->fullnames        =   $request->input('fullnames');
        $blog->email            =   $request->input('email');
        // Handle Image Upload
        if($request->avatar     !=  null) {
            $avatar             =   $request->avatar;
            $filenameWithExt    =   time().'.'.request()->avatar->getClientOriginalExtension();
            $safe_path          =   '/img/blog/avatar/';
            $fileNameToStore    =   $safe_path.$filenameWithExt;
            $avatar->move(public_path('/img/blog/avatar/'), $filenameWithExt);   
        } else {
            $fileNameToStore    =   '/img/blog/avatar/avatar.png';
        }

        $blog->avatar           =   $fileNameToStore;
        $blog->category         =   $request->input('category');
        $blog->title            =   $request->input('title');
        $blog->body             =   $request->input('body');
        // Handle File Upload
        if($request->image_file !=  null) {
            $image              =   $request->image_file;
            $filenameWithExt    =   time().'.'.$image->getClientOriginalExtension();
            $safe_path          =   '/img/blog/pictures/';
            $fileNameToStore    =   $safe_path.$filenameWithExt;
            $image->move(public_path('/img/blog/pictures/'), $filenameWithExt); 
        } 

        $blog->image_file       =   $fileNameToStore;
        $blog->save();

        Session()->flash('post_store_success', 'Your article was succesfully created');
        return redirect('/blog/create-article');
    }

    public function single($id)
    {
        $post = Blog::find($id);
        return view('links/blog/blog-single')->with('post', $post);
    }

    public function create()
    {
        $tags = Tag::all();
        return view('blog-posts.create')->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        // validate the data
        $this->validate($request, [
            'title'         =>  'required',
            'body'          =>  'required' ,
            'image_file'    =>  'sometimes|image|nullable|max:1999',
            'tags'          =>  'required'
        ]);

        $post               =   new Post;
        $post->title        =   $request->input('title');
        $post->body         =   $request->input('body');
        $post->user_id      =   auth()->user()->id;

        // Handle File Upload
        if($request->hasFile('image_file')) {
            $image           = $request->file('image_file');
            $filenameWithExt = $request->file('image_file')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $image->getClientOriginalExtension();
            $fileNameToStore = $filename.' '.time().'.'. $extension;
            $location        = public_path('img/img_blog/' . $fileNameToStore);
            Image::make($image)->resize(800, 400)->save($location);
            //$path = $request->file('image_file')->storeAs('public/image_file', $fileNameToStore);

        } else {
            $fileNameToStore  = 'noimage.jpg';
        }

        $post->image_file     = $fileNameToStore;
        $post->save();
        $post->tags()->sync($request->tags, false);

        Session()->flash('post_store_success', 'Your Post was succesfully created');
        return redirect('/blog-posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('blog-posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post       =   Post::find($id);
        $tags       =   Tag::all();
        $tags2      =   array();
        foreach ($tags as $tag){
            $tags2[$tag->id]    =   $tag->name;
        }

        return view('blog-posts.edit')->with('post', $post)->withTags($tags2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'     =>  'required',
            'body'      =>  'required'
        ]);

        $post           =   Post::find($id);
        $post->title    =   $request->input('title');
        $post->body     =   $request->input('body');

        // Handle File Upload
        if($request->hasFile('image_file')) {
            $image              =   $request->file('image_file');
            $filenameWithExt = $request->file('image_file')->getClientOriginalName();
            $filename           =   pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension  = $request->file('image_file')->getClientOriginalExtension();
            $fileNameToStore    =   $filename.' '.time().'.'. $extension;
            $location           =   public_path('img/img_blog/' . $fileNameToStore);
            Image::make($image)->resize(800, 400)->save($location); 

            $oldFilename        =   $post->image_file;
            //Delete the old Photo
            Storage::delete($oldFilename);
            $post->image_file   =   $fileNameToStore;  
        }

        $post->save();

        if(isset($request->tags)){
            $post->tags()->sync($request->tags, true);
        } else{
            $post->tags()->sync(array());
        }

        Session()->flash('post_update_success', 'You have succesfully updated your post');
        return redirect('/blog-posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        Storage::delete($post->image_file);

        $post->delete();

        //Session()->flash('post_delete_success', 'You have succesfully deleted your Post');
        return redirect('/blog-posts');
    }
}
