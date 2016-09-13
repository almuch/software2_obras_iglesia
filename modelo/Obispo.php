<?php

/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 13/09/2016
 * Time: 06:46 PM
 */
class Obispo{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar Obispo
     */
    public function agregarObispo($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_obispo (
                                            usuario,
                                            clave,
                                            nombre,
                                            apellido,
                                            lugar_nacimiento,
                                            fecha_nacimiento,
                                            biografia,
                                            casilla,
                                            telefono1,
                                            telefono2,
                                            fax,
                                            email,
                                            imagen_url,
                                            obras_titulo_id,
                                            obras_tipo_obispo_id)
										VALUES (
                                            :usuario,
                                            :clave,
                                            :nombre,
                                            :apellido,
                                            :lugar_nacimiento,
                                            :fecha_nacimiento,
                                            :biografia,
                                            :casilla,
                                            :telefono1,
                                            :telefono2,
                                            :fax,
                                            :email,
                                            :imagen_url,
                                            :obras_titulo_id,
                                            :obras_tipo_obispo_id
										)
		');
        //Bind Values
        $this->db->bind(':usuario', $data['usuario']);
        $this->db->bind(':clave', $data['clave']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':apellido', $data['apellido']);
        $this->db->bind(':lugar_nacimiento', $data['lugar_nacimiento']);
        $this->db->bind(':fecha_nacimiento', $data['fecha_nacimiento']);
        $this->db->bind(':biografia', $data['biografia']);
        $this->db->bind(':casilla', $data['casilla']);
        $this->db->bind(':telefono1', $data['telefono1']);
        $this->db->bind(':telefono2', $data['telefono2']);
        $this->db->bind(':fax', $data['fax']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':imagen_url', $data['imagen_url']);
        $this->db->bind(':obras_titulo_id', $data['obras_titulo_id']);
        $this->db->bind(':obras_tipo_obispo_id', $data['obras_tipo_obispo_id']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}