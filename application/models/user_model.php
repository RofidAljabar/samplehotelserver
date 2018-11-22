<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class user_model extends CI_Model {


		public function get_userlogin($data){
			$username = $data['username'];
			$password = md5($data['password']);

			//$hash_password = md5($password);

			$query = $this->db->query("SELECT email, password, role, full_name
										FROM hotel_user
										WHERE email ='$username'
										AND password ='$password'
										");
			return $query->row();

		}



	}
?>
