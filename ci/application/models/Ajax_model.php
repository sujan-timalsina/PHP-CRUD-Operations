<?php
class Ajax_model extends CI_Model
{
    function insert_user()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'age' => $this->input->post('age'),
            'phone' => $this->input->post('phone')
        );

        $result = $this->db->insert('user', $data);
        return $result;
    }

    function select_user()
    {
        $res = $this->db->get('user');
        return $res->result();
    }
}
