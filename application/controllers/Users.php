<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    // READ: Show all users
    public function index() {
        $data['users'] = $this->user_model->get_all();
        $this->load->view('users/index', $data);
    }

    // CREATE: Show form + save
    public function create() {
        if ($this->input->post()) {
            $data = [
                'name'  => $this->input->post('name'),
                'email' => $this->input->post('email')
            ];
            $this->user_model->insert($data);
            redirect('users');
        }
        $this->load->view('users/create');
    }

    // UPDATE: Show edit form + update
    public function edit($id) {
        $data['user'] = $this->user_model->get_by_id($id);
        if ($this->input->post()) {
            $updateData = [
                'name'  => $this->input->post('name'),
                'email' => $this->input->post('email')
            ];
            $this->user_model->update($id, $updateData);
            redirect('users');
        }
        $this->load->view('users/edit', $data);
    }

    // DELETE
    public function delete($id) {
        $this->user_model->delete($id);
        redirect('users');
    }
}
