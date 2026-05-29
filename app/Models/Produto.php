<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'preco',
        'imagem',
        'tag',
        'meta_1',
        'meta_2',
        'categoria',
        'estoque',
        'sku',
        'descricao',
    ];
}
