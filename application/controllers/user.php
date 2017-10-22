<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function index()
	{
	   $data['firstname']="aqib";
        $data['lastname']="butt";//$this->input->post('lastname');
        $data['username']="aqibbutt";//$this->input->post('username');
        $data['email']="aqbutt05@gmail.com";//$this->input->post('email');
        $data['password']="123456";//$this->input->post('password');
//        var_dump($data);
//        $this->load->model('user_model');
//        $result=$this->user_model->add_bloggeruser($data);
//            die(var_dump($result));
		$data = array('page_name' => 'includes/index');
		$this->load->view('template', $data);
	}
}
