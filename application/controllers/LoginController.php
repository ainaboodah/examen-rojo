<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

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
		$this->load->view('pages/login.php');
	}	
    public function checkLogin(){
        $this->load->library('User');
        $user = new User(1, 'John', 'Doe', 'Male', 'johndoe', 'password123');
        print($user->getNom()); // Affiche "John"
    }
    public function codeigniter(){
        $this->load->view('welcome_message');
    }	
}
