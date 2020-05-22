<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['user_list'] = $this->user_model->get_users();
        $data['title'] = 'Users';

        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['user'] = $this->user_model->get_users($id);

        if (empty($data['user']))
        {
            show_404();
        }

        $data['title'] = "User";

        $this->load->view('templates/header', $data);
        $this->load->view('users/view', $data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create User';

        $this->form_validation->set_rules('name', 'Name', 'required|max_length[128]');
        $this->form_validation->set_rules('birth_date', 'Date of Birth', 'required|callback_validDate');
        $this->form_validation->set_rules('favorite_color', 'Favorite Color', 'required|max_length[25]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[128]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('users/create');
            $this->load->view('templates/footer');
        } else {
            $this->user_model->set_user();

            $this->load->view('templates/header', $data);
            $this->load->view('users/success');
            $this->load->view('templates/footer');
        }



    }

    public function validDate($date){
        if(!!$date){
            $date_today = date('dd/mm/yyyy');

            if($date_today > $date){
                return True;
            } else {
                $this->form_validation->set_message('validDate', '%s should not be greater than Today');
                return False;
            }
        }

        return True;
    }
}