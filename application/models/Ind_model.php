<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ind_model extends CI_model
{

     public function get_list()
     {
         $baninfo  = $this->db->get('industry')->result_array();
         return $baninfo;
     }
     public function get_add($data)
     {
        $res = $this->db->insert('industry',$data);
        return $res;
     }
     public function find_info($id)
     {
         $info = $this->db->where('industry_id',$id)->get('industry')->row_array();
         return $info;

     }
     public function edit_info($id,$data)
     {
         $res = $this->db->where('industry_id',$id)->update('industry',$data);
         return $res;

     }
     public function del_info($id)
     {
        $res = $this->db->where('industry_id',$id)->delete('industry');
        return $res;
     }
}