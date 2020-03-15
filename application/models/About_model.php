<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_model
{

     public function get_list($limit,$offset)
     {
         $baninfo  = $this->db->limit($limit,$offset)->get('about')->result_array();
         return $baninfo;
     }
     public function get_add($data)
     {
        $res = $this->db->insert('about',$data);
        return $res;
     }
     public function find_info($id)
     {
         $info = $this->db->where('abo_id',$id)->get('about')->row_array();
         return $info;

     }
     public function edit_info($id,$data)
     {
         $res = $this->db->where('abo_id',$id)->update('about',$data);
         return $res;

     }
     public function del_info($id)
     {
        $res = $this->db->where('abo_id',$id)->delete('about');
        return $res;
     }
}