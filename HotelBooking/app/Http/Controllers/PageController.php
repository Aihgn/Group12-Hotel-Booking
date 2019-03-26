<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;
use App\RoomType;
use App\Reservation;

class PageController extends Controller
{
    public function getIndex(){
    	return view('page.index');
    }

    public function getRooms(){
    	return view('page.rooms');
    }

    public function getAbout(){
    	return view('page.about');
    }

    public function getGuestBooking(){
    	return view('page.guestbooking');
    }

    
    public function getBooking(){
        $room = RoomType::all();
        
        return view('page.booking' ,compact('room'));
    }
    
        
}
