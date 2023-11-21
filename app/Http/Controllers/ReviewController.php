<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    function store(Request $request){
        $validatedData = $request->validate([
            'rate' => 'required',
            'descriptions' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['time_review'] = now()->format('Y-m-d H:i:s');

        Review::create($validatedData);

        return redirect()->back()->with('success', 'Reviewing successfully!');
    }
}
