<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_model {

	public function __construct()
	{
		$this->load->database();
	}

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

	public function get_film($judul = FALSE)
	{
		if ($judul === FALSE)
		{
			$query = $this->db->get('film');
			return $query->result_array();
		}

		$query = $this->db->get_where('film', array(

			'judul' -> $judul,
			'nama studio' -> $nama_studio,
			'tgl' -> $tgl,
			'jam' -> $jam,
			'kd_studio' -> $kd_studio
		
		));
	
		return $this->db->insert('film', $data);
		$this->db->limit(1);
	}

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

	public function set_kursi2()
	{
		$this->load->helper(array('url','form'));

		$kd_kursi = url_title($this->input->post('baris'), 'dash', TRUE);

		$data['baris'] = $this->input->post('baris');
		

		return $this->db->insert('kursi2', $data);
	}
	public function set_kursi()
	{
		$this->load->helper(array('url','form'));

		$kd_kursi = url_title($this->input->post('baris'), 'dash', TRUE);

		$data['baris'] = $this->input->post('baris');
		
		$this->db->replace('kursi', $data);
	
	}
	public function set_informasi($genre = FALSE)
	{
		if($genre === FALSE)
		{
			$query = $this->db->get('informasi');
			return $query->result_array();
		}

		$query = $this->db->get_where('informasi', array('informasi' => $genre));
	}

	public function set_image()
	{
		$this->load->helper(array('url','form'));
		
				$id = url_title($this->input->post('nama'), 'dash', TRUE);
		
				$data['nama'] = $this->input->post('nama');
				
				return $this->db->insert('image', $data);
	}
}



