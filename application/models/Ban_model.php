<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ban_model extends CI_model
{

     public function get_list($limit,$offset)
     {
         $baninfo  = $this->db->limit($limit,$offset)->get('banner')->result_array();
         return $baninfo;
     }
     public function get_add($data)
     {
        $res = $this->db->insert('banner',$data);
        return $res;
     }
     public function find_info($id)
     {
         $info = $this->db->where('ban_id',$id)->get('banner')->row_array();
         return $info;

     }
     public function edit_info($id,$data)
     {
         $res = $this->db->where('ban_id',$id)->update('banner',$data);
         return $res;

     }
     public function del_info($id)
     {
        $res = $this->db->where('ban_id',$id)->delete('banner');
        return $res;
     }
}