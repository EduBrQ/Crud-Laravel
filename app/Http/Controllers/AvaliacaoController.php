<?php namespace App\Http\Controllers;


use App\Produtos;
use Illuminate\Http\Request;

class AvaliacaoController extends Controller
{


    public function index(Request $request)
    {
//        $this->authorize('show', Produto::class);

        $produtos = Produtos::get();

        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
//        $this->authorize('create', Produto::class);

        return view('produtos.form', compact('load','cidades'));
    }

    public function store(Request $request)
    {


        $produto = new Produtos();

        $produto->create($request->all());

        return redirect()->to('/produtos');
    }

    public function edit($id)
    {
//        $this->authorize('update', Produto::class);

        $produtos = Produtos::findOrFail($id);


        return view('produtos.form', compact('produtos','load'));
    }

    public function update($id, Request $request)
    {
//        $this->customValidate($request->all(), new ProdutoValidator(), 'update');

        $produto = Produtos::findOrFail($id);

        $produto->update($request->all());

        return redirect()->to('produtos');
    }

    public function delete($id)
    {
//        $this->authorize('destroy', Produto::class);

        Produtos::findOrFail($id)->delete();

        return redirect()->to('produtos');
    }
}

