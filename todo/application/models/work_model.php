<?php 

class Work_model extends CI_Model
{

  function __construct()
  {

  	parent::__construct();
  }
   
   public function insert($table,$data)

   {

 		$query = $this->db->insert($table,$data);
 		
    if($query)
 		 {
 			return true;
 		 }
     else
     {
     return false;
     }
    }
   public function DBdelete($table,$Wherecondition)
    {
      $this->db->where($Wherecondition);
      $query = $this->db->delete($table);
      return $query;
    }
   public function DBSelect($table)
   {
     //$this->db->select('*')->from($table);
     $this->db->order_by("id","desc");
     $Query = $this->db->get($table);
     return $Query->result();
   }

   public function DBSelectSingleRow($table,$where)
   {
    $this->db->where($where);
    //$this->db->select('*')->from($table);
    $query = $this->db->get($table);
    return $query->row();
   }

   public function DBupdate($tablename,$Data,$Condition)
   {
    $this->db->where($Condition);
    $Query = $this->db->update($tablename,$Data);
    return $Query;
   }

}


?>