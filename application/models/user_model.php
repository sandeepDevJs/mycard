<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        $email    = $this->db->escape_str($email);
        $password = $this->db->escape_str($password);
        $result   = $this->db->get_where('users', array('email' => $email, 'password' => $password))->result_array();
        if (count($result) === 1) {
            return $result;
        } else {
            return false;
        }

    }

    public function insert_visiting_users_data($data, $table){
        $data = $this->db->escape_str($data);
        return $this->db->insert($table, $data);
    }

    public function get_data($table, $user_id){
        return $this->db->get_where($table, array('user_id' => $user_id))->result_array();
    }

    public function update_data($table, $id, $data)
    {
        $this->db->where('user_id', $id);
        return $this->db->update($table, $data);
    }

    public function insert_company_info($data, $id)
    {
        //inserting info
        $this->db->insert('company_info', $data, true);
        $company_info_id = $this->db->insert_id();

        //updating status
        $this->db->where('user_id', $id);
        $this->db->update('users', array('status' => 'create'));

        //adding card data
        $this->db->where('user_id', $id);
        $this->db->update('card', array(
            'company_info_id' => $company_info_id
        ));
        return true;
    }

    public function insert_about($data, $id){

        //inserting about info
        $this->db->insert('about_form', $data, true);
        $about_form_id = $this->db->insert_id();

        //updating user's status
        $this->db->where('user_id', $id);
        $this->db->update('users', array('status' => 'about_form'));

        //updating card
        $this->db->where('user_id', $id);
        $this->db->update('card', array(
            'about_form_id' => $about_form_id
        ));
        return true;
    }

    public function insert_services($data, $id){

        //inserting services info
        $this->db->insert('services', $data, true);
        $services_id = $this->db->insert_id();

        //updating user's status
        $this->db->where('user_id', $id);
        $this->db->update('users', array('status' => 'services'));

        //updating card
        $this->db->where('user_id', $id);
        $this->db->update('card', array(
            'services_id' => $services_id
        ));
        return true;
    }

    public function insert_gallery($data, $id){

        //inserting gallery data
        $this->db->insert('gallery', $data);
        $gallery_id = $this->db->insert_id();

        //updating user's status
        $this->db->where('user_id', $id);
        $this->db->update('users', array('status' => 'completed'));

        //updating card
        $this->db->where('user_id', $id);
        $this->db->update('card', array(
            'gallery_id' => $gallery_id
        ));
        return true;
    }

    public function get_status($user_id){
        return $this->db->get_where('users', array("user_id" => $user_id))->result_array()[0];
    }

    public function get_feedback($card_id, $order=false){
        if($order == true){
            $this->db->order_by('feedback_id', 'desc');
        }
        return $this->db->get_where('feedback', array('card_id' => $card_id))->result_array();
    }

    public function get_sorted_data($rowno,$sortBy,$order,$card_id) {

        $this->db->select('*');
        $this->db->from('feedback');
        $this->db->where('card_id', $card_id);
        $this->db->order_by($sortBy, $order);
        $this->db->limit(10, $rowno); 
        $query = $this->db->get();
    
        return $query->result_array();
    }

    public function delete_feed($feedback_id)
    {
        return $this->db->delete("feedback", array("feedback_id" => $feedback_id));
    }

    public function get_enquiry($card_id, $order=false){
        if($order == true){
            $this->db->order_by('enquiry_id', 'desc');
        }
        return $this->db->get_where('enquiry', array('card_id' => $card_id))->result_array();
    }

    public function get_views($card_id)
    {
        return $this->db->get_where('card', array('card_id' => $card_id))->result_array()[0]['views'];
    }

    public function get_card($url)
    {
        return $this->db->get_where('card', array('url' => $url))->result_array();
    }

    public function increament_view($card_id, $view){
        $this->db->where("card_id", $card_id );
        $view = $view+1;
        $this->db->update("card", array("views" => $view));
    }
}
