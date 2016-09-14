<?php

/**
 * Created by PhpStorm.
 * User: GDTS
 * Date: 14/09/2016
 * Time: 15:07
 */
class Obra
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Obra
     */
    public function agregarObra($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_obra(
                                            nombre,
                                            horario_inicio,
                                            horario_fin,
                                            poblacion,
                                            pos_x,
                                            pos_y
                                            fecha_entrega,
                                          
                                            imagen_url,
                                            obras_tipo_obra_id,
                                            obras_jurisdiccion_id,
                                            obra_historial_id)
										VALUES (
                                           :nombre,
                                            :horario_inicio,
                                            :horario_fin,
                                            :poblacion,
                                            :pos_x,
                                            :pos_y
                                            :fecha_entrega,
                                          
                                            :imagen_url,
                                            :obras_tipo_obra_id,
                                            :obras_jurisdiccion_id,
                                            :obras_historial_id
										)
		');
        //Bind Values
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':horario_inicio', $data['horario_inicio']);
        $this->db->bind(':horario_fin', $data['horario_fin']);
        $this->db->bind(':poblacion', $data['poblacion']);
        $this->db->bind(':pos_x', $data['pos_x']);
        $this->db->bind(':pos_y', $data['pos_y']);
        $this->db->bind(':fecha_entrega', $data['fecha_entrega']);

        $this->db->bind(':imagen_url', $data['imagen_url']);
        $this->db->bind(':obras_tipo_obra_id', $data['obras_tipo_obra_id']);
        $this->db->bind(':obras_jurisdiccion_id', $data['obras_jurisdiccion_id']);
        $this->db->bind(':obras_historial_id', $data['obras_historial_id']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar Obra
     */
    public function eliminarObra($id){
        //Query
        $this->db->query("DELETE FROM obras_obra 
                          WHERE id = '$id'");

        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar Obra
     */
    public function modificarObra($data, $id){
        //Query
        $this->db->query("UPDATE obras_obra
							SET nombre=:nombre,
								horario_inicio=:horario_inicio,
								horario_fin=:horario_fin,
								poblacion=:poblacion,
								pos_x:pos_x,
								pos_y:pos_y,
								fecha_entrega=:fecha_entrega,
  								imagen_url=:imagen_url,
								obras_tipo_obra_id=:obras_tipo_obra_id,
								obras_jurisdiccion_id=:obras_jurisdiccion_id,
								obras_historial_id
							WHERE id = '$id'");

        //Bind Values
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':horario_inicio', $data['horario_inicio']);
        $this->db->bind(':horario_fin', $data['horario_fin']);
        $this->db->bind(':poblacion', $data['poblacion']);
        $this->db->bind(':pos_x', $data['pos_x']);
        $this->db->bind(':pos_y', $data['pos_y']);
        $this->db->bind(':fecha_entrega', $data['fecha_entrega']);

        $this->db->bind(':imagen_url', $data['imagen_url']);
        $this->db->bind(':obras_tipo_obra_id', $data['obras_tipo_obra_id']);
        $this->db->bind(':obras_jurisdiccion_id', $data['obras_jurisdiccion_id']);
        $this->db->bind(':obras_historial_id', $data['obras_historial_id']);


        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}