<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Layout/header.php');
		$this->load->model('LoginModel');
		$table =$this->LoginModel->Selectall();

		$data = array(
				'titulo'=>'Usuários Cadastrados',
				'table'=>$table
		);

		                                  
		$this->load->view('UsersListar.php',$data);
	}

	


	public function store(){

		$this->load->model('LoginModel');

	
		$this->LoginModel->id = $this->input->post("id");
		$this->LoginModel->username = $this->input->post("username");

		if($this->input->post("password") != null){
			$this->LoginModel->password = md5($this->input->post("password"));
		}

		//echo "<pre>"; var_dump($this->LoginModel); echo "</pre>";die;
		$this->LoginModel->save();
		
		

		redirect('LoginController');
    }

    public function create(){
        $this->load->view('Cadastrar');
    }

    public function edit($id){

		
		$user = $this->db->select('*')
						 ->from('Users')
						 ->where('id', $id)				
						 ->get()
						 ->result();
    //echo "<pre>"; var_dump($user); echo "</pre>";die;
	
		$data = ["user" => $user[0]];

        $this->load->view('Alterar', $data);
    }

    public function destroy($id){
		
		$this->db->where('id', $id);
		/*$user = $this->db->select('*')
						 ->from('Users')
						 ->where('id', $id)				
						 ->get()
						 ->result();
		*/
		
		$this->db->delete('Users');
		redirect('LoginController');			
		
    }

	
 
}

