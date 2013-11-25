<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prestador extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	private $controller;

	function __construct(){

		parent::__construct();

			//$this->load->helper('author_helper');

		$this->controller="prestador/";

		$this->load->model("prestador_model");

	}


	public function index() {

		$this->load->view($this->controller.'ge_prestador');
	}

	public function insertar() {

		$this->load->view($this->controller.'insertar_prestador');
	}

	public function consultar() {

		$this->load->view($this->controller.'consultar_prestador');
	}

	public function asignar_pro() {

		$this->load->view($this->controller.'asignar_proyecto');
	}

	public function hola() {

		$this->load->view($this->controller.'hola');
	}

	public function ver_datos_personales() {

		$id=$this->input->post('id');

		$salida=$this->prestador_model->listar_datos_prestador($id);

		if($salida == -1){

			echo "No se encontro";
		
		} 
		else {

			echo json_encode($salida);

		}
	}   

	public function insertar_datos_prestador()
	{			

		$datos = array(
                'cedula' => $this->input->post('cedula'),
                'nombre' => $this->input->post('nombre'),
                'apellido' => $this->input->post('apellido'),
                'email' => $this->input->post('email'),
                'celular' => $this->input->post('telefono_cel'),
                'telefono' => $this->input->post('telefono_hab'),
                'expediente' => $this->input->post('expediente'),
                'escuela' => $this->input->post('escuela'),
                'semestre' => $this->input->post('mencion'),
                'mencion' => "1",
                'direccion' => $this->input->post('direccion'));


		$salida=$this->prestador_model->insertar_datos($datos);

		echo $salida;
	}


	public function listar_x_proyecto(){

		$id_proyecto= $this->input->post('id_proyecto');

		$salida = $this->prestador_model->listar_x_pro($id_proyecto);

		echo json_encode($salida);

	}
  
	public function listar_prestador(){

		$query  = $this->input->post('q');
		$option = $this->input->post('o');

		//echo "server->".$query."->".$option;

		$salida= $this->prestador_model->buscar_prestador($query,$option);


			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "No se encontro nada";
			}
		//echo json_encode($salida);

	}

	public function consultar_proyectos_inscritos(){

		$ci_prestador = $this->input->post('ci');

		$salida= $this->prestador_model->buscar_proyectos_prestador($ci_prestador);

		if ($salida!="-1"){
			echo json_encode($salida);
		}else{
			echo "No se encontro nada";
		}

	}
	
	public function verdetalles(){

		$nombre= $this->input->post('id');

		$salida= $this->prestador_model->datos_proyecto($nombre);


			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "No se encontro nada";
			}
		//echo json_encode($salida);


	}

	public function consultar_nombre_proyecto(){

			$ci_prestador = $this->input->post('ci');
			$salida = $this->prestador_model->b_nombres_proyectos($ci_prestador);

			if($salida!="-1"){

				echo json_encode($salida);
	
			}else{

				echo "No se encontro nada";
			}
	}
	//-----------------------------funciones de asignar proyecto.php
	public function ver_datos_asesor(){
		$id=$this->input->post('cedula_asesor');
		
		$salida=$this->prestador_model->listar_datos_asesor($id);
		if($salida == -1){
			echo "No se encontro";
		}else{
			echo json_encode($salida);
		}
	}
	
	public function verificar_proyecto(){
		$id=$this->input->post('id');
		$ci=$this->input->post('ci');
		$salida=$this->prestador_model->verificar_estado_proyecto($id,$ci);
		echo json_encode($salida);
	}
	public function insertar_asesor(){
		$nombre = $this->input->post('nombre_ase');
		$apellido = $this->input->post('apellido_ase');
		$email = $this->input->post('email_ase');
		$cedula = $this->input->post('cedula_ase');
		$telefono = $this->input->post('telefono_ase');
		$direccion = $this->input->post('direccion_ase');
		$celular = $this->input->post('celular_ase');
		$salida = $this->prestador_model->insertar_asesor($nombre,$apellido,$email,$cedula,$celula,$telefono,$direccion);
		if($salida == -1){
			echo("Asesor no insertado");
			
		}else{
			echo("Asesor ingresado con exito");
		}
	}
	
	public function asociar_proyecto(){
		$asesor = $this->input->post('cedula_ase');
		$proyecto = $this->input->post('nombre_proy');
		$prestador = $this->input->post('cedula_pres');
		$salida = $this->prestador_model->asociar_proyecto($asesor,$proyecto,$prestador);
		
			echo json_encode($salida);
		
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
