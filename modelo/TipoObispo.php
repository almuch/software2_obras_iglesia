<?php

/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 14/09/2016
 * Time: 3:18 PM
 */
class Comentario{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Tipo de Obispo
     */
    public function agregarTipoObispo($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_tipo_obispo (
                                            tipo
                                        )
										VALUES (
                                            :tipo
										)
		');
        //Bind Values
        $this->db->bind(':tipo', $data['tipo']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Tipo de Obispo
     */
    public function eliminarTipoObispo($id){
        ///Query
        $this->db->query("DELETE FROM obras_tipo_obispo WHERE id = '$id'");

        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Tipo de Obispo
     */
    public function modificarObispo($data, $id){
        //Query
        $this->db->query("UPDATE obras_tipo_obispo
							SET tipo=:tipo
							WHERE id = '$id'");
        //Bind Values
        $this->db->bind(':tipo', $data['tipo']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}