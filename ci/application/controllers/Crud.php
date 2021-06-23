<?php

class Crud extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
    }

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

        // For image 
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } else if ($this->upload->do_upload()) {

            // $post = $this->input->post();
            $data = $this->upload->data();

            $image_path = base_url("upload/" . $data['raw_name'] . $data['file_ext']);
            // $post['image_path'] = $image_path;


            $result = $this->crud_model->insertUser([
                'name' => $this->input->post('name'),
                'age' => $this->input->post('age'),
                'phone' => $this->input->post('phone'),
                'img_path' => $image_path

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

        // For image 
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $data_error = [

                'error' => validation_errors()
            ];

            $this->session->set_flashdata($data_error);
        } else if ($this->upload->do_upload()) {

            $data = $this->upload->data();

            $image_path = base_url("upload/" . $data['raw_name'] . $data['file_ext']);

            $result = $this->crud_model->updateUser([
                'name' => $this->input->post('name'),
                'age' => $this->input->post('age'),
                'phone' => $this->input->post('phone'),
                'img_path' => $image_path

            ], $id);

            if ($result) {
                $this->session->set_flashdata('updated', 'Successfully Updated');
            }
        }

        redirect('crud');
    }
}
