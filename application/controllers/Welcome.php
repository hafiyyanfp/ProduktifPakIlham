<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function dashboard($nama,$gender)
	{
		$data['nama_lengkap']=$nama;
		$data['jenis_kelamin']=$gender;
		$this->load->view('beranda', $data);
		
	}
	public function profil()
	{
		$this->load->view('profil');
		
	}
	public function utama()
	{
		$this->load->view('utama');
		
	}
	public function event()
	{
		$this->load->view('event');
		
	}
	public function gallery()
	{
		$this->load->view('gallery');
		
	}
	public function contact()
	{
		$this->load->view('contact');
		
	}
	
}