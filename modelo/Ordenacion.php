<?php

/**
 * Created by PhpStorm.
 * User: Alvaro
 * Date: 13/09/2016
 * Time: 23:18 PM
 */
class Ordenacion{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Ordenacion
     */
    public function agregarOrdenacion($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_ordenacion (ordenacion)
										VALUES (:ordenacion)');
        //Bind Values
        $this->db->bind(':ordenacion', $data['ordenacion']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Ordenacion
     */
    public function eliminarOrdenacion($id){
        //Query
        $this->db->query("DELETE FROM obras_ordenacion WHERE id = '$id'");
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Ordenacion
     */
    public function modificarOrdenacion($data, $id){
        //Query
        $this->db->query("UPDATE obras_ordenacion
							SET ordenacion=:ordenacion
							WHERE id = '$id'");

        $this->db->bind(':ordenacion', $data['ordenacion']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}