<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function index(Request $r){
        $users =  User::all();

        return json_encode($users);

    }
    public function FindOne(Request $r){
        // if(is_numeric($r->r)){
        //     $add = User::findOne($r->id);
        //     return $r->id;
        // }
        $User = User::find($r->id);
        return $User->endereco;

    }
    public function insert_user(Request $r){
        $row = $r->only(['name','email','password']);
        //$row = $r->all();
        $cr = User::create($row);
        return $cr;
    }
}
