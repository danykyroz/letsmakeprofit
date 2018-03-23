<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clientes;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Mail\Mailable;
use App\Mail\RegistroConfirm;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Mail;
use Auth;

class RegistroController extends Controller
{


  public function index(Request $request){

    $referido_id=$request->input("rid");
    $relid=1;
    $nombre="Sistema";
    //Buscamos el cliente con el id del referido
    if($referido_id!=""){
      $cliente=Clientes::where("refid","=",$referido_id)->get()->first();
      if($cliente){
          $relid=$cliente->id;
          $nombre=$cliente->names." ".$cliente->last_names;
      }
    }

    $data=['nombre' =>$nombre,"relid"=>$relid];
    return view('registro')->with($data);

  }

  public function existe_email(Request $request){

    $email=$request->input("email");

    if($email!=""){
      $cliente=User::where("email","=",$email)->get()->first();
      if($cliente){
         $existe=true;
      }else{
        $existe=false;
      }
    }
    $data=['success' =>$existe];

    return response($data)
            ->header('Content-Type', "application/json");
  }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function new(Request $request)
    {
        $name = $request->input('name');
		    $last_name = $request->input('last_name');
        $email = $request->input('email');
        $fecha_nacimiento = $request->input('date');
        $avatar = $request->input('avatar');
        $terminos= $request->input('terminos');
        $password=  $request->input('password');
        $parent_id=$request->input('_parentId');

        $messages_error=['required' => 'El campo :attribute es requerido.',
                        'unique' => 'El email :attribute ya esta siendo usado por otro usuario.'];

        $validator= Validator::make($request->all(), [
             'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255|unique:users',
             'password' => 'required|string|min:6|confirmed',
         ],$messages_error);

         if ($validator->fails()) {
           return redirect('/registro')
                       ->withErrors($validator)
                       ->withInput();
        }

        $data_user=array("name"=>$name." ".$last_name,"email"=>$email,"password"=>$password);

        $user=$this->create_user($data_user);
        $link=base64_encode($user->email);

        Mail::to($data_user["email"],$data_user["name"])
            ->send(new RegistroConfirm($data_user["name"],$link));

        Clientes::create([
            'names' => $name,
            'last_names' => $last_name,
            'birthday' => $fecha_nacimiento,
            'user_id'=>$user->id,
            'avatar'=>$avatar,
            'terminos'=>$terminos,
            "parent_id"=>$parent_id,
            "token_email"=>$link
        ]);

        $data=['nombre' =>$name,"apellido"=>$last_name,"email"=>$email];
        return view('registro_mensaje')->with($data);


        //
    }

    function validar_email($token){

      $cliente=Clientes::where("token_email","=",$token)->get()->first();
      if($cliente){
        $cliente->activo=1;
        $cliente->save();
        $user=User::where("id","=",$cliente->user_id)->get()->first();
        //Auth::login($user);
        $data=['nombre' =>$cliente->name,"apellido"=>$cliente->last_name,"email"=>$user->email];
        return view('registro_mensaje_activo')->with($data);
      }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Model\User
     */
    protected function create_user(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
