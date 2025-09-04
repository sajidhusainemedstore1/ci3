<?php
class User_model extends CI_Model {

    // Fetch all users
    public function get_all() {
        return $this->db->get('users')->result_array();
    }

    // Insert new user
    public function insert($data) {
        return $this->db->insert('users', $data);
    }

    // Get single user by ID
    public function get_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }

    // Update user
    public function update($id, $data) {
        return $this->db->where('id', $id)->update('users', $data);
    }

    // Delete user
    public function delete($id) {
        return $this->db->delete('users', ['id' => $id]);
    }
}
