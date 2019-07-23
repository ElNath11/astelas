<?php

class T_page_penanganan extends CI_Model {

  var $table_name  = 'page_penanganan';
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

  function getPage($id)
  {
    $this->db->where($this->primary_key , $id);
    $query = $this->db->get($this->table_name);
    return ($query->num_rows() > 0)  ? $query->result() : FALSE;
  }

  function record_count()
  {
    $this->db->where('product_flag' , '2');
    return $this->db->count_all_results($this->table_name);
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


  function fetch_record($limit, $start, $id)
  {
    $this->db->where('product_flag' , '2');
    $this->db->where('product_category_id' , $id);
    // $this->db->where($this->primary_key, $id);
    $this->db->limit($limit, $start);
    $this->db->order_by($this->primary_key, "ASC");

    $query = $this->db->get($this->table_name);
    return ($query->num_rows() > 0)  ? $query->result() : FALSE;
  }



}



?>
