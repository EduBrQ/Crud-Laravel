<?php namespace App\Http\Controllers;


use App\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{


    public function index(Request $request)
    {
//        $this->authorize('show', Produto::class);

        $produtos = Produtos::get();

        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        $produto = new Produtos();

        $produto->create($request->all());

        return redirect()->to('/produtos');
    }

    public function edit($id)
    {
        $produtos = Produtos::findOrFail($id);

        return view('produtos.edit', compact('produtos'));
    }

    public function update($id, Request $request)
    {
        $produto = Produtos::findOrFail($id);

        $produto->update($request->all());

        return redirect()->to('produtos');
    }

    public function delete($id)
    {
        Produtos::findOrFail($id)->delete();

        return redirect()->to('produtos');
    }
}

