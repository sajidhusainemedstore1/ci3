<?php
class User_model extends CI_Model {

    public function get_all() {
        return $this->db->get('users')->result_array();
    }

    public function insert($data) {
        return $this->db->insert('users', $data);
    }

    public function get_by_id($id) {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }

    public function update($id, $data) {
        return $this->db->where('id', $id)->update('users', $data);
    }

    public function delete($id) {
        return $this->db->delete('users', ['id' => $id]);
    }
}
