<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_model{

    public $id;
    public $token; 
    public $username;
    public $password;

    public function Selectall(){

        $return = $this->db->get('Users');  
        return $return->result(); /*return to controller*/ 
    }
    

    public function save(){
      
        if($this->id == null)
        {
            
            $this->token = md5(time());
            $this->db->insert('Users',$this);
        }
        else
        {
           
            $this->db->replace('Users',$this);
        }
         
    }

    public function Selecionar($where){

        $retorno = $this->db->get_where('Users', $where); 
        return $retorno->result();

    }

    public function Salvaralteracao($where, $dados){

       
        $this->db->replace('Users'.$dados.$where);
       
    }

   



}