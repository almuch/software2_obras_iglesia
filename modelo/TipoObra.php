<?php

/**
 * Created by PhpStorm.
 * User: GDTS
 * Date: 14/09/2016
 * Time: 11:54
 */
class TipoObra
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Tipo de Obra
     */
    public function agregarTipoObra($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_tipo_obra (
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
     * Eliminar Tipo de Obra
     */
    public function eliminarTipoObra($id){
        ///Query
        $this->db->query("DELETE FROM obras_tipo_obra WHERE id = '$id'");

        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Tipo de Obra
     */
    public function modificarObispo($data, $id){
        //Query
        $this->db->query("UPDATE obras_tipo_obra
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