<?php
class Abolib_model extends CI_model
{
    

    //查询类型
    public function type()
    {
          $info = $this->db->get('about')->result_array();
          return $info;
    }

    public function get_list($limit,$offset)
    {
        $info = $this->db->limit($limit,$offset)->get('abo_libimg')->result_array();
        return $info;
    }
    public function get_add($data)
    {
       $res = $this->db->insert('abo_libimg',$data);
       return $res;
    }
    public function find_info($id)
    {
        $info = $this->db->where('abo_libimg_id',$id)->get('abo_libimg')->row_array();
        return $info;

    }
    public function edit_info($id,$data)
    {
        $res = $this->db->where('abo_libimg_id',$id)->update('abo_libimg',$data);
        return $res;

    }
    public function del_info($id)
    {
       $res = $this->db->where('abo_libimg_id',$id)->delete('abo_libimg');
       return $res;
    }

    

}