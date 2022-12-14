<?php

namespace App\Http\Controllers\Admin;

use App\Enums\BookingStatus;
use App\Enums\PaymentStatus;
use App\Enums\Status;
use App\Hotel;
use App\Http\Controllers\Controller;
use App\Model\book_hotel;
use App\Model\book_hotel as book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class HotelBookingController extends Controller
{
    public function hotel()
    {
        $book_hotels = book_hotel::paginate(15);

        $hotels = Hotel::select('slug','name')->where('status',Status::Active)->get();

        return view('admin.dashboard.booking.hotel',compact('book_hotels','hotels'));
    }

    public function cancel($number)
    {
        $book_hotel = book::where('number',$number)->first();
        abort_if($book_hotel == null,'404','Reservation not found');
        $hotel = $book_hotel->hotel;

        abort_unless($hotel->user_id == auth()->user()->id or Gate::allows('isAdmin'),'401');

        $book_hotel->status = BookingStatus::Canceled;
        $book_hotel->save();

        return back()->with('popop_success', 'Order has been Canceled');
    }

    public function status(Request $request, $number)
    {

        $validator = Validator::make($request->all(), [
            'status' => 'required|string'
        ]);

        $book_hotel = book_hotel::where('number' , $number)->first();

        if ($validator->fails() or $book_hotel == null)
        {
            return response()->json([
                'message'   => 'Status was unable to change',
                'error' => 1
            ]);
        }

        switch ($request->status)
        {
            case BookingStatus::Reserved:
                if($book_hotel->status == BookingStatus::Booked)
                {
                    if($book_hotel->status == BookingStatus::Reserved)
                    {
                        break;
                    }
                    $hotel = $book_hotel->hotel;
                    $hotel->available_rooms += $book_hotel->total_rooms;
                    $room = $book_hotel->room;
                    $room->available += $book_hotel->total_rooms;

                    $hotel->save();
                    $room->save();
                }
                $book_hotel->status = BookingStatus::Reserved;
                break;
            case BookingStatus::Booked:
                if($book_hotel->status == BookingStatus::Booked)
                {
                    break;
                }
                $hotel = $book_hotel->hotel;
                $hotel->available_rooms -= $book_hotel->total_rooms;
                $room = $book_hotel->room;
                $room->available -= $book_hotel->total_rooms;

                $hotel->save();
                $room->save();
                $book_hotel->status = BookingStatus::Booked;
                break;
        }

        $book_hotel->save();

        return response()->json([
            'message'   => 'Booking Status changed',
            'error' => 0
        ]);
    }

    public function paymentStatus(Request $request, $number)
    {
        $validator = Validator::make($request->all(), [
            'payment_status' => 'required|string'
        ]);

        $book_hotel = book_hotel::where('number' , $number)->first();

        if ($validator->fails() or $book_hotel == null)
        {
            return response()->json([
                'message'   => 'Payment status was unable to change',
                'error' => 1
            ]);
        }

        switch ($request->payment_status)
        {
            case PaymentStatus::Unpaid:
                if($book_hotel->payment_status == PaymentStatus::Unpaid)
                {
                    break;
                }
                if($book_hotel->status == BookingStatus::Booked)
                {
                    $hotel = $book_hotel->hotel;
                    $hotel->available_rooms += $book_hotel->total_rooms;
                    $room = $book_hotel->room;
                    $room->available += $book_hotel->total_rooms;
                    $book_hotel->status = BookingStatus::Reserved;

                    $hotel->save();
                    $room->save();
                }
                $book_hotel->payment_status =  PaymentStatus::Unpaid;
                break;
            case PaymentStatus::UnderReview:
                if($book_hotel->payment_status == PaymentStatus::UnderReview)
                {
                    break;
                }
                if($book_hotel->status == BookingStatus::Booked)
                {
                    $hotel = $book_hotel->hotel;
                    $hotel->available_rooms += $book_hotel->total_rooms;
                    $room = $book_hotel->room;
                    $room->available += $book_hotel->total_rooms;
                    $book_hotel->status = BookingStatus::Reserved;

                    $hotel->save();
                    $room->save();
                }
                $book_hotel->payment_status =  PaymentStatus::UnderReview;
                break;
            case PaymentStatus::Successful:
                if($book_hotel->payment_status == PaymentStatus::Successful)
                {
                    break;
                }
                if($book_hotel->status != BookingStatus::Booked)
                {
                    $hotel = $book_hotel->hotel;
                    $hotel->available_rooms -= $book_hotel->total_rooms;
                    $room = $book_hotel->room;
                    $room->available -= $book_hotel->total_rooms;

                    $hotel->save();
                    $room->save();
                }
                $book_hotel->status = BookingStatus::Booked;
                $book_hotel->payment_status = PaymentStatus::Successful;
                break;
        }

        $book_hotel->save();

        return response()->json([
            'message'   => 'Booking Payment Status changed',
            'error' => 0
        ]);
    }
}
