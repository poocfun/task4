<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Tamu;

class Home extends Controller
{
    public function index()
    {
        $tamu=Tamu::get();
        $data=array(
            'tamu'=> $tamu

        );
        return view('tamu', $data);
    }

    public function store(Request $request)
    {
        $tamu=Tamu::create($request->all());
        if($tamu) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student success!');
        }
    return redirect('/dashboard');
    }
}
