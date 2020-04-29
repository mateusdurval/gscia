<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class HomeController extends Controller
{
    public function index() 
    {
        $usuarios = Home::all();
        $total = Home::all()->count();
        return view('home/index', compact('usuarios', 'total'));
    }

    public function create() 
    {
        return view('home/create');
    }

    public function edit($id) 
    {
        $usuario = Home::find($id);
        return view('home/edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Home::find($id);
        $usuario->nome = $request->nome;
        $usuario->nascimento = $request->nascimento;
        $usuario->rg = $request->rg;
        $usuario->cpf = $request->cpf;
        $usuario->cep = $request->cep;
        $usuario->logradouro = $request->logradouro;
        $usuario->numero = $request->numero;
        $usuario->complemento = $request->complemento;
        if($usuario->save()) {
            return redirect()->route('home.index')->with('message', 'Usuário atualizado com sucesso!');
        } else {
            return redirect()->route('home.index')->with('message', 'Erro ao atualizar usuário');
        }
    }
    
    public function store(Request $request) 
    {
        $home = new Home;
        $home->nome = $request->nome;
        $home->nascimento = $request->nascimento;
        $home->rg = $request->rg;
        $home->cpf = $request->cpf;
        $home->cep = $request->cep;
        $home->logradouro = $request->logradouro;
        $home->numero = $request->numero;
        $home->complemento = $request->complemento;
        $home->save();  
        return redirect()->route('home.index');
    }

    public function show($id) 
    {
        //
    }


    public function destroy($id) 
    {
        $object = Home::find($id);
        if($object && $object->delete()) {
            echo "ok";
        } else {
            echo "not";
        }
    }

    public function teste($cpf) {
        $resultado = Home::where('cpf', $cpf)->get()->first();
        if($resultado == null) {
            echo "ok";
        } else {
            echo "not";
        }
    } 
}
