<?php

namespace App\Http\Controllers;
Use App\Models\Reservation;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'guests' => 'required',
            'date' => 'required|date',
            'time' =>'required',
            'message' => 'required|string',
        ]);
        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'guests' => (int) $request->guests,
            'date' => $request->date,
            'time' => date('H:i:s', strtotime($request->time)),
            'message' => $request->message,
            'status' => 'pending',
        ]);
        return redirect()->back()->with('success','Your reservation has been recieve! We wil confirm shortly.');
    }
}
