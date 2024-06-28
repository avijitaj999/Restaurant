<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ReservationConfirm; // Ensure this is correctly imported

class TableController extends Controller
{
    public function index()
    { 
        $reservations = Reservation::all();
        return view("admin.reservation.index", compact("reservations"));
    }

    public function delete_table_data($id)
    {
        $reservation = Reservation::find($id);

        if ($reservation) {
            $reservation->delete();
            return redirect()->back()->with('success', 'Item deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Item not found.');
        }
    }

    public function update_status($id)
    {
        $reservation = Reservation::find($id);

        if ($reservation) {
            $reservation->status = true; // Assuming true means confirmed
            $reservation->save();
            
            // Notify the user about the reservation confirmation
            Notification::route('mail', $reservation->email)->notify(new ReservationConfirm());

            return redirect()->back()->with('success', 'Reservation status updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Item not found.');
        }
    }
}
