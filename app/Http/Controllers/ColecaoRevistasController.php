<?php namespace App\Http\Controllers;


use App\ColecaoRevistas;
use App\Titulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColecaoRevistasController extends Controller
{


    public function index()
    {
        $colecoes = ColecaoRevistas::where('id_user',Auth::user()->id)->get();

        return view('colecoes.index', compact('colecoes'));
    }

    public function create()
    {
        return view('colecoes.create');
    }

    public function store(Request $request)
    {
        $colecao = new ColecaoRevistas();

        $colecao->create($request->all());

        return redirect()->to('/colecoes');
    }

    public function edit($id)
    {
        $colecoes = ColecaoRevistas::findOrFail($id);

        return view('colecoes.edit', compact('colecoes'));
    }

    public function titulos($id)
    {
        $titulos = Titulo::where("id_colecao",$id)->get();

        $colecao = ColecaoRevistas::find($id);

        return view('titulos.index', compact('titulos', 'colecao'));
    }

    public function update($id, Request $request)
    {
        $colecao = ColecaoRevistas::findOrFail($id);

        $colecao->update($request->all());

        return redirect()->to('colecoes');
    }

    public function delete($id)
    {
        ColecaoRevistas::findOrFail($id)->delete();

        return redirect()->to('colecoes');
    }
}

