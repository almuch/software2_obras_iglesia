<?php


class Departamento
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    /*
     * Agregar departamento
     */
    public function agregarDepartamento($data){
        //Insert Query
        $this->db->query('INSERT INTO obras_departamento (
                                            departamento
                                        )
										VALUES (
                                            :departamento
										)
		');
        //Bind Values
        $this->db->bind(':departamento', $data['departamento']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Eliminar departamento
     */
    public function eliminardepartamento($id){
        ///Query
        $this->db->query("DELETE FROM obras_departamento WHERE id = '$id'");

        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    /*
     * Modificar departamento
     */
    public function modificardepartamento($data, $id){
        //Query
        $this->db->query("UPDATE obras_departamento
							SET departamento=:departamento
							WHERE id = '$id'");
        //Bind Values
        $this->db->bind(':departamento', $data['departamento']);
        //excecute query and return true or false
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}