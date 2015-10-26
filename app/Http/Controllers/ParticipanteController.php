<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipanteEnviarRequest;
use App\Participante;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ParticipanteController extends Controller
{

    public function index()
    {
        return view('participante');
    }

    public function enviar(ParticipanteEnviarRequest $request, Participante $participante)
    {

        $participante->nome = $request->get('nome');
        $participante->save();

        return redirect()->action('ParticipanteController@listar');

    }

    public function listar()
    {

        return view('listaPart', array('participantes' => Participante::all()));

    }


}
