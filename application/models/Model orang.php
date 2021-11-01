<?php

class Model_orang extends CI_Model {

    public function ambildataorang()
    $this->load->database();

    $hasil = $this->db->query("SELECT* FROM orang");

    return $hasil->result<>;


}



?>