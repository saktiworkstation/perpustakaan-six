<?php

namespace App\Http\Controllers;

use App\Models\BookingRoom;
use App\Models\Room;
use Illuminate\Http\Request;

class DashboardBookingRoomController extends Controller
{
    public function management(){
        return view('dashboard.booking.management',[
            'bookings' => BookingRoom::latest()->get(),
        ]);
    }

    public function sewa($slug){
        return view('dashboard.booking.sewa', [
            'data' => Room::where('slug', $slug)->first(),
            'rooms' => Room::all(),
        ]);
    }

    public function confirmSewa(Request $request){
        $validatedData = $request->validate([
            'room_id' => 'required',
            'waktu_pesan' => 'required',
            'jam' => 'required',
        ]);

        $waktu_pesan = date('Y-m-d', strtotime($validatedData['waktu_pesan']));

        $room = Room::where('id', $validatedData['room_id'])->first();

        $statusAwal = $room->status;
        $statusAkhir = $statusAwal + 1;
        $sataRoom = [
            'status' => $statusAkhir,
        ];

        $dataToStore = [
            'room_id' => $validatedData['room_id'],
            'waktu_pesan' => $waktu_pesan,
            'jam' => $validatedData['jam'],
            'user_id' => auth()->user()->id,
            'status' => 1
        ];

        Room::where('id', $validatedData['room_id'])->update($sataRoom);
        BookingRoom::create($dataToStore);

        return redirect('/dashboard/rooms')->with('success', 'Booking Successfully!');
    }

    public function laporanSewa(){
        //
    }

    public function grantIn($id){
        $statusAkhir = 3;
        $sataRoom = [
            'status' => $statusAkhir,
        ];

        Room::where('id', $id)->update($sataRoom);
        return redirect('/dashboard/booking/management')->with('success', 'Grant In Successfully!');
    }

    public function grantOut($id){
        $statusAkhir = 1;
        $sataRoom = [
            'status' => $statusAkhir,
        ];

        Room::where('id', $id)->update($sataRoom);
        return redirect('/dashboard/booking/management')->with('success', 'Grant Out Successfully!');
    }
}
