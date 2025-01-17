<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


use App\Models\Food;

use App\Models\Reservation;


use App\Models\Foodchef;

use App\Models\Order;

use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    
}
