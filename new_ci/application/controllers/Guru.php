<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends Auth_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_guru');
	}

	public function index()
	{
		$data['judul'] 		= "Menu Guru";
		$data['data_Guru'] = $this->M_guru->getGuru();

		$this->loadTemplate('guru/home', $data);
	}

	public function add_guru()
	{
		$data['judul'] = "tambah guru";
		$data['data_Guru'] = $this->M_guru->getGuru();
		$this->loadTemplate('guru/form_tambah_guru',$data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('nama_guru', 'Guru', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('guru/add_guru','refresh');
		} else {
			$param  = $this->input->post();

			$proses = $this->M_guru->act_tambah($param);

			if ($proses>=0)
			{
				$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil ditambahkan'));
				redirect('guru','refresh');
			}
			else 
			{
				$this->session->set_flashdata('alert_msg', err_msg('Guru gagal ditambahkan'));
				redirect('guru/add_guru','refresh');
			}
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nama_guru', 'Guru', 'required');
		$data['judul'] 		= "edit guru";
		$data['data_Guru'] = $this->M_guru->getDetailGuru($id);
		$this->loadTemplate('guru/form_edit_guru',$data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect($_SERVER['HTTP_REFERER']);
		} else {

			$param  = $this->input->post();

			$proses = $this->M_guru->act_edit($param);

			if ($proses>=0)
			{
				$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil diubah'));
				redirect('guru','refresh');
			}
			else 
			{
				$this->session->set_flashdata('alert_msg', err_msg('Guru gagal diubah'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id)
	{

		$proses = $this->M_guru->act_hapus($id);

		if ($proses>=0)
		{
			$this->session->set_flashdata('alert_msg', succ_msg('Guru berhasil dihapus'));
		}
		else 
		{
			$this->session->set_flashdata('alert_msg', err_msg('Guru gagal dihapus'));
		}

		redirect('guru','refresh');
	}


}
