<?php
class Company_model extends CI_model
{
    public function get_info()
    {
        $info = $this->db->get('about')->result_array();
        return $info;
    }

}