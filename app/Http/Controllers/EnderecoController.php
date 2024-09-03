<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index(Request $r){
        $Endereco =  Endereco::all();

        return $Endereco;

    }
    public function findOne(Request $r){
        $endereco = Endereco::find($r->id);
        return $endereco;
    }
    public function insert(Request $r){
        $row = $r->only(['endereco']);
        //$row = $r->all();

        $cr = Endereco::create($row);


        return $cr;
    }
}
