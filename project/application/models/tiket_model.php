<?php
class Tiket_model extends ci_model
{
	public $db_table2 ='penyakit';
	function tampil()
	{
		$query=$this->db->get('penyakit');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}
}