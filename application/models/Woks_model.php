<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Woks_model extends CI_model
{

     public function get_list($limit,$offset)
     {
         $worksinfo  = $this->db->limit($limit,$offset)->get('works')->result_array();
         foreach($worksinfo as $key=>$item){
             $team= $this->db->select('team_name')->where('team_id',$item['works_author'])->get('team')->row_array();
             $worksinfo[$key]['works_author']=$team['team_name'];
         }
        
         return $worksinfo;
     }
     public function get_add($data)
     {
        $res = $this->db->insert('works',$data);
        return $res;
     }
     public function find_info($id)
     {
         $info = $this->db->where('works_id',$id)->get('works')->row_array();
         return $info;

     }
     public function edit_info($id,$data)
     {
         $res = $this->db->where('works_id',$id)->update('works',$data);
         return $res;

     }
     public function del_info($id)
     {
        $res = $this->db->where('works_id',$id)->delete('works');
        return $res;
     }
}