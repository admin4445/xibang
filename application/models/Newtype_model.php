<?php
class Newtype_model extends CI_model
{
    
    public function get_list($limit,$offset)
    {
        $info = $this->db->limit($limit,$offset)->get('news_type')->result_array();
        return $info;
    }
    public function get_add($data)
    {
       $res = $this->db->insert('news_type',$data);
       return $res;
    }
    public function find_info($id)
    {
        $info = $this->db->where('news_type_id',$id)->get('news_type')->row_array();
        return $info;

    }
    public function edit_info($id,$data)
    {
        $res = $this->db->where('news_type_id',$id)->update('news_type',$data);
        return $res;

    }
    public function del_info($id)
    {
       $res = $this->db->where('news_type_id',$id)->delete('news_type');
       return $res;
    }

    

}