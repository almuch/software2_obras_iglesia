<?php
class Usuario{
	//Init DB Variable
	private $db;

	/*
	 *	Constructor
	 */
	 public function __construct(){
		$this->db = new Database;
	 }

	/*
	 * Registrar Usuario
	 */
	public function registrar($data){
		//Insert Query
		$this->db->query('INSERT INTO usuario (user, password, nombre, apellido, telefono, ci, fecha_alta, id_t_usu)
										VALUES (:user, :password, :nombre, :apellido, :telefono, :ci, :fecha_alta, :id_t_usu)');
		//Bind Values
		$this->db->bind(':user', $data['user']);
		$this->db->bind(':password', $data['password']);
		$this->db->bind(':nombre', $data['nombre']);
		$this->db->bind(':apellido', $data['apellido']);
		$this->db->bind(':telefono', $data['telefono']);
		$this->db->bind(':ci', $data['ci']);
		$this->db->bind(':fecha_alta', $data['fecha_alta']);
		$this->db->bind(':id_t_usu', $data['id_t_usu']);

		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
		//echo $this->db->lastInsertId();
	}
	/*
	 * Registrar Usuario - Habitacion
	 */
	public function registrarUsuarioHabitacion($data){
		//Insert Query
		$this->db->query('INSERT INTO habitacion_usuario (habitacion_id_cli, usuario_id_usu, huespedes, fecha, actual)
										VALUES (:habitacion_id_cli, :usuario_id_usu, :huespedes, :fecha, :actual)');
		//Bind Values
		$this->db->bind(':habitacion_id_cli', $data['habitacion_id_cli']);
		$this->db->bind(':usuario_id_usu', $data['usuario_id_usu']);
		$this->db->bind(':huespedes', $data['huespedes']);
		$this->db->bind(':fecha', $data['fecha']);
		$this->db->bind(':actual', $data['actual']);

		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
		//echo $this->db->lastInsertId();
	}

	/*
	 * Registrar Tipo de Usuario
	 */
	public function registrarTipo($data){
		//Insert Query
		$this->db->query('INSERT INTO tipo_usuario (tipo_u)
										VALUES (:tipo_u)');
		//Bind Values
		$this->db->bind(':tipo_u', $data['tipo_u']);
		if($this->db->execute()){
			return true;
		} else {
			return false;
		}
		//echo $this->db->lastInsertId();
	}

	/*
	 * User Login
	 */
	public function iniciar_sesion($user, $password){
		$this->db->query("SELECT * FROM usuario
						WHERE user = :user
						AND password = :password
						");

		//Bind Values
		$this->db->bind(':user', $user);
		$this->db->bind(':password', $password);

		$row = $this->db->single();

		//Check Rows
		if($this->db->rowCount() > 0){
			$this->setUserData($row);
			return true;
		} else {
			return false;
		}
	}
	/*
	 * Funcion para retornar la habitacion del usuario
	 */
	public function getHabitacion($data){
		$this->db->query("SELECT a.numero FROM habitacion a, habitacion_usuario b, usuario c
											WHERE b.habitacion_id_cli = a.id_cli
											AND b.usuario_id_usu = c.id_usu
											AND c.fecha_alta = :fecha
											AND b.fecha = :fecha
											AND c.id_usu = :idUsuario");
		//Bind Values
		$this->db->bind(':idUsuario', $data['idUsuario']);
		$this->db->bind(':fecha', $data['fecha']);

		$result = $this->db->resultset();

		return $result;
	}
	/*
	 * Set User Data
	 */
	private function setUserData($row){
		$_SESSION['is_logged_in'] = true;
		$_SESSION['user_id'] = $row->id_usu;
		$_SESSION['usuario'] = $row->user;
		$_SESSION['tipo'] = $row->id_t_usu;
	}

	/*
	 * User Logout
	*/
	public function cerrar_sesion(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_id']);
		unset($_SESSION['usuario']);
		unset($_SESSION['tipo']);
		return true;
	}
    public function FAKE(){}
}
