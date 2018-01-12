<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view("layout/header");
		 $this->load->view("layout/nav");
		$this->load->view("index");
		$this->load->view("layout/footer");

	}

	public function pelangi()
	{
		$this->load->view("layout/header");
	  $this->load->view("layout/nav");
	  $this->load->view("pelangi");
	  $this->load->view("layout/footer");
	}

	public function cicak()
	{
		$this->load->view("layout/header");
	  $this->load->view("layout/nav");
	  $this->load->view("cicak");
	  $this->load->view("layout/footer");
	}
	public function naikkereta(){
		$this->load->view("layout/header");
	  $this->load->view("layout/nav");
	  $this->load->view("naikkereta");
	  $this->load->view("layout/footer");
	}
	public function balonku(){
		$this->load->view("layout/header");
	  $this->load->view("layout/nav");
	  $this->load->view("Balonku");
	  $this->load->view("layout/footer");
	}
	public function naikgunung(){
		$this->load->view("layout/header");
	  $this->load->view("layout/nav");
	  $this->load->view("naikgunung");
	  $this->load->view("layout/footer");
	}

}
