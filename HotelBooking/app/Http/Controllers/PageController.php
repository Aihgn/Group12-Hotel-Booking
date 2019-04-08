<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Auth;
use App\RoomType;
use App\Reservation;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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

    public function getMyAccount(){
        $id_user = Auth::id();
        // dd(Auth::user());
        // Sai chỗ này này, trong dâtbase chỉ có 1 thằng id = 1 thôi mà m lại lấy ra thằng có id = 4
        $all_data = Customer::all();
        $acc_info= Customer::where('id_user', $id_user)->get();
        // dd($acc_info, $all_data, $id_user);
        return view('page.myaccount',compact('acc_info'));
    }
    public function postMyAccount(Request $req){
        $id_user = Auth::id();
        $user=User::findOrFail($id_user);
        // Validator::make($req->all(),
        // [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'phone_number'=>'required|string',
        //     'address'=>'required|string',
        //     'password' => Auth::user()->password,
        // ])->Validate(); 
        
       
            if(Hash::check($req->password, $user->password)){

                User::where('id',$id_user)->update(array(
                             'name'=>$req->name,


                ));
                Customer::where('id_user',$id_user)->update(array(
                            'name'=>$req->name,
                             'phone_number'=>$req->phone_number,
                             'address'=>$req->address1,


                ));
                return redirect()->back();
            }
            else{
                //
                return redirect()->back()->with(['flag'=>'failed','message'=>'Wrong password']);
            }    
    }
        
}
