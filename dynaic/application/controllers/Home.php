<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('banner');
		$this->load->view('about');
		$this->load->view('profile');
		$this->load->view('skill');
		$this->load->view('portfolio');

		$this->load->view('templates/footer');
	}
}
