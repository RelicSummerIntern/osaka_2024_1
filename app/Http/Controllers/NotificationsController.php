<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Log;

class NotificationsController extends Controller
{
    //
    public function index(){
        // $notifications = Notification::all();
        $notifications = Notification::orderBy('created_at', 'desc')->get();
        return view('notifications.index', ['notifications'=>$notifications]);
    }
    public function show($id){
        // $notification = Notification::findOrFail($id);
        
        // 現在のレコードを取得
        $notification = Notification::where('notification_id', $id)->firstOrFail();

        // 1つ前のレコードを取得
        // $prevNotification = Notification::where('notification_id', '<', $id) // $notification_idより小さいカラムnotification_idを持つレコードを取ってくる
        $prevNotification = Notification::where('created_at', '<', $notification->created_at) // $notification->created_atより小さい(つまり時間が前の)カラムcreated_atを持つレコードを取ってくる
        ->orderBy('created_at', 'desc') // desc：降順に並べる
        ->first(); // 最初のレコードを取ってくる

        // 1つ後のレコードを取得
        $nextNotification = Notification::where('created_at', '>', $notification->created_at) 
        ->orderBy('created_at', 'asc') // asc：昇順に並べる
        ->first(); // 最初のレコードを取ってくる

        return view('notifications.show', ['prevNotification'=>$prevNotification, 'notification'=>$notification, 'nextNotification'=>$nextNotification]);

    }
    public function create(){ // フォームを表示するメソッド
        // 新たなレコードを作成する
        // $notifications = Notification::all();  // レコードをすべて取ってくる
        // return view('editor.create', ['notifications'=>$notifications]);
        return view('editor.create');
    }
    public function store_for_create(Request $request){ // フォームから送信されたデータを保存するメソッド
        // バリデーションを実行してtitleとbodyの入力を確認する
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        // 新しいお知らせを作成して保存
        $notification = new Notification;
        $notification->title = $request->title;
        $notification->body = $request->body;
        $notification->save();

        // 以下は、sessionのsuccessキーに対応している。
        // return redirect()->route('notifications.create')->with('success', 'お知らせが投稿されました！');
        return redirect()->route('edit')->with('success', 'お知らせが投稿されました！');
        
    }
    public function update(Request $request, $id){
        $notification = Notification::where('notification_id', $id)->firstOrFail();

        if ($request->isMethod('post') || $request->isMethod('put')) {
            // バリデーションルールを設定
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
            ]);
        
            // モデルの属性を更新
            $notification->title = $validated['title'];
            $notification->body = $validated['body'];
            $notification->save();

            // 更新成功後のリダイレクトやレスポンスを返す
            return redirect()->route('edit')
                            ->with('success', 'お知らせが更新されました。');
            
        }
        return view('editor.update',['notification'=>$notification]);
    }
    public function delete($id)
    {
    $notification = Notification::where('notification_id', $id)->firstOrFail();


    $notification->delete();


    return redirect()->route('edit')->with('success', '記事が削除されました');
    } 
}
