<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Financas extends Model
{
    protected $fillable=['tipo','dataInicial','dataFinal','data','concelho','freguesia','entidade','nome','morada','descricao','user_id'];
    protected $guarded=['id'];
}
