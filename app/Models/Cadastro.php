<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = ['name', 'email', 'email_verified_at', 'cpf','perfil', 'cep', 'complemento'];

}

?>
