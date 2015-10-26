<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriaEnviarRequest;
use App\Categoria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriaController extends Controller
{

    public function index()
    {
        return view('categoriaCampeonato');
    }

    public function enviar(CategoriaEnviarRequest $request, Categoria $categoria)
    {

        $categoria->nome = $request->get('nome');

        $categoria->save();

//        echo "Categoria Salva com Sucesso " . $categoria->id;
        return redirect()->action('CategoriaController@listar');

    }

    public function listar()
    {
        return view('listaCat', array('categorias' => Categoria::all()));
    }

}
