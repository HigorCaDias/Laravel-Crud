<?php
namespace App\Http\Controllers;

use App\Models\Marca;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class tabelaController extends Controller
{
    //Request é somente para receber dados de um formulario.
    public function buscaMarcaProduto(){
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
        $cadastrar->idMarca = $request->idMarca;
        $cadastrar->produto = $request->produto;
        $cadastrar->Estoque = $request->Estoque;
        $cadastrar->valorPago = $request->valorPago;
        $cadastrar->valorRevenda = $request->valorRevenda;

        $cadastrar->save();
        return redirect()->back();
    }

    public function cadastroDeletarMarca($id){
        //passar o nome da model que deseja excluir
        Produtos::findOrFail($id)->delete();
        return redirect()->back();
    }

    //Função edit pega as informações já existentes e joga para os campos exitentes da pagina
    public function edit($id){
        // Variavel $event retona todos os  valor da tabela Produto no campo ID dentro da SC selecionada
        $event = Produtos::findOrFail($id);
        //Retorna a variavel com os dados já cadastrados
        return view('editar',['event'=>$event], compact('event'));
    }

    //Função Update é a que finaliza o processo salvando as alterações no banco
    public function update(Request $request){
        //Dentro da tabela produtos salva as alterações realizadas com o Update
        Produtos::findOrFail($request->id)->update($request->all());
        return redirect()->back();
    }


}
