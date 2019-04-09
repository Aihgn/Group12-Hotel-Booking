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
       if (Auth::check())
        {
            $id = Auth::user()->id;
            $acc_info = Customer::where('id_user',$id)->get();            
            return view('page.booking', compact('room','acc_info'));
        } else{
            return view('page.booking', compact('room'));
        }
        return view('page.booking', compact('room'));
    }

    public function postBooking(Request $req){
        // $this->validate(
        // );
        $reservation = new Reservation();
        if (Auth::check()){
            $reservation->id_customer= Auth::user()->id;
        }else{

        }
        $reservation->total='300';            
        $reservation->date_in = date('Y-m-d', strtotime($req->start));
        $reservation->date_out = date('Y-m-d', strtotime($req->end));
        $reservation->save();
        return redirect()->back();
    }
  public function addRoom(Request $req)
    {
        $i=0;
        if($req->ajax())
        {   
            $i++;
            $output1='';
            $output2='';
            $id = $req->get('id');
            $room = RoomType::find($id);
            $output1 .='
                <div class="card m-2 p-0">                             
                    <div class="card-horizontal">
                        <div class="img-square-wrapper">
                            <img class="room-img-cart" src="img/'.$room->image.'" alt="Card image cap">
                        </div>
                        <div class="card-body p-0">                                 
                            <span class="col-6 pt-4">'.$room->name.'</span>
                            
                            <a href="#" class="remove-room col-4 pt-3 ml-5 " id="roomid'.$i.'"><ion-icon name="close" style="font-size: 40px; color:#000;"></ion-icon></a>                
                        </div>
                    </div>      
                </div>
            ';
            $output2 .='
                <div class="roomid'.$i.'" id="roomid'.$i.'">
                    <a href="#" class="collapse-header">'.$room->name.'</a>
                    <div id="bill" class="collapse-content">
                        <div>
                            Total amount:
                        </div>
                    </div>
                </div>
            ';
            $data = array(
                "room" => $output1,
                "detail" =>$output2,

            );
            echo json_encode($data);
        }
    }
        
}
