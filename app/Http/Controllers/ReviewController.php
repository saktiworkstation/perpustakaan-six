<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'book_id' => 'required',
            'rate' => 'required',
            'descriptions' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['time_review'] = now()->format('Y-m-d H:i:s');

        Review::create($validatedData);

        return redirect()->back()->with('success', 'Reviewing successfully!');
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'rate' => 'required',
            'descriptions' => 'required',
        ]);

        Review::where('id', $id)->update($validatedData);

        return redirect()->back()->with('success', 'Reviewing successfully!');
    }
}
