<?php
class Team_model extends CI_model
{
    public function get_info($limit,$offset)
    {
        $info = $this->db->limit($limit,$offset)->get('team')->result_array();
        return $info;
    }
    public function get_list($limit,$offset)
    {
        $info = $this->db->limit($limit,$offset)->get('team')->result_array();
        return $info;
    }
    public function get_add($data)
    {
       $res = $this->db->insert('team',$data);
       return $res;
    }
    public function find_info($id)
    {
        $info = $this->db->where('team_id',$id)->get('team')->row_array();
        return $info;

    }
    public function edit_info($id,$data)
    {
        $res = $this->db->where('team_id',$id)->update('team',$data);
        return $res;

    }
    public function del_info($id)
    {
       $res = $this->db->where('team_id',$id)->delete('team');
       return $res;
    }
}