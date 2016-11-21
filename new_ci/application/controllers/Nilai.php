<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends Auth_Controller 
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_nilai');
		$this->load->model('M_siswa');
		$this->load->model('M_mapel');
	}

	public function index()
	{
		$data['judul'] 		= "Menu Nilai";
		$data['data_Nilai'] = $this->M_nilai->getNilai();

		$this->loadTemplate('nilai/home', $data);
	}

	public function add_nilai()
	{
		$data['judul'] = "tambah nilai";
		$data['data_Siswa'] = $this->M_siswa->getSiswa();
		$data['data_Mapel'] = $this->M_mapel->getMapel();
		$this->loadTemplate('nilai/form_tambah_nilai',$data);
	}

	public function act_tambah()
	{
		$this->form_validation->set_rules('id_mapel', 'Mapel', 'required');
		$this->form_validation->set_rules('id_siswa', 'Siswa', 'required');
		$this->form_validation->set_rules('total_nilai', 'Nilai', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect('nilai/add_nilai','refresh');
		} else {
			$param  = $this->input->post();

			$proses = $this->M_nilai->act_tambah($param);

			if ($proses>=0)
			{
				$this->session->set_flashdata('alert_msg', succ_msg('Nilai berhasil ditambahkan'));
				redirect('nilai','refresh');
			}
			else 
			{
				$this->session->set_flashdata('alert_msg', err_msg('Nilai gagal ditambahkan'));
				redirect('nilai/add_nilai','refresh');
			}
		}
	}

	public function edit($id)
	{
		$data['judul'] 		= "edit nilai";
		$data['data_Nilai'] = $this->M_nilai->getDetailNilai($id);
		$data['data_Mapel'] = $this->M_mapel->getMapel();
		$data['data_Siswa'] = $this->M_siswa->getSiswa();
		
		$this->loadTemplate('nilai/form_edit_nilai',$data);
	}

	public function act_edit()
	{
		$this->form_validation->set_rules('id_mapel', 'Mapel', 'required');
		$this->form_validation->set_rules('id_siswa', 'Siswa', 'required');
		$this->form_validation->set_rules('total_nilai', 'Nilai', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('alert_msg', err_msg(validation_errors()));
			redirect($_SERVER['HTTP_REFERER']);
		} else {

			$param  = $this->input->post();

			$proses = $this->M_nilai->act_edit($param);

			if ($proses>=0)
			{
				$this->session->set_flashdata('alert_msg', succ_msg('Nilai berhasil diubah'));
				redirect('nilai','refresh');
			}
			else 
			{
				$this->session->set_flashdata('alert_msg', err_msg('Nilai gagal diubah'));
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
	}

	public function hapus($id)
	{

		$proses = $this->M_nilai->act_hapus($id);

		if ($proses>=0)
		{
			$this->session->set_flashdata('alert_msg', succ_msg('Nilai berhasil dihapus'));
		}
		else 
		{
			$this->session->set_flashdata('alert_msg', err_msg('Nilai gagal dihapus'));
		}

		redirect('nilai','refresh');
	}


}
