<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Dojo;
class appcontroller extends Controller
{
    public function welcome() {
        $blogs = Blog::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('welcome', ['blogs' => $blogs]);
    }

    public function blogDetails(Blog $blog) {
        $blog->load('dojo');
        return view('pages.blogDetails', ["blog" => $blog]);
    }

    public function blog() {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('pages.blog', ['blogs' => $blogs]);
    }

    public function create() {
        $dojos = Dojo::all();
        return view('pages.create', ["dojos" => $dojos]);
    }

    public function showSignupForm()
    {
        // You can pass data to the view if needed
        return view('pages.signup'); // Adjust the path if necessary
    }

    public function showContactPage()
    {
        return view('pages.contact'); // Adjust the path if necessary
    }

    public function showAboutPage()
    {
        return view('pages.about'); // Adjust the path if necessary
    }

      public function store(Request $request) {
        // --> $blogs (POST)
        // hanlde POST request to store a new ninja record in table
        $validated = $request->validate([
            'title'=> 'required|string|max:255',
            'content'=>'required|string|max:1000',
            'author'=> 'required|string|min:5|max:100',
            'dojo_id'=> 'required|exists:dojos,id',

        ]);
        Blog::create($validated);
        return redirect()->route('welcome')->with('success', 'Blog Created');
      }

      public function destroy(Blog $blog) {
        // --> /ninjas/{id} (DELETE);
        $blog->delete();

        return redirect()->route('welcome')->with('success', 'Blog Deleted');

      }

      // edit() and update() for edit view and update requests
      // we won't be using these routes

}
