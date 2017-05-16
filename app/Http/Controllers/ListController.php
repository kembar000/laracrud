<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Lizt;

class ListController extends Controller
{
    public function index()
    {
      $lists = Lizt::get();
      return view('list.index', ['lists' => $lists]);
    }

    public function add()
    {//curiga naon kampret -_- loba error
      return view('list.add');
    }

    public function edit($id = null)
    {
      if(is_null($id)){
        return redirect('/list');
      }

      $list = Lizt::find((int)$id);

      return view('list.edit', ['list' => $list]);
    }

    public function store(Request $request)
    {
      $list = new Lizt;

      $list->name = $request->input('name');

      if($list->save()){
        return redirect('/list');
      }
    }

    public function update(Request $request)
    {
      $list = Lizt::find($request->input('id'));

      $list->name = $request->input('name');

      if($list->save()){
        return redirect('/list');
      }
    }

    public function delete($id = null)
    {
      if(is_null($id)){
        return redirect('/list');
      }

      $list = Lizt::find((int)$id);
      $list->delete();
      

      return redirect('/list');
    }
}
