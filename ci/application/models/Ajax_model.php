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

    function update_user()
    {
        $user_id = $this->input->post('id');
        $user_name = $this->input->post('name');
        $user_age = $this->input->post('age');
        $user_phone = $this->input->post('phone');

        $this->db->set('name', $user_name);
        $this->db->set('age', $user_age);
        $this->db->set('phone', $user_phone);
        $user_id = $this->input->post('id');
        $this->db->where('id', $user_id);

        $result = $this->db->update('user');
        return $result;
    }

    function delete_user()
    {
        $user_id = $this->input->post('id');

        $this->db->where('id', $user_id);

        $result = $this->db->delete('user');
        return $result;
    }
}
