<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->template("index");

	}

	public function pelangi()
	{
	  $this->load->template("pelangi");
	}

	public function cicak()
	{
	  $this->load->template("cicak");
	}
	public function naikkereta(){
	  $this->load->template("naikkereta");
	}
	public function balonku(){
	  $this->load->template("Balonku");
	}
	public function naikgunung(){
	  $this->load->template("naikgunung");
	}

}
