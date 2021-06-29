<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Constructor
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('verified');

    }

    /**
     * Blog List
     */
    public function index(){

        return view('admin.blogs.index' , [
            'blogs' => Blog::latest()->get(),
        ]);
    }
    
    /**
     * Add Blog
     */
    public function create(){

        return view('admin.blogs.create');
    }
 
    /**
     * Blog Store
     */
    public function store(Request $request){

        //form validation
        $request -> validate([
            'title'           => 'required',
            'description'     => 'required',
            'image'           => 'required|image',
            'image_one'       => 'image',
            'image_two'       => 'image',
            'image_three'     => 'image',
        ]);

        // Insert data in database
        $blogs = Blog::create($request->except('_token') + ['created_at' => Carbon::now()] + ['written_by' => Auth::id()] );

         // Upload Image
         $image     = $request->file('image');
         $filename  = $blogs->id. '.' .$image->extension();
         $location  = public_path('uploads/blogs/');
         $image->move($location , $filename);

         // Save Image name in the database
         $blogs->image = $filename;
         $blogs->save();

         //success message session
         return back()->withSuccess('Blog Added');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $blog = Blog::Find($id);

        return view('admin.blogs.edit' , compact('blog'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $blogs = Blog::findOrFail($request->id);

        // Update Validation
        $request -> validate([
            'title'           => 'required',
            'description'     => 'required',
            'image'           => 'required|image',
            'image_one'       => 'image',
            'image_two'       => 'image',
            'image_three'     => 'image',
        ]);


        // check if request has image
        if($request->has('image')){

            // Delete Existing image
            $existing = public_path('uploads/blogs/' . $blogs->image);
            unlink($existing);

            //Upload New Image
            $image      = $request->file('image');
            $filename   = $blogs->id. '.' .$image->extension();
            $location   = public_path('uploads/blogs/');
            $image->move($location, $filename);

            // Save Image name in the database
            $blogs->image = $filename;
        }

        // Update Other Fields
        $blogs->title           = $request->title;
        $blogs->description     = $request->description;
        $blogs->description_one = $request->description_one;
        $blogs->description_two = $request->description_two;
        $blogs->description_three = $request->description_three;

        // Save Everything In Database
        $blogs->save();

        return back()->withSuccess('Updated Succesfully');

    }


    /**
     * Blog Delete 
     */
    public function delete($id){

        // Delete from database
       Blog::find($id)->delete();
       return back()->withSuccess('Deleted Successfully');
    }

}
