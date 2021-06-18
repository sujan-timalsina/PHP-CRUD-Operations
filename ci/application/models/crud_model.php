<?php
class Crud_model extends CI_Model
{
    public function getAllUsers()
    {
        $query = $this->db->get('user');
        if ($query) {
            return $query->result();
        }
    }
    public function insertUser($data)
    {
        $query1 = $this->db->insert('user', $data);
        if ($query1) {
            return true;
        } else {
            return false;
        }
    }
    public function delUser($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('user');
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function getSingleUser($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('user');
        if ($query) {
            return $query->row();
        }
    }

    public function updateUser($data, $id)
    {
        $this->db->where('id', $id);
        $query = $this->db->update('user', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
