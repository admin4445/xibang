<?php
class Contact_model extends CI_model
{
    //前台渲染数据
    public function get_info()
    {
        $info = $this->db->get('contact')->row_array();
        return $info;
    }

    public function get_list($limit,$offset)
    {
        $info = $this->db->limit($limit,$offset)->get('contact')->result_array();
        return $info;
    }
    public function get_add($data)
    {
       $res = $this->db->insert('contact',$data);
       return $res;
    }
    public function find_info($id)
    {
        $info = $this->db->where('contact_id',$id)->get('contact')->row_array();
        return $info;

    }
    public function edit_info($id,$data)
    {
        $res = $this->db->where('contact_id',$id)->update('contact',$data);
        return $res;

    }
    public function del_info($id)
    {
       $res = $this->db->where('contact_id',$id)->delete('contact');
       return $res;
    }

}