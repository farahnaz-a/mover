<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }

   public function store(Request $request)
   {
       Comment::create($request->except('_token') + ['created_at' => Carbon::now()]);
       
       $comments = Comment::where('announcement_id', $request->announcement_id)->get();

       $view = view('comments', compact('comments')); 
       $response = $view->render();
       $count = $comments->count();

       return response()->json(['response' => $response, 'count' => $count]);

   }
}
