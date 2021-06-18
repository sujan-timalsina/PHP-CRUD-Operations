<?php

class Crud extends CI_Controller
{
    public function index()
    {
        // $this->load->model('crud_model');
        $data['user_details'] = $this->crud_model->getAllUsers();
        $this->load->view('crud_view', $data);
    }

    public function addUser()
    {
        $this->form_validation->set_rules('name', 'User Name', 'trim|required');
        $this->form_validation->set_rules('age', 'User Age', 'trim|required');
        $this->form_validation->set_rules('phone', 'User Phone Number', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } else {
            $result = $this->crud_model->insertUser([
                'name' => $this->input->post('name'),
                'age' => $this->input->post('age'),
                'phone' => $this->input->post('phone')

            ]);

            if ($result) {
                $this->session->set_flashdata('inserted', 'Successfully Added');
            }
        }

        redirect('crud');
    }

    public function deleteUser($id)
    {
        $result = $this->crud_model->delUser($id);
        if ($result) {
            $this->session->set_flashdata('deleted', 'Successfully Deleted');
        }
        redirect('crud');
    }

    public function editUser($id)
    {
        $data['singleUser'] = $this->crud_model->getSingleUser($id);

        $this->load->view('edit_view', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'User Name', 'trim|required');
        $this->form_validation->set_rules('age', 'User Age', 'trim|required');
        $this->form_validation->set_rules('phone', 'User Phone Number', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } else {
            $result = $this->crud_model->updateUser([
                'name' => $this->input->post('name'),
                'age' => $this->input->post('age'),
                'phone' => $this->input->post('phone')

            ], $id);

            if ($result) {
                $this->session->set_flashdata('updated', 'Successfully Updated');
            }
        }

        redirect('crud');
    }
}
