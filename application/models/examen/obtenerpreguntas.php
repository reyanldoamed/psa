<?php
/** 
* 
*/
class Obtenerpreguntas extends CI_Model  
{
	public $variable;
	 
	public function __construct()
	{
		parent::__construct();
		# code...
	}
	public function selefis($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('areafisica');	 
		
		$resultado = $this->db->get();
		return $resultado;
	}
	public function selealge($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('areaalgebra');
		//$query = $this->db->get("area_fisica");	 
		
		$resultado1 = $this->db->get();
		return $resultado1;
	}
	public function selehisto($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('areahistoria');
		//$query = $this->db->get("area_fisica");	 
		
		$resultado2 = $this->db->get();
		return $resultado2;
	}
	public function selelite($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('arealiteratura');
		//$query = $this->db->get("area_fisica");	 
		
		$resultado3 = $this->db->get();
		return $resultado3;
	}
	public function selegeome($carrera)
	{
		$data = array(
			'carrera'=> $carrera,
		);
		$this->db->select('*');
		$this->db->where("id_carrera",$data['carrera']);
		$this->db->order_by('rand()');
		$this->db->limit(5);
		$this->db->from('areageometria');
		//$query = $this->db->get("area_fisica");	 
		
		$resultado3 = $this->db->get();
		return $resultado3;
	}
	
}