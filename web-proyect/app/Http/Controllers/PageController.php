<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(Request $request)
    {
        //dd($request->get('for-my'));
        //dd($request->user());
        if ($request->get('for-my')) {
            //$posts = Post::where('user-id',$request->user()->id)->latest()->get();
            $user = $request->user();

            $user_ids = $user->friends()->pluck('id')->push($user->id);
            $posts = Post::whereIn('user_id', $user_ids)->latest()->with('user')->get();
        } else {
            $posts = Post::latest()->with('user')->get();
        }

        return view('dashboard', compact('posts'));
    }

    public function profile(User $user){
         $posts = $user->posts()->latest()->get();


        return view('profile', compact('user','posts'));
    }
    public function status(Request $request){
        $user = $request->user();
        $requests = $user->pendingTo()->get();
        $sends = $user->pendingFrom()->get();
        $friends= $request->user()->friends();

        return view('status', compact('requests', 'sends','friends'));
   }
}
