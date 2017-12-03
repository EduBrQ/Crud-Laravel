<?php namespace App\Http\Controllers;


use App\Amigo;
use App\Emprestimo;
use App\Titulo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{


    public function index()
    {
        $emprestimos = Emprestimo::where('id_user',Auth::user()->id)->get();

        return view('emprestimos.index', compact('emprestimos'));
    }

    public function create()
    {
        $amigos = Amigo::where('id_user',Auth::user()->id)->get();

        $titulos = Titulo::where('id_user',Auth::user()->id)->get();


        return view('emprestimos.create', compact('amigos', 'titulos'));
    }

    public function store(Request $request)
    {
        $emprestimo = new Emprestimo();

        $emprestimo->create($request->all());

        return redirect()->to('/emprestimos');
    }

    public function edit($id)
    {
//        $this->authorize('update', Emprestimo::class);

        $emprestimos = Emprestimos::findOrFail($id);


        return view('emprestimos.form', compact('emprestimos','load'));
    }

    public function update($id, Request $request)
    {
        $emprestimo = Emprestimos::findOrFail($id);

        $emprestimo->update($request->all());

        return redirect()->to('emprestimos');
    }

    public function delete($id)
    {
//        $this->authorize('destroy', Emprestimo::class);

        Emprestimos::findOrFail($id)->delete();

        return redirect()->to('emprestimos');
    }
}

