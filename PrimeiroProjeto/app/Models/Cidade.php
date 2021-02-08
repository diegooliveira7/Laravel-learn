<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//essa classe vai ser usada para coeltar dados do banco de dados
class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['name'];//o campo name é o campo em que eu permito que tenha atribuição em massa
}
