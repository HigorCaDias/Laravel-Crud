<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'produtos';
    protected $guarded = [];
    // Habilita a chave estrangeira da tabela 'marca'
    public function marca(){
        // $this = neste aquivo
        // hasOne = é utilizado na tabela que eu quero relacionar
        return $this->hasOne(Marca::class, 'id', 'idMarca');

    }

}

