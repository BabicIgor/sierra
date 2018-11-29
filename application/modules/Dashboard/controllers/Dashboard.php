<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 2/16/2017
 * Time: 5:51 PM
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of dashboard
 *
 * @author Admin
 */
class Dashboard extends Public_Controller {

    function __construct() {
        parent::__construct();
        $this->functions->access();
        $this->load->library('google');
        $this->load->model('login/user_model');
        $this->load->library('session');

    }

    public function index() {

			$login_result = $this->session->userdata('login_result');
			$userName = $this->session->userdata('userName');
			

            $fname = $this->aauth->get_user_first_name();
            $lname = $this->aauth->get_user_last_name();
            $initials = $this->aauth->get_user_name_initials();
			$google_login_url = $this->google->get_login_url();

			
            $menu_data = array(
                'fname' => $fname,
                'initials' => $initials,
                'lname' => $lname,
                'userName'=>$userName
            );
            


            if($login_result == TRUE)
            {
            	$data = array(
                'initials' => $initials,
                'fname' => $fname,
                'lname' => $lname,
                'total_users' => $this->aauth->get_number_of_users(),
                'total_groups' => $this->aauth->get_number_of_groups(),
                'total_banned_users' => $this->aauth->get_number_of_banned_users(),
                'menu' => $this->load->view('menu/admin_main_authed', $menu_data, TRUE),
                'google_login_url' =>$google_login_url,
                'sessionType' => 0,
                'version'=>0,
                'creator_id'=>1,
				'userName'=>$userName

	            );
                $this->template->set_template('login_signup');
	            $this->template->write('title', 'Dashboard Page', TRUE);
            	$this->template->write_view('content', 'dashboard_authed', $data, TRUE);
            }
            else
            {
            	$data = array(
	                'initials' => $initials,
	                'fname' => $fname,
	                'lname' => $lname,
	                'total_users' => $this->aauth->get_number_of_users(),
	                'total_groups' => $this->aauth->get_number_of_groups(),
	                'total_banned_users' => $this->aauth->get_number_of_banned_users(),
	                'menu' => $this->load->view('menu/admin_main_guest', $menu_data, TRUE),
	                'google_login_url' =>$google_login_url
	            );
                $this->template->set_template('new_design');
	            $this->template->write('title', 'Dashboard Page', TRUE);
            	$this->template->write_view('content', 'dashboard_guest', $data, TRUE);
            }
            $this->template->render();
       
    }
}

/* End of file dashboard.php */
/* Location: ./application/modules/dashboard/controllers/dashboard_model.php */