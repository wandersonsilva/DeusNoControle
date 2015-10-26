<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampeonatoEnviarRequest;
use App\Campeonato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampeonatoController extends Controller
{

    public function index()
    {
        return view('campeonato');
    }

    public function enviar(CampeonatoEnviarRequest $request, Campeonato $campeonato)
    {

        $campeonato->nome = $request->get('nome');
        $campeonato->categoria_id = $request->get('categoria_id');

        $campeonato->save();

        //echo "Campeonato " . $campeonato->id . " criado com sucesso.";

        return redirect()->action('CampeonatoController@listar');

    }

    public function listar()
    {
        return view('listaCamp', array('campeonatos' => Campeonato::all()));
    }

}
