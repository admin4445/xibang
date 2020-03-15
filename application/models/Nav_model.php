<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nav_model extends CI_model
{

     public function get_list($limit,$offset)
     {
         $navinfo  = $this->db->limit($limit,$offset)->get('nav')->result_array();
         return $navinfo;
     }
     public function add_info($data)
     {
        $res = $this->db->insert('nav',$data);
        return $res;
     }
     public function find_info($id)
     {
         $info = $this->db->where('nav_id',$id)->get('nav')->row_array();
         return $info;

     }
     public function edit_info($id,$data)
     {
         $res = $this->db->where('nav_id',$id)->update('nav',$data);
         return $res;

     }
     public function del_info($id)
     {
        $res = $this->db->where('nav_id',$id)->delete('nav');
        return $res;
     }
}