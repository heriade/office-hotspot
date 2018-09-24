<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function index()
{
$this->load->view("login");
}

public function register_view(){
  $this->load->view("register");
}

public function register_user(){

  $user=array(
  'user_name'=>$this->input->post('user_name'),
  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password')));
      
  $email_check=$this->user_model->email_check($user['user_email']);

  if($email_check){
    $this->user_model->register_user($user);
    $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
    redirect('user/login_view');

  }else{

    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
    redirect('user');

  }

}

public function login_view(){

$this->load->view("login");

}

function login_user(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
       
        redirect('user/dashboard');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Wrong Email or Password,Try again.');
        redirect("user/login_view");

      }


}

function user_profile(){

$this->load->view('user_profile');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

public function dashboard(){
  $this->load->view('dashboard');
}

public function changePassword(){
  $this->load->view('changepass');
}

public function updateUser(){

  $userpass=array('changename'=>$this->input->post('changename'), 'nwpass'=>md5($this->input->post('nwpass')));

  $query = $this->user_model->updateuser($userpass['changename'], $userpass['nwpass']);

  if($query){
    $this->session->set_flashdata('success_msg', 'Password successfully Change... Now login to your account.');
    redirect('user/login_view');
  }else{
    $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
    redirect('user/dashboard');
  }

}

}

?>
