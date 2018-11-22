<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Restserver\Libraries\REST_Controller;

	require APPPATH . '/libraries/REST_Controller.php';

	class user_controller extends REST_Controller {

		//get all users
		public function users_get(){
			$r = $this->user_model->get_user();
			$this->response($r, 200);
		}

		//login method
		public function login_post(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array('username'=>$username, 'password'=>$password);

			$r = $this->user_model->get_userlogin($data);

			if ($r) {
				$data = array(
					'login'=> array(
						'status'=>'success',
						'message'=>'user found',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
								
			} else {
				$data = array(
					'login'=> array(
						'status'=>'error',
						'message'=>'user not found',
						'data'=>'null'
					));

				$result = json_encode($data);
				echo $result;
			}

		}

		//insert users
		public function insert_patient_post(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$nama = $this->input->post('nama');
			$ruang_user = $this->input->post('room');
			$token = $this->input->post('token');
			//$waktu = $this->input->post('waktu');

			$data = array(
				'username'=>$username,
				'password'=>$password,
				'nama'=>$nama,
				'ruang_user'=>$ruang_user,
				'token'=>$token
				//'waktu'=>$waktu
			);

			$r = $this->user_model->insert_patient($data);

			$this->response($r, 200);
		}

		//update user
// public function update_user_post(){
// $id = $this->input->post('id');
// $username = $this->input->post('username');
// $nama = $this->input->post('nama');
// $role = $this->input->post('role');
//
// $data = array('id'=>$id, 'username'=>$username, 'nama'=>$nama, 'role'=>$role);
// $r = $this->user_model->update_user($data);
//
// $this->response($r, 200);
// }
//
// 		//update user2
// 		public function update_user_kedua_post(){
// 			$id = $this->input->post('id');
// 			$username = $this->input->post('username');
// 			$nama = $this->input->post('nama');
// 			$role = $this->input->post('role');
// 			$password = $this->input->post('password');
//
// 			$data = array('id'=>$id, 'username'=>$username, 'nama'=>$nama, 'role'=>$role, 'password'=>$password);
// 			$r = $this->user_model->update_user_kedua($data);
//
// 			$this->response($r, 200);
// 		}
//
// 		//delete user
// public function delete_user_post(){
// $id = $this->input->post('id');
//
// $r = $this->user_model->delete_user($id);
// $this->response($r, 200);
// }
//
// 		public function update_role_post(){
// 			$id = $this->input->post('id');
// 			$username = $this->input->post('username');
// 			$nama = $this->input->post('nama');
// 			$role = $this->input->post('role');
//
// 			$data = array('id'=>$id, 'username'=>$username, 'nama'=>$nama, 'role'=>$role);
// 			$r = $this->user_model->update_role($data);
//
// 			$this->response($r, 200);
// 		}
//
// 		public function update_role_kedua_post(){
// 			$id = $this->input->post('id');
// 			$username = $this->input->post('username');
// 			$nama = $this->input->post('nama');
// 			$role = $this->input->post('role');
// 			$password = $this->input->post('password');
//
// 			$data = array('id'=>$id, 'username'=>$username, 'nama'=>$nama, 'role'=>$role, 'password'=>$password);
// 			$r = $this->user_model->update_role_kedua($data);
//
// 			$this->response($r, 200);
// 		}
//
// 		public function penyalur_get(){
// 			$r = $this->user_model->get_penyalur();
// 			$this->response($r, 200);
// 		}
//
//
//

	}

?>
