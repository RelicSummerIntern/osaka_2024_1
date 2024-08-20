<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationsController extends Controller
{
    //
    public function index(){
        $notifications = Notification::all();
        return view('notifications.index', ['notifications'=>$notifications]);
    }

}
