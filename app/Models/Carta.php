<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    use HasFactory;
     // Indicar o nome da tabela
     protected $table = 'Cartas';

     // Indicar quais colunas podem ser cadastrada
     protected $fillable = ['nome','estante','prateleira','pasta','falecimento'];

}
