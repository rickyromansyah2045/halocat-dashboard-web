<?php 

defined('BASEPATH') OR exit('No direct script access allowed');



class UserModel extends CI_Model {



  	public function __construct()

    {

            parent::__construct();

            // Your own constructor code

    }

    private $User = 'users';

    public function DoktersList() 

	{  

 		$this->db->select('id,name');

		$this->db->from($this->User);

		$this->db->where("role","dokter");

		$this->db->where("deleted_at IS NULL");

   		$query = $this->db->get();

 		$r=$query->result_array();

		return $r;

   	}

	   public function ChatUsertoDokter()

	   {  
   
			$this->db->select('sender_id');
   
		   $this->db->from("chat");
   
		   $this->db->where("receiver_id",$this->session->userdata('id'));
   
		   $this->db->group_by('sender_id');
   
		   $query = $this->db->get();
		   $res = $query->result_array();

		   return $res;
   
		}

    public function UserList($id) 

    {  
        $this->db->select('id,name');

        $this->db->from($this->User);

        $this->db->where_in("id",$id);

        $query = $this->db->get();

        $r=$query->result_array();

        return $r;

    }

    public function GetUserData()

	{  

 		$this->db->select('*');

		$this->db->from($this->User);

		$this->db->where("id",$this->session->userdata('id'));

		$this->db->limit(1);

  		$query = $this->db->get();

 		if ($query) {

			 return $query->row_array();

		 } else {

			 return false;

		 }

   	}

	   public function GetName($id)

	   {  
   
			$this->db->select('id,name');
   
		   $this->db->from($this->User);
   
		   $this->db->where("id",$id);
   
		   $this->db->limit(1);
   
			 $query = $this->db->get();
   
		   $res = $query->row_array();
   
			return $res['name'];
   
   
		}

		public function PictureUrlById($id)

		{  

			$this->db->select('id,picture_url');

			$this->db->from($this->User);

			$this->db->where("id",$id);

			$this->db->limit(1);

			$query = $this->db->get();

			$res = $query->row_array();

			if(!empty($res['picture_url'])){

				return base_url('uploads/profiles/'.$res['picture_url']);
	
			}else{

				return base_url("assets/img/avatar.svg");
			}
		}

		public function PictureUrl()

	{  

 		$this->db->select('id,picture_url');

		$this->db->from($this->User);

		$this->db->where("id",$this->session->userdata('id'));

		$this->db->limit(1);

  		$query = $this->db->get();

		$res = $query->row_array();

		if(!empty($res['picture_url'])){

			return base_url('uploads/profiles/'.$res['picture_url']);

		}else{

			return base_url("assets/img/avatar.svg");

		}

   	}

}
