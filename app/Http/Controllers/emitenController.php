<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\emiten;

class emitenController extends Controller
{
    public function index()
    {
      $emitens = emiten::all();
      $data = array('emitens' =>$emitens , );
      return view('emitens')->with($data);
    }

    public function create(Request $request)
    {
    
      if ($request->syariah == "on") {
        $syariah = 1;
      }else {
        $syariah = 0;
      }

      $add = new emiten;
      $add->kode = $request->kode;
      $add->visi = $request->visi;
      $add->misi = $request->misi;
      $add->deskripsi = $request->deskripsi;
      $add->syariah = $syariah;
      $add->company_name = $request->company_name;
      $add->save();

      return redirect()->route('emiten.index');
    }
}
