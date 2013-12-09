<?php class Administrador_model extends CI_Model {


	function __construct()
	{
        // Call the Model constructor
		parent::__construct();


		$this->load->database();


	}


	public function registrar_datos_usuario($datos, $tipo) {

		if ($tipo == "CO") {
			$query = $this->db->insert('coordinador', array(
				'ci_coord' => $datos["cedula"],
				'nombre_coord' => $datos["nombre"],
				'apellido_coord' => $datos["apellido"],
				'celular_coord' => $datos["celular"],
				'telefono_coord' => $datos["telefono"],
				'email_coord' => $datos["email"],
				'escuela_coord' => $datos["escuela"]));

			$query = $this->db->insert('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if ($tipo == "DI") {
			$query = $this->db->insert('director', array(
				'ci_di' => $datos["cedula"],
				'nombre_di' => $datos["nombre"],
				'apellido_di' => $datos["apellido"],
				'celular_di' => $datos["celular"],
				'telefono_di' => $datos["telefono"],
				'email_di' => $datos["email"],
				'escuela_di' => $datos["escuela"]));

			$query = $this->db->insert('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if ($tipo == "PR") {
			$query = $this->db->insert('proyeccion_comunidad', array(
				'ci_pr' => $datos["cedula"],
				'nombre_pr' => $datos["nombre"],
				'apellido_pr' => $datos["apellido"],
				'celular_pr' => $datos["celular"],
				'telefono_pr' => $datos["telefono"],
				'email_pr' => $datos["email"]));

			$query = $this->db->insert('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if($query){
			return "0";
		}
		else{
			return "-1";
		}
	}

	public function actualizar_datos_usuario($datos, $tipo) {

		if ($tipo == "CO") {
			$this->db->where('ci_coord', $datos["cedula"]);
			$query = $this->db->update('coordinador', array(
				'ci_coord' => $datos["cedula"],
				'nombre_coord' => $datos["nombre"],
				'apellido_coord' => $datos["apellido"],
				'celular_coord' => $datos["celular"],
				'telefono_coord' => $datos["telefono"],
				'email_coord' => $datos["email"],
				'escuela_coord' => $datos["escuela"]));

			$this->db->where('cedula', $datos["cedula"]);
			$query = $this->db->update('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if ($tipo == "DI") {
			$this->db->where('ci_di', $datos["cedula"]);
			$query = $this->db->update('director', array(
				'ci_di' => $datos["cedula"],
				'nombre_di' => $datos["nombre"],
				'apellido_di' => $datos["apellido"],
				'celular_di' => $datos["celular"],
				'telefono_di' => $datos["telefono"],
				'email_di' => $datos["email"],
				'escuela_di' => $datos["escuela"]));

			$this->db->where('cedula', $datos["cedula"]);
			$query = $this->db->update('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if ($tipo == "PR") {
			$this->db->where('ci_pr', $datos["cedula"]);
			$query = $this->db->update('proyeccion_comunidad', array(
				'ci_pr' => $datos["cedula"],
				'nombre_pr' => $datos["nombre"],
				'apellido_pr' => $datos["apellido"],
				'celular_pr' => $datos["celular"],
				'telefono_pr' => $datos["telefono"],
				'email_pr' => $datos["email"]));
			
			$this->db->where('cedula', $datos["cedula"]);
			$query = $this->db->update('usuario', array(
				'cedula' => $datos["cedula"],
				'user' => $datos["nombre"],
				'contrasena' => $datos["pass"],
				'tipo' => $datos["tipo"]));
		}

		if($query){
			return "0";
		}
		else{
			return "-1";
		}
	}

}