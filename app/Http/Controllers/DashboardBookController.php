<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Tests\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response(view('dashboard.book.index', [
            'books' => Book::latest()->get(),
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Response(view('dashboard.book.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:books',
            'penulis' => 'required',
            'penerbit' => 'required',
            'descriptions' => 'required',
            'thn_terbit' => 'required',
            'stok' => 'required',
            'image' => 'image',
        ]);

        Book::create($validatedData);

        return redirect('/dashboard/books')->with('success', 'New Book has ben added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return Response(view('detail', [
            'book' => $book,
            'books' => Book::latest()->get(),
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return Response(view('dashboard.book.edit', [
            'book' => $book
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $rules = [
            'title' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'descriptions' => 'required',
            'thn_terbit' => 'required',
            'stok' => 'required',
        ];

        if ($request->slug != $book->slug) {
            $rules['slug'] = 'required|unique:books';
        }

        $validateData = $request->validate($rules);

        Book::where('id', $book->id)->update($validateData);

        return redirect('/dashboard/books')->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/dashboard/books')->with('success', 'Book deleted successfully');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Book::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
