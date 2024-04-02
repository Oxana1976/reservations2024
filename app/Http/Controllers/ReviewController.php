<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Show;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reviews = Review::all();
        
        return view('review.index',[
            'reviews' => $reviews,
            'resource' => 'reviews',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $review = Review::find($id);
        
        return view('review.show',[
            'review' => $review,
        ]);
    }
//     public function show($showId)
// {
//     // Remplacez $showId par le paramètre approprié selon votre route
//     $show = Show::with(['reviews.user'])->findOrFail($showId);
//     return view('review.show', compact('show'));
// }

//     public function show($showId)
// {
//     $show = Show::with(['reviews.user'])->findOrFail($showId);

//     return view('review.show', [
//         'show' => $show,
//     ]);
// }
    // public function show($show_id)
    // {
    //     // Assumer que $showId est l'ID du spectacle pour lequel vous voulez afficher les avis
    //     $show = \App\Models\Show::with('reviews.user')->findOrFail($show_id);
    
    //     return view('review.show', [
    //         'show' => $show,
    //     ]);
    // }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
