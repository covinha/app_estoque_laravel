<?php

namespace App\Http\Controllers;
use App\produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FuncionarioController extends Controller
{
    //


    public function pesquisar()
    {
        //$produtos = produto::all();


       // return view('funcionario.pesquisar')->with('produtos', $produtos);



        // Recebe o conteúdo elemento 'descricao' do formulário
        $descricao = Input::get('descricao');



        // Busca produtos com o conteúdo da $descricao
        $produtos = produto::where('descricao', 'like', '%'.$descricao.'%')->get();

        // Chama a view funcionario.pesquisar e envia os produtos encontrados
        return view('funcionario.pesquisar')->with('produtos', $produtos);


    }


    public function inserir()
    {
        // Criando um novo objeto do tipo produto
        $produto = new produto();

        // Colocando os valores recebidos do formulário nos atributos do objeto $funcionario
        $produto->descricao = Input::get('descricao');
        $produto->quantidade = Input::get('quantidade');
        $produto->valor = Input::get('valor');
        $produto->data_vencimento = Input::get('data_vencimento');
        $produto->funcao = Input::get('funcao');


        // Salvando no banco de dados
        $produto->save();

        // Criado uma mensagem para o usuário
        $mensagem = "produto inserido com sucesso";

        // Chamando a view funcionario.inserir e enviando a mensagem criada
        return view('funcionario.inserir')->with('mensagem', $mensagem);
    }


    public function mostrar_alterar($id)
    {
        // Busca no banco o registro com o id recebido
        $produto = produto::find($id);

        // Envia os dados deste registro a view funcionario.alterar
        return view('funcionario.alterar')->with('funcionario', $produto);
    }

    public function alterar()
    {
        $id = Input::get('id');
        $p = produto::find($id);

        $p->descricao = Input::get('descricao');
        $p->quantidade = Input::get('quantidade');
        $p->valor = Input::get('valor');
        $p->data_vencimento = Input::get('data_vencimento');
        $p->funcao = Input::get('funcao');
        $p->save();

        $mensagem = "produto alterado com sucesso!";
        $produtos = produto::all();
        return view('funcionario.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $produto = produto::find($id);

        // Excluindo este objeto
        $produto->delete();

        // Criando uma mensagem para ser enviada a view funcionario.pesquisar
        $mensagem = "produto excluído com sucesso!";

        // Capturando objetos para enviar a view funcionario.pesquisar
        $produtos = produto::all();

        // Retornando a view funcionario.pesquisar
        return view('funcionario.pesquisar')->with('mensagem', $mensagem)->with('produtos', $produtos);
    }



    public function mostrar_inserir()
    {
        return view('funcionario.inserir');
    }

}