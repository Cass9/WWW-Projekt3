<?php
    class Uzytkownicy_model extends CI_Model {
        public function zwroc_uzytkownikow()
	    {
            $this->load->database();
            $query = $this->db->query("SELECT * FROM uzytkownicy");
            $query->result_array();
            return $query->result_array();
	    }
    }
?>