<?php
class User {

    private $db;

    public function __construct() {
        $this->db = new DataBase();
    }

    public function getUsers() {
        $this->db->query("SELECT * FROM usuarios;");
        return $this->db->registers();
    }

    public function addUser($data) {
        $this->db->query('INSERT INTO usuarios (nombre, apellido, email, clave) VALUES (:nombre, :apellido, :email, :clave)');

        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':apellido', $data['apellido']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':clave', $data['clave']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getUserID($id) {
        $this->db->query('SELECT * FROM usuarios WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->register();
        return $row;
    }

    public function editUser($data) {
        $this->db->query('UPDATE usuarios SET nombre = :nombre, apellido = :apellido, email = :email, clave = :clave WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':apellido', $data['apellido']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':clave', $data['clave']);

        if($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }

    public function deleteUser($data) {
        $this->db->query('DELETE FROM usuarios WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        
        if($this->db->execute()) {
            return true;
        }else{
            return false;
        }
    }
}