<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'marca';
    protected $guarded = [];
    //
    public function produto(){
        // belongsTo = tabela que está sendo relacionada, no caso Produto, 'a coluna da tabela destino',
        //'o campo da tabela atual que vai servir de chave estrengeira'
        return $this->belongsTo(Produtos::class, 'idMarca', 'id');

    }
}

