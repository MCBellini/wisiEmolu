<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class emolumentos extends Model
{
    protected $fillable=['data','requerente','teorDocumento','nProcesso','livro','cota','registo','folha','ano','pagamento','valor','user_id'];
    protected $guarded=['id'];

    public function user(){

        return $this -> belongsTo('App\User');
    }
}

