<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Auth_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['judul'] = "Halaman Dashboard";

		$this->loadTemplate('dashboard', $data);
	}
}
