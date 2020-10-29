<?php

class Dashboard extends CI_Controller
{
    private $user_id = 0;
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user_model', 'user');
        $this->user_id = $this->session->userdata('login_id');
    }

    public function index()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }
        $this->where_to_redirect();
    }

    public function create()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }

        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Create Card";
        $data['step_no'] = "Step 1 - ";
        $data['step']    = "Company Info";

        if (!$this->input->post()) {
            $this->render('create', $data, array('nav' => 'create', 'sub_nav_id' => 1));
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
                    'rules'  => 'trim|xss_clean|valid_email|required|is_unique[company_info.email]',
                    'errors' => array(
                        "valid_email" => "Enter A Valid Email Address",
                        "is_unique"   => "We Already Have This Email, Try Different One.",
                    ),
                ),
                array(
                    'field'  => 'phone',
                    'label'  => 'Phone Number',
                    'rules'  => 'trim|xss_clean|numeric|required|exact_length[10]|is_unique[company_info.phone]',
                    'errors' => array(
                        "numeric"      => "Phone Number Must Only Contain Numbers",
                        "exact_lenght" => "Phone Number Can Only Have 10 Digits.",
                        "is_unique"    => "We Already Have This Phone Number, Try Different One.",
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

                $this->render('create', $data, array('nav' => 'create', 'sub_nav_id' => 1), validation_errors());

            } else {
                $file_name = $this->upload_image("userfile", "uploads/");
                if ($file_name === false) {
                    $this->render('create', $data, array('nav' => 'create', 'sub_nav_id' => 1), $this->upload->display_errors());
                    return false;
                }

                $insert_data = array(
                    "company_name"    => $this->input->post('company_name'),
                    "nature_business" => $this->input->post('nature_business'),
                    "address"         => $this->input->post('address'),
                    "email"           => $this->input->post('email'),
                    "owner"           => $this->input->post('owner'),
                    "image"           => $file_name,
                    "website"         => ($this->input->post('website')) ? $this->input->post('website') : "",
                    "phone"           => $this->input->post('phone'),
                    "facebook_link"   => ($this->input->post('facebook_link')) ? $this->input->post('facebook_link') : "",
                    "insta_link"      => ($this->input->post('insta_link')) ? $this->input->post('insta_link') : "",
                    "twitter_link"    => ($this->input->post('twitter_link')) ? $this->input->post('twitter_link') : "",
                    "user_id"         => $this->session->userdata('login_id'),
                );
                if (!$this->user->insert_company_info($insert_data, $this->user_id)) {
                    $this->render('create', $data, array('nav' => 'create', 'sub_nav_id' => 1), "Some Internal Error Has Occurred. We will Look Into It.");
                } else {
                    redirect('about');
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

        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Create Card";
        $data['step_no'] = "Step 2 - ";
        $data['step']    = "About Your Organisation";

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
            $user_id = $this->session->userdata('login_id');
            if ($this->form_validation->run() === false) {
                $this->render('about', $data, array('nav' => 'create', 'sub_nav_id' => 2), validation_errors());
            } else {
                $this->user->insert_about(array(
                    "specialities" => $this->input->post('specialities'),
                    "mission"      => $this->input->post('mission'),
                    "approach"     => $this->input->post('approach'),
                    "own_words"    => $this->input->post('own_words'),
                    "user_id"      => $user_id,
                ),$this->user_id
                );

                redirect('services');
            }

        } else {
            $this->render('about', $data, array('nav' => 'create', 'sub_nav_id' => 2));
        }
    }

    public function services()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }

        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Create Card";
        $data['step_no'] = "Step 3 - ";
        $data['step']    = "Services";

        if ($this->input->post()) {
            $this->form_validation->set_rules('services', 'Services Text', 'trim|required|min_length[30]', array("min_length" => "That's too short; That won't look good."));
            if ($this->form_validation->run() === false) {
                $this->render('services', $data, array('nav' => 'create', 'sub_nav_id' => 3), validation_errors());
            } else {
                $this->user->insert_services(array(
                    "services" => $this->input->post('services'),
                    "user_id"  => $this->session->userdata('login_id'),
                ), $this->user_id);
                redirect('gallery');
            }
        } else {
            $this->render('services', $data, array('nav' => 'create', 'sub_nav_id' => 3));
        }

    }

    public function gallery()
    {
        if (!$this->loginCheck()) {
            redirect('login');
            return false;
        }

        $data['name']    = $this->session->userdata('name');
        $data['title']   = "Create Card";
        $data['step_no'] = "Step 4 - ";
        $data['step']    = "Gallery";

        if ($this->input->post()) {
            $file_name_array = array();
            $countfiles = count($_FILES['userfiles']['name']);
            if ($countfiles !== 6) {
                $this->render('gallery', $data, array('nav' => 'create', 'sub_nav_id' => 4), "You Must Add 6 Images".$countfiles);
                return false;
            }
            for ($i = 0; $i < $countfiles; $i++) {
                $_FILES['file']['name']     = $_FILES['userfiles']['name'][$i];
                $_FILES['file']['type']     = $_FILES['userfiles']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['userfiles']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['userfiles']['error'][$i];
                $_FILES['file']['size']     = $_FILES['userfiles']['size'][$i];

                $file_name = $this->upload_image("file", "uploads/images");
                if ($file_name === false) {
                    $this->render('gallery', $data, array('nav' => 'create', 'sub_nav_id' => 4), $this->upload->display_errors());
                    return false;
                } else {
                    array_push($file_name_array, $file_name);
                }
            }

            $this->user->insert_gallery(array(
                "image_1" => $file_name_array[0],
                "image_2" => $file_name_array[1],
                "image_3" => $file_name_array[2],
                "image_4" => $file_name_array[3],
                "image_5" => $file_name_array[4],
                "image_6" => $file_name_array[5],
                "user_id" => $this->session->userdata('login_id'),
            ), $this->user_id);

            redirect('dash');

        } else {
            $this->render('gallery', $data, array('nav' => 'create', 'sub_nav_id' => 4));
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

    private function render($view, $data, $nav, $error = "", $disable_navs = TRUE)
    {
        $this->session->set_flashdata($nav['nav'], $nav['sub_nav_id']);
        if (!empty($error)) {
            $this->session->set_flashdata('error', $error);
        }
        if($disable_navs){
            $this->session->set_flashdata('disable_navs', 1);
        }
        $this->load->view('admin/parts/navbar', $data);
        $this->load->view('admin/'.$view, $data);
        $this->load->view('admin/parts/footer');
    }

    private function where_to_redirect()
    {
        $user_id = $this->session->userdata('login_id');
        $status = $this->user->get_status($user_id)['status'];
        if (empty($status)) 
        {
            redirect('create');   
        }

        if ($status === 'create') 
        {
            redirect('create');   
        }

        if($status === 'about_form')
        {
            redirect('services');   
        }

        if($status === 'services')
        {
            redirect('gallery');   
        }

        if($status === 'completed')
        {
            redirect('dash');   
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(array('login_id'));
    }

}
