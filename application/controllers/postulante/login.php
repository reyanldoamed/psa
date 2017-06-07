<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	public function index()
	{
		$nombre  = $this->input->post('username');
		$paterno = $this->input->post('apellido_pat');
		$materno = $this->input->post('apellido_mat');
		$ci  = $this->input->post('ci');
		
		$this->load->model('postulante/loginuser');
		$fila = $this->loginuser->getUser($ci);

		if($fila != null)
		{
			if($fila->nombres == $nombre)
			{
				$data  = array(
					'ci' => $ci,
					'id' =>$fila->estado,
					'login' => true
				);
				$this->session->set_userdata($data);
				//echo $this->session->userdata('nombre');
				$this->load->model('examen/obtenerpreguntas');
				$result = $this->obtenerpreguntas->selefis($_POST['carrera']);
				$result1 = $this->obtenerpreguntas->selealge($_POST['carrera']);
				$result2 = $this->obtenerpreguntas->selehisto($_POST['carrera']);
				$result3 = $this->obtenerpreguntas->selelite($_POST['carrera']);
				$result4 = $this->obtenerpreguntas->selegeome($_POST['carrera']);
				//$result4 = $this->obtenerpreg_model->seleusuario($_POST['ci']);
				$dato = array('consulta' => $result,
					'consulta1' => $result1,
					'consulta2' => $result2,
					'consulta3' => $result3,
					'consulta4' => $result4,
					);

				$this->load->view('postulante/examen',$dato);
			}else
			{
				header("Location: " . base_url());
			}
		}else
		{
			header("Location: " . base_url());
		}

		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		header("Location:" . base_url());
	}
}