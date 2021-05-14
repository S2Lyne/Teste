<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;


class CadastrosController extends Controller
{
    public function create()
    {
        return view('cadastros.create');
    }

    public function store(Request $request)
    {
        Cadastro::create([
            'nome' =>$request->nome,
            'mail' =>$request->email,
            'confirmeEmail' =>$request->confirmeEmail,
            'cpf' =>$request->cpf,
            'identidade' =>$request->identidade,
            'perfil' =>$request->perfil,
            'cep' =>$request->cep,
            'complemento' =>$request->complemento

        ]);

        return "Cadastro Realizado com sucesso!";

    }
}
