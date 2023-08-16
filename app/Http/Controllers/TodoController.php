<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public $info;
    public $list;
    public function index(){
        return view('home.add');
    }

    public function saveToDo(Request $request){
        $this->info = new Todo();
        $this->info->name = $request->name;
        $this->info->description = $request->description;
        $this->info->save();

        return back()->with('message','Data added successfully!!!');
    }

    public function manageToDo(){
        $this->list = Todo::all();
        return view('home.manage',[
            'list'=>$this->list,
        ]);
    }
    public function editToDo($id){
        $this->info = Todo::find($id);

        return view('home.edit',[
           'todo'=>$this->info,
        ]);


    }
    public function updateToDo(Request $request){
        $this->info = Todo::find($request->id);

        $this->info->name = $request->name;
        $this->info->description = $request->description;

        $this->info->save();
        return redirect(route('manage.todo'))->with('message','Data updated successfully!!!');
    }
    public function deleteToDo(Request $request){
        $this->info = Todo::find($request->id);
        $this->info->delete();
        return back()->with('message','Deleted successfully!!!');
    }
}
