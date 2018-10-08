<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\history;
use App\models\emiten;


class historyController extends Controller
{
    public function index()
    {
      $emitens = emiten::all();
      $data = array('emitens' =>$emitens);
      return view('history')->with($data);
    }

    public function create(Request $request)
    {
      # code...
    }


}
