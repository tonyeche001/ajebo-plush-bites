<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\Contact;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        $totalReservations = Reservation::count();
        $pendingReservations = Reservation::where('status', 'pending')->count();
        $confirmedReservations = Reservation::where('status', 'confirmed')->count();
        $totalContacts = Contact::count();
        return view('admin.dashboard', compact(
            'totalReservations',
            'pendingReservations',
            'confirmedReservations',
            'totalContacts'
        ));

    }
    public function reservations()
    {
        $reservations = Reservation::latest()->get();
        return view('admin.reservations', compact('reservations'));
    }
    public function contacts()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts', compact('contacts'));
    }
    public function updateStatus(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Reservation updated');
    }
}
