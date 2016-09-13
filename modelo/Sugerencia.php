<?php

/**
 * Created by PhpStorm.
 * User: Geovani
 * Date: 13/09/2016
 * Time: 04:09 PM
 */
class Sugerencia{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Sugerencia
     */
    public function agregarSugerencia($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_sugerencias (comentario, realizada, obras_usuarios_id, obras_tipo_obra_id, obras_departamento_id)
										VALUES (:comentario, :realizada, :obras_usuarios_id, :obras_tipo_obra_id, :obras_departamento_id)');
        //Bind Values
        $this->db->bind(':comentario', $data['comentario']);
        $this->db->bind(':realizada', $data['realizada']);
        $this->db->bind(':obras_usuarios_id', $data['obras_usuarios_id']);
        $this->db->bind(':obras_tipo_obra_id', $data['obras_tipo_obra_id']);
        $this->db->bind(':obras_departamento_id', $data['obras_departamento_id']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Sugerencia
     */
    public function eliminarSugerencia($id){
        //Query
        $this->db->query("DELETE FROM obras_sugerencias WHERE id = '$id'");
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Sugerencia
     */
    public function modificarSugerencia($data, $id){
        //Query
        $this->db->query("UPDATE obras_sugerencias
							SET comentario=:comentario,
								realizada=:realizada
							WHERE id = '$id'");

        $this->db->bind(':comentario', $data['comentario']);
        $this->db->bind(':realizada', $data['realizada']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}