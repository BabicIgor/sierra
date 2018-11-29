<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Pages
 * @author Admin
 * @property Page_model $page_model
 * @property Aauth $aauth
 */
class Login extends Public_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login/user_model');
        $this->load->library('functions');
		$this->load->library('session');

    }
	public function index()
	{
	    /*$request = json_decode(file_get_contents('php://input'));
        $email = $request->email;
        $password = $request->password;*/
        
        
		$email = $this->input->post('email');
		$password = $this->input->post('password');
        $res = $this->user_model->verifyUser($email, $password);
        if($res)
        {
        	$result['login'] = TRUE;
        	$login_data = array(
        		'login_result' => 1,
        		'userName'=>$res->username,
        		'userid'=>$res->id
        	);
            $this->session->set_userdata($login_data);
        }
        else
        {
        	$result['login'] = FALSE;
        	$result['message'] = 'User not found or incorrect password';
        }
		
		redirect('/');
		
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
    
}