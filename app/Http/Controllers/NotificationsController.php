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
    public function show($notification_id){
        // $notification = Notification::findOrFail($notification_id);
        $notification = Notification::where('notification_id', $notification_id)->firstOrFail();
        return view('notifications.show', ['notification'=>$notification]);
    }
}
