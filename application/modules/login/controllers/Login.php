<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_m');
	}

	public function index()
	{
		if($this->session->userdata('is_login')==TRUE){
           	redirect('home'); 
		}else{
	        $x['title'] = "Login";
			$this->load->view('login_v',$x); 
		}
	}

	public function auth()
	{
		$username = htmlspecialchars($this->input->post('username'));
		$password = sha1(htmlspecialchars($this->input->post('password')));
		$auth = $this->Login_m->auth($username, $password);
		if ($auth->num_rows() > 0) {
			$session_data = [
				'id' => $auth->row()->id,
				'username' => $auth->row()->username,
				'nama_lengkap' => $auth->row()->nama_lengkap,
				'jabatan' => $auth->row()->jabatan,
				'group' => $auth->row()->group,
				'is_login' => TRUE
			];
			$this->session->set_userdata($session_data);
			redirect('home');
		} else {
			$this->session->set_flashdata('info', 'Username dan Password tidak sesuai!');
			redirect('/');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
