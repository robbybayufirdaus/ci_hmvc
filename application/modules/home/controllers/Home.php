<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Home extends MX_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('Home_m');
		}

		public function index(){
			$this->load->view('home_v');
		}
	}