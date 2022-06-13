<?php
namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class tabelaController extends Controller
{
    public function buscaMarcaProduto(Request $request){
        /*Buscando tabelas no banco
         metodos
        Get: pega todos valores do banco
        Where: alguma linha em especifica */
        $marca = Marca::get();
        $produto = Produtos::get();

        //Habilita os valores na view
        return view('welcome',compact('marca','produto'));
    }

    public function cadastroMarca(Request $request){
        $cadastrar = new Marca;
        $cadastrar->marca = $request->marcaProduto;
        $cadastrar->classe = $request->classeProduto;

        $cadastrar->save();
        return redirect()->back();
    }

    public function cadastroProduto(Request $request){
        $cadastrar = new Produtos;
        $cadastrar->idMarca = $request->idProduto;
        $cadastrar->produto = $request->produto;
        $cadastrar->Estoque = $request->Estoque;
        $cadastrar->valorPago = $request->valorPago;
        $cadastrar->valorRevenda = $request->valorRevenda;

        $cadastrar->save();
    }



}
