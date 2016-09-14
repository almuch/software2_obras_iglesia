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
     * Agregar Comentario
     */
    public function agregarComentario($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_comentarios (
                                            obras_usuario_id,
                                            obras_obra_id,
                                            comentario,
                                            permitido
                                        )
										VALUES (
                                            :obras_usuario_id,
                                            :obras_obra_id,
                                            :comentario,
                                            :permitido
										)
		');
        //Bind Values
        $this->db->bind(':obras_usuario_id', $data['obras_usuario_id']);
        $this->db->bind(':obras_obra_id', $data['obras_obra_id']);
        $this->db->bind(':comentario', $data['comentario']);
        $this->db->bind(':permitido', $data['permitido']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Comentario
     */
    public function eliminarObispo($data, $id){
        //Query
        $this->db->query("UPDATE obras_comentarios
							SET permitido=:permitido
							WHERE id = '$id'");
        //Bind Values
        $this->db->bind(':permitido', $data['permitido']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Comentario
     */
    public function modificarObispo($data, $id){
        //Query
        $this->db->query("UPDATE obras_obispo
							SET obras_usuario_id=:obras_usuario_id,
								obras_obra_id=:obras_obra_id,
								comentario=:comentario,
								permitido=:permitido
							WHERE id = '$id'");
        //Bind Values
        $this->db->bind(':obras_usuario_id', $data['obras_usuario_id']);
        $this->db->bind(':obras_obra_id', $data['obras_obra_id']);
        $this->db->bind(':comentario', $data['comentario']);
        $this->db->bind(':permitido', $data['permitido']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}