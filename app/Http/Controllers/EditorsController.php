<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editor;

class EditorsController extends Controller
{
    //
    public function index(){
        $notifications = Editor::all();
        return view('editors.index', ['editors'=>$editors]);
    }
    public function show($id){
        $notification = Editor::find($id);
        return view('editors.show', ['id'=>$id, 'editor'=>$editor]);
    }
}
