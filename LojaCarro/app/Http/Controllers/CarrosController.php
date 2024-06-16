<?php

namespace App\Http\Controllers;

use App\Models\Carros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //..recuperando os carros do banco de dados
        $carros = Carros::all();
        //..retorna a view index passando a variável $carros
        return view('carros.index')->with('carros', $carros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //..mostrando o formulário de cadastro
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //..instancia um novo model Carros
        $carros = new Carros();
        //..pega os dados vindos do form e seta no model
        $carros->nome = $request->input('nome');
        $carros->marca = $request->input('marca');
        $carros->modelo = $request->input('modelo');
        $carros->placa = $request->input('placa');
        $carros->ano = $request->input('ano');
        $carros->km = $request->input('km');
        $carros->cor = $request->input('cor');
        //..persiste o model na base de dados
        $carros->save();
        //..retorna a view com uma variável msg que será tratada na própria view
        $vehicles = Carros::all();
        return view('carros.index')->with('carros', $carros)
            ->with('msg', 'Carro cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //..recupera o carro da base de dados
        $carros = Carros::find($id);
        //..se encontrar o carro, retorna a view com o objeto correspondente
        if ($carros) {
            return view('carros.show')->with('carros', $carros);
        } else {
            //..senão, retorna a view com uma mensagem que será exibida.
            return view('carros.show')->with('msg', 'Carro não encontrado!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //..recupera o carro da base de dados
        $carros = Carros::find($id);
        //..se encontrar o carro, retorna a view de ediçãcom com o objeto correspondente
        if ($carros) {
            return view('carros.edit')->with('carros', $carros);
        } else {
            //..senão, retorna a view de edição com uma mensagem que será exibida.
            $carros = Carros::all();
            return view('carros.index')->with('carros', $carros)
                ->with('msg', 'Carro não encontrado!');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //..recupera o carros mediante o id
        $carros = Carros::find($id);
        //..atualiza os atributos do objeto recuperado com os dados do objeto Request
        $carros->nome = $request->input('nome');
        $carros->marca = $request->input('marca');
        $carros->modelo = $request->input('modelo');
        $carros->placa = $request->input('placa');
        $carros->ano = $request->input('ano');
        $carros->km = $request->input('km');
        $carros->cor = $request->input('cor');
        //..persite as alterações na base de dados
        $carros->save();
        //..retorna a view index com uma mensagem
        $carros = Carros::all();
        return view('carros.index')->with('carros', $carros)
            ->with('msg', 'Carro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //..recupeara o recurso a ser excluído
        $carros = Carros::find($id);
        //..exclui o recurso
        $carros->delete();
        //..retorna à view index.
        $carros = Carros::all();
        return view('carros.index')->with('carros', $carros)
            ->with('msg', "Carros excluído com sucesso!");
    }
}
