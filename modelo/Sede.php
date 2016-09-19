<?php

/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 16/09/2016
 * Time: 22:34 PM
 */
class Sede{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Sede
     */
    public function agregarSede($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_sede (sede, obras_departamento_id)
										VALUES (:sede, :obras_departamento_id)');
        //Bind Values
        $this->db->bind(':sede', $data['sede']);
        $this->db->bind(':obras_departamento_id', $data['obras_departamento_id']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Sede
     */
    public function eliminarSede($id){
        //Query
        $this->db->query("DELETE FROM obras_sede WHERE id = '$id'");
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Sede
     */
    public function modificarSugerencia($data, $id){
        //Query
        $this->db->query("UPDATE obras_sugerencias
							SET sede=:sede
							WHERE id = '$id'");

        $this->db->bind(':sede', $data['sede']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}