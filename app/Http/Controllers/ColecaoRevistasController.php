<?php namespace App\Http\Controllers;


use App\ColecaoRevistas;
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

        return view('colecoes.form', compact('load'));
    }

    public function store(Request $request)
    {


        $colecao = new ColecaoRevistas();

        $colecao->create($request->all());

        return redirect()->to('/colecoes');
    }

    public function edit($id)
    {
//        $this->authorize('update', Colecao::class);

        $colecoes = ColecaoRevistas::findOrFail($id);


        return view('colecoes.form', compact('colecoes','load'));
    }

    public function update($id, Request $request)
    {
//        $this->customValidate($request->all(), new ColecaoValidator(), 'update');

        $colecao = ColecaoRevistas::findOrFail($id);

        $colecao->update($request->all());

        return redirect()->to('colecoes');
    }

    public function delete($id)
    {
//        $this->authorize('destroy', Colecao::class);

        ColecaoRevistas::findOrFail($id)->delete();

        return redirect()->to('colecoes');
    }
}

