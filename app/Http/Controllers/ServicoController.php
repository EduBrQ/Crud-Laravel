<?php

namespace App\Http\Controllers;
use App\Servicos;
use Illuminate\Http\Request;

class ServicoController extends Controller
{

    public function index(Request $request)
    {
//        $this->authorize('show', Produto::class);

        $servicos = Servicos::get();

        return view('servicos.index', compact('servicos'));
    }

    public function create()
    {
//        $this->authorize('create', Produto::class);

        return view('servicos.form', compact('load','cidades'));
    }

    public function store(Request $request)
    {


        $servicos = new Servicos();

        $servicos->create($request->all());

        return redirect()->to('/servicos');
    }

    public function edit($id)
    {
//        $this->authorize('update', Produto::class);

        $servicos = Servicos::findOrFail($id);


        return view('servicos.form', compact('servicos','load'));
    }

    public function update($id, Request $request)
    {
//        $this->customValidate($request->all(), new ProdutoValidator(), 'update');

        $servicos = Servicos::findOrFail($id);

        $servicos->update($request->all());

        return redirect()->to('servicos');
    }

    public function delete($id)
    {
//        $this->authorize('destroy', Produto::class);

        Servicos::findOrFail($id)->delete();

        return redirect()->to('servicos');
    }
}


