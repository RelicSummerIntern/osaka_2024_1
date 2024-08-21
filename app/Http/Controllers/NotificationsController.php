<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Log;

class NotificationsController extends Controller
{
    //
    public function index(){
        $notifications = Notification::all();
        return view('notifications.index', ['notifications'=>$notifications]);
    }
    public function show($id){
        // $notification = Notification::findOrFail($id);
        
        // 現在のレコードを取得
        $notification = Notification::where('notification_id', $id)->firstOrFail();

        // 1つ前のレコードを取得
        $prevNotification = Notification::where('notification_id', '<', $id) //$notification_idより小さいカラムnotification_idを持つレコードを取ってくる
        ->orderBy('notification_id', 'desc') // desc：降順に並べる
        ->first(); // 最初のレコードを取ってくる

        // 1つ後のレコードを取得
        $nextNotification = Notification::where('notification_id', '>', $id)
        ->orderBy('notification_id', 'asc') // asc：昇順に並べる
        ->first(); // 最初のレコードを取ってくる

        return view('notifications.show', ['prevNotification'=>$prevNotification, 'notification'=>$notification, 'nextNotification'=>$nextNotification]);

    }
    public function create(){
        return view('editor.create');
    }
    public function update(){
        return view('editor.update');
    }
    public function del($id){
        $notification = Notification::where('notification_id', $id)->firstOrFail();
        return view('editor.delete',['notification'=>$notification]);
    } 
    public function destroy($id)
{
    $notification = Notification::where('notification_id', $id)->firstOrFail();


    $notification->delete();


    return view('editor.index');
} 
}
