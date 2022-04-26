<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = DB::table('newtask')->get();
        return view('tasks.index',compact('tasks'));
    }
public function show($id){
$task= DB:: table('newtask')->find($id);
return view('tasks.show', compact('task'));

}
public function store(Request $request){
    $task = DB::table('newtask')->insert([
'name'=>$request->name,
'created_at' => now(),
'updated_at' => now()

]);
    return redirect()->back();

}
public function edit($id){
    $task =  DB::table('newtask')->find($id);
    $tasks =  DB::table('newtask')->get();
    return view('tasks.update' ,compact('task','tasks'));
}
public function update($id,Request $request){
    $task =  DB::table('newtask')->find($id);
    $update = DB::table('newtask')->update(['name'=> $request -> name]);
    return redirect('/');
}
public function destroy($id){
    $task = DB::table('newtask')->where('id','=',$id)->delete();
    return redirect()->back();

  }
}
