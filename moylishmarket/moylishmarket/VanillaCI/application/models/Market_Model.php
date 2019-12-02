<?php
class Market_Model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function get_all_games() {
        $this->db->select("customerNumber,customerName");
        $this->db->from('customers');
        $query = $this->db->get();
        return $query->result();
    }
}
?>
