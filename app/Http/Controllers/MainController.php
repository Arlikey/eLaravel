<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use App\Rules\ValidPhoneFormat;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view("index", compact('categories'));
    }

    public function contacts()
    {
        return view("contacts");
    }

    public function sendFeedback(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'phone' => ['required', new ValidPhoneFormat]
        ]);

        return redirect()->back()->with('success', 'Feedback successfully sent!');
    }

    public function reviews()
    {
        $reviews = Review::take(10)->get();
        return view("reviews", compact('reviews'));
    }

    public function postReview(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50',
            'comment' => 'required|string|max:500',
            'satisfaction' => 'required|integer|between:1,3'
        ]);

        Review::create($request->all());

        return redirect()->back()->with('success', 'Review posted successfully!');
    }

    public function movies($id)
    {
        $category = Category::findOrFail($id);
        $movies = $category->movies->take(10);

        return view("movies", compact('category', 'movies'));
    }

    public function movieDetails($id, $movieId)
    {
        $category = Category::findOrFail($id);
        $movie = $category->movies()->findOrFail($movieId);

        return view("movie", compact('category', 'movie'));
    }
}
