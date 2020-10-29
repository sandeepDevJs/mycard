<?php

class Dash extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('form_validation', 'pagination'));
        $this->load->model('user_model', 'user');
    }

    public function index()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }
        $card_id = $this->session->userdata('card_id');
        $data['title'] = "Dashboard";
        $data['name']  = $this->session->userdata('name');
        $data['feedback_count'] = count($this->user->get_feedback($card_id));
        $data['enquiry_count'] = count($this->user->get_enquiry($card_id));
        $data['views'] = $this->user->get_views($card_id);

        $data['feedbacks'] = $this->user->get_feedback($card_id, true);
        $data['enquiries'] = $this->user->get_enquiry($card_id, true);
        $user_id = $this->session->userdata('login_id');
        $card = $this->user->get_data('card', $user_id)[0];
        $this->session->set_userdata('card_id', $card['card_id']);

        $this->render('dash', $data, array('nav' => 'dash', 'sub_nav_id' => 1));
    }

    public function create()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }

        $user_id           = $this->session->userdata('login_id');
        $data['name']      = $this->session->userdata('name');
        $data['title']     = "Create Card";
        $data['step_no']   = "Step 1 - ";
        $data['step']      = "Company Info";
        $data['user_data'] = $this->user->get_data('company_info', (int)$user_id)[0];
        
        if (!$this->input->post()) {
            $this->render('edit/create', $data, array('nav' => 'create', 'sub_nav_id' => 1));
        } else {
            $config = array(
                array(
                    'field'  => 'company_name',
                    'label'  => 'Company Name',
                    'rules'  => 'trim|xss_clean|alpha_numeric_spaces|required',
                    'errors' => array(
                        "alpha_numeric" => "Company Name Should Only Contain Alphabets And Numbers",
                    ),
                ),
                array(
                    'field' => 'address',
                    'label' => 'Company Addreess',
                    'rules' => 'trim|xss_clean|required',
                ),
                array(
                    'field' => 'nature_business',
                    'label' => 'Nature Of Business',
                    'rules' => 'trim|xss_clean|required',
                ),
                array(
                    'field'  => 'email',
                    'label'  => 'Email Address',
                    'rules'  => 'trim|xss_clean|valid_email|required',
                    'errors' => array(
                        "valid_email" => "Enter A Valid Email Address",
                    ),
                ),
                array(
                    'field'  => 'phone',
                    'label'  => 'Phone Number',
                    'rules'  => 'trim|xss_clean|numeric|required|exact_length[10]',
                    'errors' => array(
                        "numeric"      => "Phone Number Must Only Contain Numbers",
                        "exact_lenght" => "Phone Number Can Only Have 10 Digits.",
                    ),
                ),
                array(
                    'field'  => 'owner',
                    'label'  => 'Owners Name',
                    'rules'  => 'trim|xss_clean|required|regex_match[/^[a-zA-Z ]*$/]',
                    'errors' => array(
                        'regex_match' => "Name Should Only Contain Alphabets.",
                    ),
                ),
                array(
                    'field'  => 'website',
                    'label'  => 'Website',
                    'rules'  => 'trim|xss_clean|regex_match[/(https?)?:?(www)/i]',
                    'errors' => array(
                        'regex_match' => "Enter A Valid Url",
                    ),
                ),
                array(
                    'field'  => 'facebook_link',
                    'label'  => 'facebook Profile',
                    'rules'  => 'trim|xss_clean|regex_match[/(?:https?:\/\/)?(?:www\.)?facebook\.com\/.(?:(?:\w)*#!\/)?(?:pages\/)?(?:[\w\-]*\/)*([\w\-\.]*)/]',
                    'errors' => array(
                        'regex_match' => "Enter A Valid Facebook Profile Url",
                    ),
                ),
                array(
                    'field'  => 'insta_link',
                    'label'  => 'Instagram Profile',
                    'rules'  => 'trim|xss_clean',
                ),
                array(
                    'field'  => 'twitter_link',
                    'label'  => 'Twitter Profile',
                    'rules'  => 'trim|xss_clean|regex_match[/(https?)?:?(www)?twitter\.com/i]',
                    'errors' => array(
                        'regex_match' => "Enter A Valid Twitter Profile Url",
                    ),
                ),
            );

            $this->form_validation->set_rules($config);

            if ($this->form_validation->run() === false) {

                $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
                $this->render('edit/create', $data, array('nav' => 'create', 'sub_nav_id' => 1));
                return false;

            } else {

                if(!empty($_FILES['userfile']['name']))
                {
                    $file_name = $this->upload_image("userfile", "uploads/");
                    if ($file_name === false) {
                        $this->render('edit/create', $data, array('nav' => 'create', 'sub_nav_id' => 1), $this->upload->display_errors());
                        return false;
                    }
                }

                $insert_data = array(
                    "company_name"    => $this->input->post('company_name'),
                    "nature_business" => $this->input->post('nature_business'),
                    "address"         => $this->input->post('address'),
                    "email"           => $this->input->post('email'),
                    "owner"           => $this->input->post('owner'),
                    "image"           => (!empty($_FILES['userfile']['name']))?$file_name:$data['user_data']['image'],
                    "website"         => ($this->input->post('website')) ? $this->input->post('website') : "",
                    "phone"           => $this->input->post('phone'),
                    "facebook_link"   => ($this->input->post('facebook_link')) ? $this->input->post('facebook_link') : "",
                    "insta_link"      => ($this->input->post('insta_link')) ? $this->input->post('insta_link') : "",
                    "twitter_link"    => ($this->input->post('twitter_link')) ? $this->input->post('twitter_link') : "",
                    "user_id"         => $this->session->userdata('login_id'),
                );
                if (!$this->user->update_data('company_info ', $user_id, $insert_data)) {
                    $this->render('edit/create', $data, array('nav' => 'create', 'sub_nav_id' => 1), "Some Internal Error Has Occurred. We will Look Into It.");
                } else {
                    redirect('edit/about');
                }
            }

        }
    }

    public function about()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }

        $user_id = $this->session->userdata('login_id');
        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Create Card";
        $data['step_no'] = "Step 2 - ";
        $data['step']    = "About Your Organisation";
        $data['user_data'] = $this->user->get_data('about_form', $user_id)[0];

        if ($this->input->post()) {
            $config = array(
                array(
                    'field'  => "specialities",
                    "label"  => "Specialities",
                    "rules"  => "trim|xss_clean|required|min_length[30]",
                    "errors" => array(
                        "min_length" => "Well, That's Too Short; That Won't Look Good.",
                    ),
                ),
                array(
                    'field'  => "mission",
                    "label"  => "Mission",
                    "rules"  => "trim|xss_clean|required|min_length[30]",
                    "errors" => array(
                        "min_length" => "Well, That's Too Short; That Won't Look Good.",
                    ),
                ),
                array(
                    'field'  => "approach",
                    "label"  => "Approach",
                    "rules"  => "trim|xss_clean|required|min_length[30]",
                    "errors" => array(
                        "min_length" => "Well, That's Too Short; That Won't Look Good.",
                    ),
                ),
                array(
                    'field'  => "own_words",
                    "label"  => "Own Words",
                    "rules"  => "trim|xss_clean|required|min_length[30]",
                    "errors" => array(
                        "min_length" => "Well, That's Too Short; That Won't Look Good.",
                    ),
                ),
            );

            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() === false) {
                $this->render('edit/about', $data, array('nav' => 'create', 'sub_nav_id' => 2), validation_errors());
                return false;
            } else {
                $this->user->update_data('about_form', $user_id, array(
                    "specialities" => $this->input->post('specialities'),
                    "mission"      => $this->input->post('mission'),
                    "approach"     => $this->input->post('approach'),
                    "own_words"    => $this->input->post('own_words'),
                    "user_id"      => $user_id,
                )
                );

                redirect('edit/services');
            }

        } else {
            $this->render('edit/about', $data, array('nav' => 'create', 'sub_nav_id' => 2));
        }
    }

    public function services()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }

        $user_id = $this->session->userdata('login_id');
        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Create Card";
        $data['step_no'] = "Step 3 - ";
        $data['step']    = "Services";
        $data['user_data'] = $this->user->get_data('services', $user_id)[0];

        if ($this->input->post()) {
            $this->form_validation->set_rules('services', 'Services Text', 'trim|required|min_length[30]', array("min_length" => "That's too short; That won't look good."));
            if ($this->form_validation->run() === false) {
                $this->render('edit/services', $data, array('nav' => 'create', 'sub_nav_id' => 3), validation_errors());
            } else {
                $this->user->update_data('services', $user_id, array(
                    "services" => $this->input->post('services'),
                    "user_id"  => $this->session->userdata('login_id'),
                ));
                redirect('edit/gallery');
            }
        } else {
            $this->render('edit/services', $data, array('nav' => 'create', 'sub_nav_id' => 3));
        }

    }

    public function gallery()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }

        $user_id = $this->session->userdata('login_id');
        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Create Card";
        $data['step_no'] = "Step 4 - ";
        $data['step']    = "Gallery";
        $data['user_data'] = $this->user->get_data('gallery', $user_id)[0];

        if ($this->input->post('image')) {
            if(!empty($_FILES['image_1']['name'])){
                $this->update_gallery('image_1', $data);
            }
            if(!empty($_FILES['image_2']['name'])){
                $this->update_gallery('image_2', $data);
            }
            if(!empty($_FILES['image_3']['name'])){
                $this->update_gallery('image_3', $data);
            }
            if(!empty($_FILES['image_4']['name'])){
                $this->update_gallery('image_4', $data);
            }
            if(!empty($_FILES['image_5']['name'])){
                $this->update_gallery('image_5', $data);
            }
            if(!empty($_FILES['image_6']['name'])){
                $this->update_gallery('image_6',  $data);
            }
            
            redirect('dash');
            
        } else {
            $this->render('edit/gallery', $data, array('nav' => 'create', 'sub_nav_id' => 4));
        }
    }

    public function feedback(){
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }
        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Feedback";
        $this->render('feedback', $data, array('nav' => 'feedback', 'sub_nav_id' => 1));
    }

    public function enquiry(){
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }
        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Enquiry";
        $this->render('enquiry', $data, array('nav' => 'enquiry', 'sub_nav_id' => 1));
    }


    public function people(){
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }
        $data['name']    = $this->session->userdata('name');
        $data['title']   = "People";
        $this->render('people', $data, array('nav' => 'people', 'sub_nav_id' => 1));
    }

    private function upload_image($userfiles, $path)
    {
        $upload_config['upload_path']   = $path; //uploads/
        $upload_config['allowed_types'] = "jpg|jpeg|png|gif";
        $this->load->library('upload', $upload_config);
        if ($this->upload->do_upload($userfiles) === false) {
            return false;
        } else {
            return $this->upload->data()['file_name'];
        }
    }

    private function render($view, $data, $nav, $error = "")
    {
        $this->unset_all_flashdata();
        $this->session->set_flashdata($nav['nav'], $nav['sub_nav_id']);
        if (!empty($error)) {
            $this->session->set_flashdata('error', $error);
        }
        $this->load->view('admin/parts/navbar', $data);
        $this->load->view('admin/' . $view, $data);
        $this->load->view('admin/parts/footer');
    }

    private function update_gallery($image_index, $data){
        $user_id = $this->session->userdata('login_id');
        if (!empty($_FILES[$image_index]['name'])) {
            $_FILES['file']['name']     = $_FILES[$image_index]['name'];
            $_FILES['file']['type']     = $_FILES[$image_index]['type'];
            $_FILES['file']['tmp_name'] = $_FILES[$image_index]['tmp_name'];
            $_FILES['file']['error']    = $_FILES[$image_index]['error'];
            $_FILES['file']['size']     = $_FILES[$image_index]['size'];

            $file_name = $this->upload_image("file", "uploads/images");
            if ($file_name === false) {
                $this->render('edit/gallery', $data, array('nav' => 'create', 'sub_nav_id' => 4), $this->upload->display_errors());
                return false;
            }
            $this->user->update_data('gallery', $user_id, array(
                $image_index => $file_name,
            ));
        }
    }

    private function loginCheck()
    {
        if (!$this->session->userdata('login_id')) {
            return false;
        } else {
            return true;
        }
    }

    private function unset_all_flashdata(){
        $this->session->set_flashdata('create', 0);
        $this->session->set_flashdata('feedback', 0);
        $this->session->set_flashdata('people', 0);
        $this->session->set_flashdata('enquiry', 0);
        $this->session->set_flashdata('dash', 0);
                
    }

    public function feeds(){

        $card_id = $this->session->userdata('card_id');
        $feeds = $this->user->get_feedback($card_id);
        $data = array();
        foreach($feeds as $rows)
        {
            array_push($data, array(
                $rows['name'],
                $rows['feedback'],
                $rows['rating'],
                date('F d, Y h:mA', strtotime($rows['added_at'])),
                '<button onclick="deleteFeed('.$rows["feedback_id"].')" type="button" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</button>'
            ));     
        }

        $output = array(
            "recordsTotal" => count($this->user->get_feedback($card_id)),
            "recordsFiltered" => count($this->user->get_feedback($card_id)),
            "data" => $data
        );
        echo json_encode($output);
    }

    public function delete_feed($feedback_id){
        if($this->user->delete_feed($feedback_id)){
            echo json_encode(1);
        }
    }

    public function enqs(){

        $card_id = $this->session->userdata('card_id');
        $enq = $this->user->get_enquiry($card_id);
        $data = array();
        foreach($enq as $rows)
        {
            array_push($data, array(
                $rows['name'],
                $rows['email'],
                $rows['phone'],
                $rows['text'],
                date('F d, Y h:mA', strtotime($rows['added_at'])),
            ));     
        }

        $output = array(
            "recordsTotal" => count($this->user->get_enquiry($card_id)),
            "recordsFiltered" => count($this->user->get_enquiry($card_id)),
            "data" => $data
        );
        echo json_encode($output);
    }

    public function people_data(){

        $card_id = $this->session->userdata('card_id');
        $enq = $this->user->get_enquiry($card_id);
        $data = array();
        foreach($enq as $rows)
        {
            array_push($data, array(
                $rows['name'],
                $rows['email'],
                $rows['phone'],
            ));     
        }

        $output = array(
            "recordsTotal" => count($this->user->get_enquiry($card_id)),
            "recordsFiltered" => count($this->user->get_enquiry($card_id)),
            "data" => $data
        );
        echo json_encode($output);
    }

}
