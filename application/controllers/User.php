<?php

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
    }

    public function login()
    {
        if (!$this->loginCheck()) {
            if ($this->input->post()) {
                $email    = $this->input->post('email');
                $password = $this->input->post('password');
                if ($this->user->login($email, $password)) {
                    $data = $this->user->login($email, $password);
                    $this->session->set_userdata(array('login_id' => $data[0]['user_id'], 'name' => $data[0]['name']));
                    $user_id = $data[0]['user_id'];
                    $card = $this->user->get_data('card', $user_id)[0];
                    $this->session->set_userdata('card_id', $card['card_id']);
                    redirect('dashboard');
                } else {
                    $data['error'] = "Invalid Credentials";
                    $this->load->view('admin/log_in', $data);
                }

            } else {
                $this->load->view('admin/log_in');
            }
        } else {
            redirect('dashboard');
        }
    }

    public function loginCheck()
    {
        if (!$this->session->userdata('login_id')) {
            return false;
        } else {
            return true;
        }
    }

}
