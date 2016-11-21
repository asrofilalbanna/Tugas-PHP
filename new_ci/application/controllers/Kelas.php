<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends Auth_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_kelas');
	}

	public function index()
	{
		$data['judul'] 		= "Menu Kelas";
		$data['data_Kelas'] = $this->M_kelas->getKelas();

		$this->loadTemplate('kelas/home', $data);
	}

	public function add_kelas()
	{
		$data['judul'] = "tambah kelas";
		$data['data_Kelas'] = $this->M_kelas->getKelas();
		$this->loadTemplate('kelas/form_tambah_kelas',$data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_kelas', 'Kelas', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('kelas/add_kelas','refresh');
		} else {
			$param  = $this->input->post();

			$proses = $this->M_kelas->act_tambah($param);

			if ($proses>=0)
			{
				$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil ditambahkan'));
				redirect('kelas','refresh');
			}
			else 
			{
				$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal ditambahkan'));
				redirect('kelas/add_kelas','refresh');
			}
		}
	}

	public function edit($id)
	{
		$data['judul'] 		= "edit kelas";

		$data['data_Kelas'] = $this->M_kelas->getDetailKelas($id);

		$this->loadTemplate('kelas/form_edit_kelas',$data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect($_SERVER['HTTP_REFERER']);
		} else {

			$param  = $this->input->post();

			$proses = $this->M_kelas->act_edit($param);

			if ($proses>=0)
			{
				$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil diubah'));
				redirect('kelas','refresh');
			}
			else 
			{
				$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal diubah'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id)
	{

		$proses = $this->M_kelas->act_hapus($id);

		if ($proses>=0)
		{
			$this->session->set_flashdata('alert_msg', succ_msg('Kelas berhasil dihapus'));
		}
		else 
		{
			$this->session->set_flashdata('alert_msg', err_msg('Kelas gagal dihapus'));
		}

		redirect('kelas','refresh');
	}


}
