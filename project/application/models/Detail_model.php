<?php
class Detail_model extends ci_model
{
	public $db_table2 ='antrian';
	function tampil()
	{
		$query=$this->db->get('antrian');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}

	function tampild()
	{
		$query=$this->db->get('dokter');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}

	function tampilb()
	{
		$query=$this->db->get('booking');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}

	function tampilg()
	{
		$query=$this->db->get('gejala');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}

	function tampilp()
	{
		$query=$this->db->get('poli');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}

	function tampilu()
	{
		$query=$this->db->get('user');
		if($query ->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return array();
		}
	}
	function tampilbyid($id){
		$this->db->where('id_post',$id);
		$query=$this->db->get('post');
		return $query->result();
	}
	function per_id($id)
	{
		$this->db->where('no_antrian',$id);
		$query=$this->db->get('antrian');
		return $query->result();
	}

	function ped_id($id)
	{
		$this->db->where('id_dokter',$id);
		$query=$this->db->get('dokter');
		return $query->result();
	}

	function peb_id($id)
	{
		$this->db->where('id_booking',$id);
		$query=$this->db->get('booking');
		return $query->result();
	}

	function peg_id($id)
	{
		$this->db->where('id_gejala',$id);
		$query=$this->db->get('gejala');
		return $query->result();
	}

	function pep_id($id)
	{
		$this->db->where('id_poli',$id);
		$query=$this->db->get('poli');
		return $query->result();
	}

	function peu_id($id)
	{
		$this->db->where('NIK',$id);
		$query=$this->db->get('user');
		return $query->result();
	}
}
