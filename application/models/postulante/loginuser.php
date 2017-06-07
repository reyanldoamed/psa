<?php
/**
* 
*/
class Loginuser extends CI_Model
{
	
	public function getUser($ci = '')
	{
		$result = $this->db->query("SELECT * FROM postulante WHERE ci = '" . $ci . "' LIMIT 1");
		if($result->num_rows() >0)
		{
			return $result->row();
		}else
		{
			return null;
		}
	}
}