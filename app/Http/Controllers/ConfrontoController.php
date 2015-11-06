<?php

namespace App\Http\Controllers;

use App\Confronto;
use App\Participante;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConfrontoController extends Controller
{

    public function index()
    {
        return view('confronto.index');
    }

    public function adicionar(Request $request, Confronto $confronto)
    {

        $confronto->campeonato_id = $request->get('campeonato_id');
        $confronto->p1_id = $request->get('p1_id');
        $confronto->p2_id = $request->get('p2_id');

        $confronto->save();

        return redirect()->action('ConfrontoController@listar');

    }

    public function listar()
    {


       $confronto = DB::table('confrontos as co')
            ->join('participantes as p1', 'co.p1_id', '=', 'p1.id')
            ->join('participantes as p2', 'co.p2_id', '=', 'p2.id')
            ->select('co.p1_id', 'p1.nome as nome1', 'co.pontos_p1', 'co.p2_id', 'p2.nome as nome2','co.pontos_p2', 'num_jogador')
            ->get();


        return view('confronto.lista', compact('confronto'));
//        dd($confronto);

//        return view('confronto.lista', compact('confronto_p1', 'confronto_p2'));
//        dd(compact('confronto_p1', 'confronto_p2'));


    }

    public function numerarJogador()
    {
        $numerar = DB::table('confrontos as co')
            ->join('participantes as p1', 'co.p1_id', '=', 'p1.id')
            ->join('participantes as p2', 'co.p2_id', '=', 'p2.id')
            ->select('p1.nome as nome1', 'co.p1_id', 'co.p2_id', 'p2.nome as nome2', 'num_jogador')
            ->get();

        return view('confronto.numerajogador', compact('numerar'));
    }

    public function adicionarNumeracao(Request $request, Confronto $confronto)
    {

        $confronto->p1_id = $request->get('p1_id');
        $confronto->num_jogador = $request->get('numero');


//        $confronto->campeonato_id = $request->get('campeonato_id');
//        $confronto->p1_id = $request->get('p1_id');
//        $confronto->num_jogador = $request->get('numero');

        dd($confronto);

//        //$confronto->p2_id = $request->get('p2_id');
//
//        $confronto->save();
//
//        return redirect()->action('ConfrontoController@numerarJogador');

    }

}
