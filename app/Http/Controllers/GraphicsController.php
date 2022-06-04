<?php

namespace App\Http\Controllers;

use App\Models\Voto;
use Illuminate\Http\Request;
use App\Http\Controllers\VotoController;
use App\Models\Votocandidato;

class GraphicsController extends Controller
{
    public function index(){
    
        $votos = Votocandidato::all();
        $puntos = [];
        foreach($votos as $voto) {

            $puntos[] = ['name'=> $voto['candidato_id'], 'y'=> floatval([$voto['votos']])];
           
        }
        return view("graphics",["data" => json_encode($puntos)]);
    }


}
