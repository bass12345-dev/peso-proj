 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class GetModel extends CI_Model {

        public function __construct()
    {
       
    }


    public function get($table,$where){
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->result_array();

    }

      public function getALL($table,$order_by,$order_key){

            $this->db->from($table);
            $this->db->order_by($order_key,$order_by);
            return $this->db->get()->result_array();
      }



   } 
 ?>