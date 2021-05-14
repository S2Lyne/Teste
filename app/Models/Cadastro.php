<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable = ['name', 'mail', 'confirmarEmail', 'cpf','identidade','perfil', 'cep', 'complemento'];

}

?>
