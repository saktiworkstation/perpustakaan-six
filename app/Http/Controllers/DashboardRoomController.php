<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class DashboardRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response(view('dashboard.room.index',[
            'rooms' => Room::latest()->get(),
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Response(view('dashboard.room.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'slug' => 'required|unique:rooms',
            'descriptions' => 'required',
        ]);

        Room::create($validateData);

        return redirect('/dashboard/rooms')->with('success', 'New Rooms has ben added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return Response();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return Response(view('dashboard.room.edit',[
            'room' => $room,
        ]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $rules = [
            'nama' => 'required',
            'descriptions' => 'required',
        ];

        if ($request->slug != $room->slug) {
            $rules['slug'] = 'required|unique:books';
        }

        $validateData = $request->validate($rules);

        Room::where('id', $room->id)->update($validateData);

        return redirect('/dashboard/rooms')->with('success', 'Rooms updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        return Response();
    }
}
