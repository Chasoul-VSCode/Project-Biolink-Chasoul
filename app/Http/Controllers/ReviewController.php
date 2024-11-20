<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        // Store email in session
        session(['logged_in' => true]);
        session(['review_email' => $request->email]);

        return redirect()->back()->with('success', 'Logged in successfully');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'rating' => 'nullable|integer|min:1|max:5',
            'review' => 'required|string|min:3',
            'images.*' => 'nullable|image|max:2048', // Changed to allow multiple images
        ]);

        $data = [
            'email' => session('review_email'),
            'rating' => $request->rating ?? 5,
            'review' => $request->review,
            'images' => '[]', // Initialize as empty JSON array
            'likes' => 0,
            'comments' => json_encode([])
        ];

        // Handle multiple image uploads if present
        if ($request->hasFile('images')) {
            $uploadedImages = [];
            foreach($request->file('images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                
                // Move image to public/images folder
                $image->move(public_path('images'), $imageName);
                
                // Add image path to array
                $uploadedImages[] = 'images/' . $imageName;
            }
            
            // Save image paths as JSON array
            $data['images'] = json_encode($uploadedImages);
        }

        Review::create($data);

        return redirect()->back()->with('success', 'Review submitted successfully');
    }

    public function like($id)
    {
        $review = Review::findOrFail($id);
        $review->likes += 1;
        $review->save();

        return response()->json([
            'likes' => $review->likes
        ]);
    }

    public function comment(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string'
        ]);

        $review = Review::findOrFail($id);
        
        $comments = json_decode($review->comments, true) ?? [];
        
        // Add new comment to beginning of array
        array_unshift($comments, [
            'text' => $request->comment,
            'created_at' => now()
        ]);

        $review->comments = json_encode($comments);
        $review->save();

        return response()->json([
            'comment' => $request->comment,
            'created_at' => now()
        ]);
    }
}