<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_model {

	public function __construct()
	{
		$this->load->database();
	}

	//mendapatkan table pemesan
	public function get_pemesan($id_pemesan = FALSE)
	{
			if ($id_pemesan === FALSE)
			{
					$query = $this->db->get('pemesan');
					return $query->result_array();
			}
	
			$query = $this->db->get_where('post', array('id_pemesan' => $id_pemesan));
			return $query->row_array();
	}

	//mendapatkan table film
	public function get_film($gambar = FALSE)
	{
		if ($gambar === FALSE)
		{
			$query = $this->db->get('film');
			return $query->result_array();
		}

		$query = $this->db->get_where('film', array('gambar' => $gambar));
		
		return $query->row_array();

	}

	public function get_filmkategori($gambar = FALSE)
	{	
			if ($gambar === FALSE)
		{
			$query = $this->db->get('film');
				if($query->num_rows()>0)
		{
			return $query->result_array();
		}
			
		}
		    $this->db->select('*');
			$this->db->from('film');
			$this->db->join('kategori', 'kategori.kd_kategori = film.kd_kategori');
			$this->db->join('jadwal', 'film.kd_film = jadwal.kd_film');
			$query = $this->db->get();
		    return $query->row_array();
	}

	//mendapatkan table film
	public function get_kursi($kd_kursi= FALSE)
	{
		if ($kd_kursi === FALSE)
		{
			$query = $this->db->get('kursi');
			if ($query->num_rows() > 0)
			{
				$row = $query->row(); 
				return $row->kd_kursi;
			}
			return null;
		}

		$query = $this->db->get_where('kursi', array('baris' -> $baris));
		return $this->db->insert('kursi', $data);
		$this->db->limit(1);
	}

	//mengatur table pemesan
	public function set_ticket()
	{
		$this->load->helper('url');
	
		$nama_pemesan = url_title($this->input->post('nama_pemesan'), 'dash', TRUE);
	
		$data = array(
			'nama_pemesan' => $this->input->post('nama_pemesan'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'no_telp' => $this->input->post('no_telp'),
			'email' => $this->input->post('email')

		);
		
		return $this->db->insert('pemesan', $data);
		$this->db->limit(1);
	}

	//mengatur table film
	public function set_movies()
	{
		$this->load->helper(array('url','form'));

		$kd_studio = url_title($this->input->post('judul'), 'dash', TRUE);

		$data = array(
			'judul'      => $this->input->post('judul'),
			'tgl'        => $this->input->post('tgl'),
			'jam'        => $this->input->post('jam'),
			'kd_studio'  => $this->input->post('kd_studio'),
			'nama_studio'=> $this->input->post('nama_studio')
		);

		return $this->db->insert('film', $data);
		$this->db->limit(1);
	}
		public function set_kursi3()
	{
		$this->load->helper(array('url','form'));

		$kd_kursi = url_title($this->input->post('baris'), 'dash', TRUE);

		$data['baris'] = $this->input->post('baris');
		

		return $this->db->insert('kursi3', $data);
	}

	public function set_kursi2()
	{
		$this->load->helper(array('url','form'));

		$kd_kursi = url_title($this->input->post('baris'), 'dash', TRUE);

		$data['baris'] = $this->input->post('baris');
		

		return $this->db->insert('kursi2', $data);
	}

	//mengatur table kursi
	public function set_kursi()
	{
		$this->load->helper(array('url','form'));

		$kd_kursi = url_title($this->input->post('baris'), 'dash', TRUE);

		$data['baris'] = $this->input->post('baris');
		
		$this->db->replace('kursi', $data);
	
	}
	
}



