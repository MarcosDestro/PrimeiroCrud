<?php
namespace src\controllers;

use \core\Controller;
use src\models\Usuario;

class UsuariosController extends Controller {

    //Solicita o view add
    public function add() {
        $this->render('add');
    }

    //Recebe os dados do formulário
    public function addAction(){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        $name = ucwords(strtolower(trim($name)));
        $email = strtolower(trim($email));

        //Verifica se os dados foram válidos
        if($name && $email){
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0){
                Usuario::insert([
                    'name'=>$name,
                    'email'=>$email
                ])->execute();
                
                $this->redirect('/');
                exit;
            }

        }
        $_SESSION['flash'] = "Email já cadastrado";
        $this->redirect('/novo');
    }

    public function edit($args){
        //Pesquise na tabela do banco pela chave recebida
        $usuario = Usuario::select()->find($args['id']);
        
        /* Também podemos fazer das seguintes formas:
        $usuario = Usuario::select()->where('id',$args['id'])->one();
        $usuario = Usuario::select()->where('id',$args['id'])->first();
        */
        $this->render('edit', ['usuario'=>$usuario]);
    }

    public function editAction($args){
        //Recebido os dados via post, verifique...
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        $name = ucwords(strtolower(trim($name)));
        $email = strtolower(trim($email));

        //Verifica se os dados foram válidos
        if($name && $email){

            //Faça o update com os novos valores...
            Usuario::update()
                ->set('name', $name)
                ->set('email', $email)
                ->where('id', $args['id'])
            ->execute();

            $this->redirect('/');
        }
        else{
            //Se dados inválidos, exiba a mensagem
            $_SESSION['flash'] = "Dados inválidos";
            $this->redirect('/usuario/'.$args['id'].'/editar');
        }
    }

    public function del($args){
        //De posse do id, delete o usuário
        Usuario::delete()->where('id', $args['id'])->execute();
        
        $this->redirect('/');
    }


}