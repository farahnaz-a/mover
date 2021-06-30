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
        $this->middleware('checkAdmin');

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
        $blogs = Blog::create($request->except('_token') + ['created_at' => Carbon::now(), 'written_by' => Auth::id()] );

         // Upload Image
         $image     = $request->file('image');
         $filename  = $blogs->id. '.' .$image->extension();
         $location  = public_path('uploads/blogs/');
         $image->move($location , $filename);

         // Save Image name in the database
         $blogs->image = $filename;


        //  =====Image One==== //
        if ($request->has('image_one')) {

            // Upload Image One
         $image_one     = $request->file('image_one');
         $filename_one  = $blogs->id. '_one.' .$image_one->extension();
         $location_one  = public_path('uploads/blogs/');
         $image_one->move($location_one , $filename_one);

         // Save Image name in the database
         $blogs->image_one = $filename_one;

        }

        //  =====Image Two==== //
        if ($request->has('image_two')) {

            // Upload Image One
         $image_two     = $request->file('image_two');
         $filename_two  = $blogs->id. '_two.' .$image_two->extension();
         $location_two  = public_path('uploads/blogs/');
         $image_two->move($location_two , $filename_two);

         // Save Image name in the database
         $blogs->image_two = $filename_two;

        }

        //  =====Image Three==== //
        if ($request->has('image_three')) {

            // Upload Image One
         $image_three     = $request->file('image_three');
         $filename_three  = $blogs->id. '_three.' .$image_three->extension();
         $location_three  = public_path('uploads/blogs/');
         $image_three->move($location_three , $filename_three);

         // Save Image name in the database
         $blogs->image_three = $filename_three;

        }

         // Save Everything in database 
         $blogs->save();

         //success message session
         return back()->withSuccess('Blog Added');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $blog = Blog::find($id);

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
            'image'           => 'image',
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


        //  =====Image One==== //
        if ($request->has('image_one')) {

            // Delete Existing image
            $existing = public_path('uploads/blogs/' . $blogs->image_one);
            unlink($existing);

            // Upload Image One
         $image_one     = $request->file('image_one');
         $filename_one  = $blogs->id. '_one.' .$image_one->extension();
         $location_one  = public_path('uploads/blogs/');
         $image_one->move($location_one , $filename_one);

         // Save Image name in the database
         $blogs->image_one = $filename_one;

        }

        //  =====Image Two==== //
        if ($request->has('image_two')) {

            // Delete Existing image
            $existing = public_path('uploads/blogs/' . $blogs->image_two);
            unlink($existing);

            // Upload Image One
         $image_two     = $request->file('image_two');
         $filename_two  = $blogs->id. '_two.' .$image_two->extension();
         $location_two  = public_path('uploads/blogs/');
         $image_two->move($location_two , $filename_two);

         // Save Image name in the database
         $blogs->image_two = $filename_two;

        }

        //  =====Image Three==== //
        if ($request->has('image_three')) {

            // Delete Existing image
            $existing = public_path('uploads/blogs/' . $blogs->image_three);
            unlink($existing);

            // Upload Image One
         $image_three     = $request->file('image_three');
         $filename_three  = $blogs->id. '_three.' .$image_three->extension();
         $location_three  = public_path('uploads/blogs/');
         $image_three->move($location_three , $filename_three);

         // Save Image name in the database
         $blogs->image_three = $filename_three;

        }


        // Update Other Fields
        $blogs->title             = $request->title;
        $blogs->description       = $request->description;
        $blogs->description_one   = $request->description_one;
        $blogs->description_two   = $request->description_two;
        $blogs->description_three = $request->description_three;

        // Save Everything In Database
        $blogs->save();

        return back()->withSuccess('Updated Succesfully');

    }


    /**
     * Blog Delete 
     */
    public function delete($id){

        $blog = Blog::find($id);
        
        // Delete from database
        $existing_image = public_path('uploads/blogs/'. $blog->image); 
        unlink($existing_image); 

        if ($blog->image_one) {
            
            $existing_image_one = public_path('uploads/blogs/'. $blog->image_one); 
            unlink($existing_image_one); 
        }

        if ($blog->image_two) {

            $existing_image_two = public_path('uploads/blogs/'. $blog->image_two); 
            unlink($existing_image_two); 
        }

        if ($blog->image_three) {

            $existing_image_three = public_path('uploads/blogs/'. $blog->image_three); 
            unlink($existing_image_three); 
        } 

        // Delete from database
        $blog->delete();
        return back()->withSuccess('Deleted Successfully');

    }

}
