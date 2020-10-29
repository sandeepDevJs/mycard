<?php

class Visiting_users extends CI_Controller
{

    public $card_user_id;
    public $card_id;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
        $this->load->library('form_validation');
    }

    public function index($url = null)
    {
        if ($url === null) {
            show_404();
            return false;
        }
        if(count($this->user->get_card($url)) === 0){
            show_404();
            return false;
        }
        else if ($card_ids = $this->user->get_card($url)) {
            $this->card_id         = (int)$card_ids[0]['card_id'];
            $this->card_user_id    = (int)$card_ids[0]['user_id'];

            $this->user->increament_view($this->card_id, (int)$card_ids[0]['views']);

            $data['company_info'] = $this->user->get_data('company_info', $this->card_user_id)[0];
            $data['about_form'] = $this->user->get_data('about_form', $this->card_user_id)[0];
            $data['services'] = $this->user->get_data('services', $this->card_user_id)[0];
            $data['gallery'] = $this->user->get_data('gallery', $this->card_user_id)[0];
            $data['feedbacks'] = $this->user->get_feedback($this->card_user_id);
            $data['card_id'] = (int)$card_ids[0]['card_id'];
            
            $this->load->view('User/card', $data);
        }
    }

    function take_feedback(){
        $config = array(
            array(
                "field" => "name",
                "label" => "Name",
                "rules" => "trim|xss_clean|required",
                "errors" => array(
                    "required" => "We Need Your Name"
                ),
            ),
            array(
                "field" => "feedback",
                "label" => "Feedback",
                "rules" => "trim|xss_clean|required",
                "errors" => array(
                    "required" => "We Need Your Feedback"
                ),
            ),
        );

        $this->form_validation->set_rules($config);
        if($this->form_validation->run() === FALSE){
            $output = array(
                "status" => 0,
                "error" => strip_tags(validation_errors())
            );
            echo json_encode($output);
            return false;
        }else{

            $data = array(
                "name" => $this->input->post('name'),
                "feedback" => $this->input->post('feedback'),
                "rating" => $this->input->post('rate'),
                "card_id" => $this->input->post('card_id'), 
            );

            $this->output->set_content_type("application/json");
            $this->user->insert_visiting_users_data($data, "feedback");

            $output = array(
                "status" => 1
            );
            echo json_encode($output);
            return true;
        }
    }

    function take_enquiry(){
        $config = array(
            array(
                "field" => "name",
                "label" => "Name",
                "rules" => "trim|xss_clean|required",
                "errors" => array(
                    "required" => "We Need Your Name"
                ),
            ),
            array(
                "field" => "enquiry_text",
                "label" => "Enquiry",
                "rules" => "trim|xss_clean|required",
                "errors" => array(
                    "required" => "We Need Your Feedback"
                ),
            ),
            array(
                "field" => "phone",
                "label" => "Phone Number",
                "rules" => "trim|xss_clean|required|numeric|exact_length[10]",
                "errors" => array(
                    "required" => "We Need Your Feedback",
                    "numeric" => "Phone Number Must Be Numbers",
                    "exact_length" => "Phone Number Must Have 10 digits",
                ),
            ),
            array(
                "field" => "email",
                "label" => "Email",
                "rules" => "trim|xss_clean|required|valid_email",
                "errors" => array(
                    "required" => "We Need Your Feedback",
                    "valid_email" => "Invalid Email",
                ),
            ),
        );

        $this->form_validation->set_rules($config);
        if($this->form_validation->run() === FALSE){
            $output = array(
                "status" => 0,
                "error" => strip_tags(validation_errors())
            );
            echo json_encode($output);
            return false;
        }else{

            $data = array(
                "name" => $this->input->post('name'),
                "email" => $this->input->post('email'),
                "phone" => $this->input->post('phone'),
                "text" => $this->input->post('enquiry_text'),
                "card_id" => $this->input->post('card_id'), 
            );

            $this->output->set_content_type("application/json");
            $this->user->insert_visiting_users_data($data, "enquiry");

            $output = array(
                "status" => 1
            );
            echo json_encode($output);
            return true;
        }
    }
}
