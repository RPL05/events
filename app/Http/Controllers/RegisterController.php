<?php

namespace App\Http\Controllers\Register;

use App\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('backend.registers.index');
    }
    public function create()
    {

        return view('backend.registers.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_industri'   => 'required',
            'nama_pimpinan' => 'required',
            'alamat'    => 'required',
            'email'    => 'required',
        ]);

        $registers = Register::create([
            'nama_industri'   => $request->nama_industri,
            'nama_pimpinan' => $request->nama_pimpinan,
            'alamat'    => $request->alamat,
            'email'    => $request->email,
        ]);

        return redirect()->back();
    }
    public function show()
    {
        return view('backend.registers.show');
    }
}
