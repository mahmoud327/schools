<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestBookingUser;
use Illuminate\Http\Request;
use App\Models\BookingUser;
use App\Models\Room;

class BookingController extends Controller
{
    
    //store room for user
    public function store(RequestBookingUser $request)
    {
        $price=$request->to_date >"2021-02-25"? 400:200;  
        //get room is empty            
        $room=Room::where('is_busy',0)->first();
        if($room)
        {
            $booking=BookingUser::create([
                'to_date'=>$request->to_date,
                'from_date'=>$request->from_date,
                'price'    =>$price,
                'user_id'  =>auth()->user()->id
            ]);
            $room->update(['is_busy'=>1]);
            flash()->success("تم حجز حجره بنجاح");
            return back();
        }
        else
        {
            flash()->error("لا يوجد حجره خاليه");
            return back();
        }
    }
  

}