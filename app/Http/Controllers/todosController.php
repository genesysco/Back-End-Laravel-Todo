<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
Use Alert;

class todosController extends Controller
{
    public function index(){
        $todos = Todo::latest()->paginate(5); 
        return view('index', compact('todos'));
    }

    public function show(Todo $id){
        // $todo = Todo::findOrFail($id);
        return view('show', compact('id'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        
        Todo::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
        Alert::success('تشکر ها', 'تسک با موفقیت ایجاد شد !');

        return redirect()->route('index');
    }

    public function change(Todo $id){
        return view('update', compact('id'));
    }

    public function update(Request $request,Todo $id)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $id->update([
            'title' => $request->title,
            'descritption' => $request->description
        ]);

        Alert::success('تشکر ها', 'تسک با موفقیت بروزرسانی شد !');

        return redirect()->route('index');
    }

    public function delete(Todo $id)
    {
        $title = 'حذف تسک !؟';
        $text = "آیا مطمعن هستید که تسک " . $id->title . "حذف کنید ؟" ;
        confirmDelete($title, $text);
        $id->delete();
        return redirect()->route('index');
    }
    
    public function confirm(Todo $id)
    {
        $id->update([
            'compeleted' => 1
        ]);

        Alert::success('تشکر ها', 'تسک با موفقیت تایید شد !');

        return redirect()->route('index');
    }
}
