<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ramais extends Model
{
    use HasFactory;
    protected $table = 'ramais';

    protected $fillable = ['ramal','nome_ramal','tipo','bina','cliente_id'];

    public function cliente(){
        return $this->belongsTo(clientes::class);
    }
    
}
