<?php

class T_admin extends CI_Model {

  var $table_name  = 'admin';
  var $primary_key  = 'id';
  var $record_count;

  function __construct()
  {
        // Call the Model constructor
    parent::__construct();
  }

  function getLast()
  {
    $query = $this->db->get($this->table_name, 10);
    return $query->result();
  }

    function getAll()
  {
    $query = $this->db->get($this->table_name);
    return ($query->num_rows() > 0)  ? $query->result() : FALSE;
  }

  function getPage($id)
  {
    $this->db->where($this->primary_key , $id);
    $query = $this->db->get($this->table_name);
    return ($query->num_rows() > 0)  ? $query->result() : FALSE;
  }

  function getProductActive()
  {
    $this->db->where('status' , '2');
    $query = $this->db->get($this->table_name);
    return ($query->num_rows() > 0)  ? $query->result() : FALSE;
  }


  function add($data) {
    $this->db->insert($this->table_name, $data);
    return $this->db->insert_id();
  }

  function update($data,$id) {
    $this->db->where($this->primary_key, $id);
    $this->db->update($this->table_name, $data);
    return $this->db->insert_id();
  }

  function delete($id) {
    $this->db->where($this->primary_key, $id);
    $this->db->insert($this->table_name);
  }


  function fetch_record($limit, $start, $index)
  {
    $this->db->limit($limit, $start);
    $this->db->order_by($this->primary_key, "DESC");
    if ($index == "true"){
     $this->db->where('startDate >=',date("Y-m-d H:i:s"));
   }
   $query = $this->db->get($this->table_name);
   return ($query->num_rows() > 0)  ? $query->result() : FALSE;
 }

 function record_count()
 {
  return $this->db->count_all($this->table_name);
}

function getByName($user)
    {
      $this->db->where('username',$user);
      $query = $this->db->get($this->table_name);
      return ($query->num_rows() > 0)  ? $query->result_array() : FALSE;
  }

}



?>
