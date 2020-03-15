<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Links_model extends CI_model
{

     public function get_list($limit,$offset)
     {
         $info  = $this->db->limit($limit,$offset)->get('link')->result_array();
         return $info;
     }
     public function add_info($data)
     {
        $res = $this->db->insert('link',$data);
        return $res;
     }
     public function find_info($id)
     {
         $info = $this->db->where('link_id',$id)->get('link')->row_array();
         return $info;

     }
     public function edit_info($id,$data)
     {
         $res = $this->db->where('link_id',$id)->update('link',$data);
         return $res;

     }
     public function del_info($id)
     {
        $res = $this->db->where('link_id',$id)->delete('link');
        return $res;
     }
}