<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;

use Auth;

class RoomController extends Controller
{
    //
    public function index()
    {
        //return 'Rooms';

        $nameof_User = Auth::user()->name;
        $emailof_User = Auth::user()->email;
        $data = Room::all();
        return view('room.hotelrooms',compact('nameof_User','emailof_User'),['rooms'=>$data]);

    }




}
