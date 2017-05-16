<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Lizt;

class ListController extends Controller
{
  //Pemanggilan semua data
    public function index()
    {
      $lists = Lizt::get();
      return view('list.index', ['lists' => $lists]);
    }

    public function add()
    {
      //Menampilkan file add.blade.php yg berada di folder view/list
      return view('list.add');
    }

    public function edit($id = null)
    {
      //Jika $id =null maka redirect route /list
      if(is_null($id))
      {
        return redirect('/list');
      }
      //Mencari data dari id untuk kita edit
      $list = Lizt::find((int)$id);

      return view('list.edit', ['list' => $list]);
    }

    public function store(Request $request)
    {
      //Menambah data dengan field nama
      $list = new Lizt;

      $list->name = $request->input('name');

      if($list->save()){
        return redirect('/list');
      }
    }

    public function update(Request $request)
    {
      //Penamaan List dan mencari id
      $list = Lizt::find($request->input('id'));
      //Mengupdate data field name
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
