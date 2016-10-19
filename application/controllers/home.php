<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
    }


	/**
	 * Cotoh penggunaan bootstrap pada codeigniter::index()
	 */
	public function index()
	{
		$this->load->view('vhome');
	}
}

# nama file home.php
# folder apllication/controller/