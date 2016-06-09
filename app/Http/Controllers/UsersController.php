<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

/*use de validacion*/
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::orderBy('id','ASC')->Paginate(5);
        /*en el caso de otro modelo de pagination:
        Add single
        $users = User::orderBy('id','ASC')->simplePaginate(1);
        */
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        $user= new User($request->all());
        $user->password=bcrypt($request->password);

       $user->save();

        /*mensaje*/
        flash()->success('Usuario: '.$user->name.' | Creado correctamente |');
        /*redireccion*/
        return redirect()->route('admin.users.create');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user =User::find($id);
        /*llamando a vista de edicion*/
        return view('admin.users.edit')->with('user',$user);
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
       $user =User::find($id);

        $user->name=$request->name;
        $user->email=$request->email;
        $user->type=$request->type;

        /* pendiente para actualizar la contraseña

        $user->name=$request->name;*/

        $user->save();
        /*flash::error('flash_notification.message','Usuario '.$user->name.' Actualizado Correctamente');*/
        flash()->info('Usuario: '.$user->name.' | Actializado Correctamente |');
        return redirect()->route('admin.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user = User::find($id);
      $user->delete();
        /*\Session::flash('flash_message','Usuario '.$user->name.' borrado corectamente');*/
        flash()->warning('Usuario: '.$user->name.' | Eliminado |');
        return redirect()->route('admin.users.index');
    }
}
