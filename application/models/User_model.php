<?php


class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    /** Obtain list of users created in the application
     * @param bool $id ID of the User to search for
     * @return mixed
     */
    public function get_users($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('user');
            return $query->result_array();
        }

        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

    /**
     * Creates a new User
     * @return mixed
     */
    public function set_user()
    {
        $this->load->helper('url');

        $data = array(
            'name' => $this->input->post('name'),
            'birth_date' => $this->input->post('birth_date'),
            'email' => $this->input->post('email'),
            'favorite_color' => $this->input->post('favorite_color')
        );

        return $this->db->insert('user', $data);
    }
}