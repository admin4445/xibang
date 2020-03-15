<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conf_model  extends CI_model
{

     public function get_list($limit,$offset)
     {
         $info  = $this->db->limit($limit,$offset)->get('conf')->result_array();
         return $info;
     }
     public function add_info($data)
     {
        $res = $this->db->insert('conf',$data);
        return $res;
     }
     public function find_info($id)
     {
         $info = $this->db->where('conf_id',$id)->get('conf')->row_array();
         return $info;

     }
     public function edit_info($id,$data)
     {
         $res = $this->db->where('conf_id',$id)->update('conf',$data);
         return $res;

     }
     public function del_info($id)
     {
        $res = $this->db->where('conf_id',$id)->delete('conf');
        return $res;
     }
}