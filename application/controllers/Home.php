<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
    {
        $this->load->helper('url');

        if ( ! file_exists(APPPATH.'views/home.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = "Home";

        $this->load->view('templates/header', $data);
        $this->load->view('home');
        $this->load->view('templates/footer');
    }
}