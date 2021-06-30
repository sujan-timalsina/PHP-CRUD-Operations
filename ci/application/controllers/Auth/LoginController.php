<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->model('UserModel');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == False) {
            //Failed
            $this->index();
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            ];
            $user = new UserModel;
            $result = $user->loginUser($data);
            if ($result != FALSE) {
                echo
                $auth_userdetails = [
                    'first_name' => $result->first_name,
                    'last_name' => $result->last_name,
                    'email' => $result->email
                ];
                $this->session->set_userdata('authenticated', '1');
                $this->session->set_userdata('auth_user', $auth_userdetails);
                $this->session->set_flashdata('status', 'You are logged in Successfully');
                redirect(base_url('userpage'));
            } else {
                $this->session->set_flashdata('status', 'Invalid Email Or Password');
                redirect(base_url('login'));
            }
        }
    }
}
