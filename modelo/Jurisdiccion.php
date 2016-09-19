<?php

/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 13/09/2016
 * Time: 05:24 PM
 */
class Jurisdiccion{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Juridiccion
     */
    public function agregarJurisdiccion($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_jurisdiccion (jurisdiccion, obras_departamento_id)
										VALUES (:jurisdiccion, :obras_departamento_id)');
        //Bind Values
        $this->db->bind(':jurisdiccion', $data['jurisdiccion']);
        $this->db->bind(':obras_departamento_id', $data['obras_departamento_id']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Juridiccion
     */
    public function eliminarJurisdiccion($id){
        //Query
        $this->db->query("DELETE FROM obras_jurisdiccion WHERE id = '$id'");
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Juridiccion
     */
    public function modificarJurisdiccion($data, $id){
        //Query
        $this->db->query("UPDATE obras_jurisdiccion
							SET jurisdiccion=:jurisdiccion
							WHERE id = '$id'");

        $this->db->bind(':jurisdiccion', $data['jurisdiccion']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}