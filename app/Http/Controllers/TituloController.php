<?php namespace App\Http\Controllers;


use App\Titulo;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    public function index()
    {
        $titulos = Titulo::get();

        return view('titulos.all', compact('titulos'));
    }

    public function create($id)
    {
        return view('titulos.create', compact('id'));
    }

    public function store(Request $request)
    {
        $titulo = new Titulo();

        $titulo->create($request->all());

        return redirect()->to('/colecoes/'. $request->id_colecao .'/titulos');
    }

    public function edit($id)
    {
        $titulos = Titulo::findOrFail($id);


        return view('titulos.edit', compact('titulos'));
    }

    public function update($id, Request $request)
    {
        $titulo = Titulo::findOrFail($id);

        $titulo->update($request->all());

        return redirect()->to('/colecoes/'. $titulo->id_colecao .'/titulos');
    }

    public function delete($id)
    {
        Titulo::findOrFail($id)->delete();

        return redirect()->back();
    }
}

