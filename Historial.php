<?php

/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 14/09/2016
 * Time: 22:45 PM
 */
class Historial{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Historial
     */
    public function agregarHistorial($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_historial (comentario)
										VALUES (:comentario');
        //Bind Values
        $this->db->bind(':comentario', $data['comentario']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Historial
     */
    public function eliminarHistorial($id){
        //Query
        $this->db->query("DELETE FROM obras_historial WHERE id = '$id'");
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Historial
     */
    public function modificarHistorial($data, $id){
        //Query
        $this->db->query("UPDATE obras_historial
							SET comentario=:comentario,
							WHERE id = '$id'");

        $this->db->bind(':comentario', $data['comentario']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}