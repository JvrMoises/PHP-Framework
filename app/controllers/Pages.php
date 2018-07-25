<?php

class Pages extends Controller {

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index(/*$params*/) {
        $users = $this->userModel->getUsers();
        $data = [
            'users' => $users
        ];

        $this->view('pages/index', $data);
    }

    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'nombre' => trim($_POST['nombre']),
                'apellido' => trim($_POST['apellido']),
                'email' => trim($_POST['email']),
                'clave' => trim($_POST['clave']),
            ];
            if($this->userModel->addUser($data)) {
                redirect('/pages');
            }else{
                die('Algo salio mal');
            }
        }else{
            $data = [
                'nombre' => '',
                'apellido' => '',
                'email' => '',
                'clave' => '',
            ];
            $this->view('pages/add', $data);
        }
    }

    public function edit($id) {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'nombre' => trim($_POST['nombre']),
                'apellido' => trim($_POST['apellido']),
                'email' => trim($_POST['email']),
                'clave' => trim($_POST['clave']),
            ];
            if($this->userModel->editUser($data)) {
                redirect('/pages');
            }else{
                die('Algo salio mal');
            }
        }else{
            $user = $this->userModel->getUserID($id);
            $data = [
                'id' => $user->id,
                'nombre' => $user->nombre,
                'apellido' => $user->apellido,
                'email' => $user->email,
                'clave' => $user->clave,
            ];
            
            $this->view('pages/edit', $data);
        }
    }

    public function delete($id) {
        $user = $this->userModel->getUserID($id);
        $data = [
            'id' => $user->id,
            'nombre' => $user->nombre,
            'apellido' => $user->apellido,
            'email' => $user->email,
            'clave' => $user->clave,
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id
            ];
            if($this->userModel->deleteUser($data)) {
                redirect('/pages');
            }else{
                die('Algo salio mal');
            }
        }
        $this->view('pages/delete', $data);
    }

}