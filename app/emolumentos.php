<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emolumentos extends Model
{
    protected $fillable=['data','requerente','teorDocumento','nProcesso','livro','cota','registo','folha','ano','valor','user_id'];
    protected $guarded=['id'];
}
