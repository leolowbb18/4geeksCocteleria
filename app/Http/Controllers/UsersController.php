<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usu = \App\User::orderBy('id', 'DESC')->paginate();
        return view('crudUsuarios.indexUser', compact('usu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudUsuarios.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usu = new User;

        $usu->name = $request->name;
        $usu->email = $request->email;
        $usu->password = $request->password;
        $usu->admin = $request->admin;

        $usu->save();

        return redirect()->route('usuarios.index')->with('info', 'El usuario fue agregado de manera satisfactoria');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usu = \App\User::find($id);
        return view('crudUsuarios.editUser', compact('usu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usu = User::find($id);

        $usu->name = $request->name;
        $usu->email = $request->email;
        $usu->admin = $request->admin;

        $usu->save();

        return redirect()->route('usuarios.index')->with('info', 'El usuario fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usu = \App\User::find($id);
        $usu->delete();

        return back()->with('info', 'El usuario ha sido eliminado');
    }
}
