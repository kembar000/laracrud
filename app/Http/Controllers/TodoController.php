<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Lizt;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
      $todos = Todo::get();
      return view('todo.index', ['todos' => $todos]);
    }

    public function add()
    {
      $lists = Lizt::get();
      return view('todo.add', ['lists' => $lists]);
    }

    public function edit($id=null)
    {
      $lists = Lizt::get();
      if (is_null($id)) {
        redirect('/todo');
      }
      $todos=Todo::find((int)$id);
      return view('todo.edit',['todos'=>$todos, 'lists' => $lists]);
    }

    public function store(Request $request)
    {
      $todos= New Todo;
      $todos->name=$request->input('name');
      $todos->list_id=$request->input('list_id');
      if($todos->save())
      {
        return redirect('/todo');
      }
    }

    public function update(Request $request)
    {
      $todos=Todo::find($request->input('id'));
      $todos->name=$request->input('name');
      $todos->list_id=$request->input('list_id');
      if($todos->save())
      {
       return redirect('todo/');
      }
    }

    public function delete($id=null)
    {
      if(is_null($id))
      {
        return redirect('/todo');
      }
      $todos=Todo::Find((int)$id);
      $todos->delete();
      return redirect('/todo');
      }

    }
