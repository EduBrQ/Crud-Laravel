<?php namespace App\Http\Controllers\Auth;

use App\Providers\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{


    public function index(Request $request)
    {
//        $this->authorize('show', Produto::class);

        $produtos = Produto::get();

        return view('produtos.index', compact('produtos'));
    }

    public function create()
    {
//        $this->authorize('create', Produto::class);

        $load = Produto::loadFormFields();

        $cidades = [];

        return view('produtos.form', compact('load','cidades'));
    }

    public function store(Request $request)
    {
        $this->customValidate($request->all(), new ProdutoValidator());

        $produto = new Produto();

        $produto = $produto->create($request->all());

        return redirect()->to('/produtos');
    }

    public function edit($id)
    {
//        $this->authorize('update', Produto::class);

        $produto = Produto::findOrFail($id);

        $load = $produto->loadFormFields();

        return view('produtos.form', compact('produto','load'));
    }

    public function update($id, Request $request)
    {
//        $this->customValidate($request->all(), new ProdutoValidator(), 'update');

        $produto = Produto::findOrFail($id);

        $produto->update($request->all());

        return redirect()->to('produtos');
    }

    public function delete($id)
    {
//        $this->authorize('destroy', Produto::class);

        Produto::findOrFail($id)->delete();

        return redirect()->to('produtos');
    }
}