<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
class appcontroller extends Controller


{
    public function welcome() {
        $blogs = Blog::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('welcome', ['blogs' => $blogs]);
    }

    public function blogDetails($id) {
        $blog = Blog::with('dojo')->findOrFail($id);
        return view('pages.blogDetails', ["blog" => $blog]);
    }

    public function blog() {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('pages.blog', ['blogs' => $blogs]);
    }

    public function comment() {
        return view('pages.comment');
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

      public function store() {
        // --> /b$blogs/ (POST)
        // hanlde POST request to store a new ninja record in table
      }

      public function destroy($id) {
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
      }

      // edit() and update() for edit view and update requests
      // we won't be using these routes

}
