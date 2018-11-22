<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	use Restserver\Libraries\REST_Controller;

	require APPPATH . '/libraries/REST_Controller.php';

	class jobs_controller extends REST_Controller {



		// Start Hotel Information

		public function addHotelInformation_post(){
			$company_name 		= $this->input->post('company_name');
			$email 		  		= $this->input->post('email');
			$website 	  		= $this->input->post('website');
			$phone 	 	  		= $this->input->post('phone');
			$fax 		  		= $this->input->post('fax');
			$address 	  		= $this->input->post('address');
			$city 		  		= $this->input->post('city');
			$zip_code 	  		= $this->input->post('zip_code');
			$province 	  		= $this->input->post('province');
			$country 	  		= $this->input->post('country');

			$data 				= array(
				'company_name' 	=> $company_name,
				'email'			=> $email,
	      		'website' 		=> $website,
	      		'phone' 		=> $phone,
	      		'fax' 			=> $fax,
	      		'address'		=> $address,
	      		'city'			=> $city,
	      		'zip_code'		=> $zip_code,
	      		'province'		=> $province,
	      		'country'		=> $country
		);

		$hi = $this->jobs_model->addHotelInformation($data);
		echo $hi;
	}

		public function hapusHotelInformation_post(){
		$id = $this->input->post('id_hotel');
		$hi = $this->jobs_model->hapusHotelInformation($id);
		echo $hi;
	}

	public function hapusGuest_post(){
		$id = $this->input->post('id_regist');
		$guest = $this->jobs_model->hapusGuest($id);
		echo $guest;
	}

	// Inputan Hotel (City, Province, Country)
	public function hapusInputCityHotel_post(){
		$id = $this->input->post('id_city');
		$ic = $this->jobs_model->hapusInputCityHotel($id);
		echo $ic;
	}

	public function ubahCityHotel_post(){
		$id = $this->input->post('id_city');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->ubahCityHotel($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function updateCityHotel_post(){
		$id = $this->input->post('id_city');
		$name_city = $this->input->post('name_city');

		$data = array(
			'id_city_edit' => $id,
			'name_city_edit' => $name_city
		);

		$r = $this->jobs_model->updateCityHotel($data);
		echo json_encode($r);
	}

	public function ubahProvinceHotel_post(){
		$id = $this->input->post('id_province');
		$iph = $this->jobs_model->ubahProvinceHotel($id);
		echo json_encode($iph);
	}

	public function hapusProvinceHotel_post(){
		$id = $this->input->post('id_province');
		$iph = $this->jobs_model->hapusProvinceHotel($id);
		echo $iph;
	}

	public function hapusCountryHotel_post(){
		$id = $this->input->post('id_country');
		$icohh = $this->jobs_model->hapusCountryHotel($id);
		echo $icohh;
	}

	public function ubahCountryHotel_post(){
		$id = $this->input->post('id_country');
		$icohh = $this->jobs_model->ubahCountryHotel($id);
		echo json_encode($icohh);
	}

	public function updateCountryHotel_post(){
		$id = $this->input->post('id_country');
		$name_country = $this->input->post('name_country');

		$data = array(
			'id_country' => $id,
			'name_country' => $name_country
		);

		$user = $this->jobs_model->updateCountryHotel($data);
		echo json_encode($user);
	}

	public function updateUserHotel_post(){
		$id 		 = $this->input->post('id_user');
		$role 		 = $this->input->post('role');
		$user_photo  = $this->input->post('user_photo');
		$full_name 	 = $this->input->post('full_name');
		$email 		 = $this->input->post('email');
		$mobile_phone = $this->input->post('mobile_phone');
		$password 	 = $this->input->post('password');
		$re_password = $this->input->post('re_password');

		$data = array(
			'id_user' 	  => $id,
			'role'        => $role,
			'user_photo'  => $user_photo,
			'full_name'   => $full_name,
			'email' 	  => $email,
			'mobile_phone' => $mobile_phone,
			'password' 	  => $password,
			're_password' => $re_password
		);

		$user = $this->jobs_model->updateUserHotel($data);
		echo json_encode($user);
	}

	// End inputan Hotel (City, Province, Country)

	public function hapusUser_post(){
		$id = $this->input->post('id_user');
		$user = $this->jobs_model->hapusUser($id);
		echo $user;
	}

	public function hapusSegment_post(){
		$id = $this->input->post('id_segment');
		$segment = $this->jobs_model->hapusSegment($id);
		echo $segment;
	}

	public function hapusPromo_post(){
		$id = $this->input->post('id_promo');
		$promo = $this->jobs_model->hapusPromo($id);
		echo $promo;
	}

	public function hapusGuestType_post(){
		$id = $this->input->post('id_guest_type');
		$guest_type = $this->jobs_model->hapusGuestType($id);
		echo $guest_type;
	}

	public function hapusDetailGuestType_post(){
		$id = $this->input->post('id_detail_guest_type');
		$guest_type = $this->jobs_model->hapusDetailGuestType($id);
		echo $guest_type;
	}

	public function updateHotelInformation_post(){
		$id 		  = $this->input->post('id_hotel');
		$company_name = $this->input->post('company_name');
		$email 		  = $this->input->post('email');
		$website 	  = $this->input->post('website');
		$phone 	      = $this->input->post('phone');
		$fax 		  = $this->input->post('fax');
		$address 	  = $this->input->post('address');
		$city 		  = $this->input->post('cityhi_modal');
		$zip_code 	  = $this->input->post('zip_code');
		$province 	  = $this->input->post('provincehi_modal');
		$country 	  = $this->input->post('countryhi_modal');

		$data = array(
			'id_hotel_edit' 	=> $id,
			'company_name_edit' => $company_name,
			'email_edit' 		=> $email,
			'website_edit' 		=> $website,
			'phone_edit' 		=> $phone,
			'fax_edit' 			=> $fax,
			'address_edit' 		=> $address,
			'city_edit' 		=> $city,
			'zip_code_edit' 	=> $zip_code,
			'province_edit' 	=> $province,
			'country_edit' 		=> $country
		);

		$edithotel = $this->jobs_model->updateHotelInformation($data);
		echo json_encode($edithotel);
	}

	public function editHotelInformation_post(){
		$id_hotel = $this->input->post('id_hotel');
		$editHotel = $this->jobs_model->editHotelInformation($id_hotel);
		echo json_encode($editHotel);
	}

	public function editSegment_post(){
		$id = $this->input->post('id_segment');
		$editSegment = $this->jobs_model->editSegment($id);
		echo json_encode($editSegment);
	}

	public function editGuestType_post(){
		$id = $this->input->post('id_guest_type');
		$editGuestType = $this->jobs_model->editGuestType($id);
		echo json_encode($editGuestType);
	}

	public function editDetailGuestType_post(){
		$id = $this->input->post('id_detail_guest_type');
		$editDetailGuestType = $this->jobs_model->editDetailGuestType($id);
		echo json_encode($editDetailGuestType);
	}

	public function editRegist_post(){
		$id_regist 	= $this->input->post('id_regist');
		$editRegist = $this->jobs_model->editRegist($id_regist);
		echo json_encode($editRegist);
	}

	public function ubahUserHotel_post(){
		$id = $this->input->post('id_user');
		$user = $this->jobs_model->ubahUserHotel($id);
		echo json_encode($user);
	}

	public function getinputHotel_get(){
		$ic = $this->jobs_model->getinputHotel();
		echo json_encode($ic);
	}
	
	public function getTax_get(){
		$tax = $this->jobs_model->getTax();
		echo json_encode($tax);
	}

	public function getInputProvinceHotel_get(){
		$iph = $this->jobs_model->getInputProvinceHotel();
		echo json_encode($iph);
	}

	public function getInputCountryHotel_get(){
		$icohh = $this->jobs_model->getCountryHotel();
		echo json_encode($icohh);
	}

	public function addinputCityHotel_post(){
		$name_city = $this->input->post('name_city');

	    $data = array(
	    	'name_city' => $name_city
	    );

	    $ic = $this->jobs_model->addinputCityHotel($data);
	    echo $ic;
	}

	public function addProvinceHotel_post(){
		$name_province = $this->input->post('name_province');

	    $data = array(
	    	'name_province' => $name_province
	    );

	    $iph = $this->jobs_model->addProvinceHotel($data);
	    echo $iph;
	}

	public function updateProvinceHotel_post(){
		$id = $this->input->post('id_province');
		$name_province = $this->input->post('name_province');

		$data = array(
			'id_province' => $id,
			'name_province' => $name_province
		);

		$iph = $this->jobs_model->updateProvinceHotel($data);
		echo json_encode($iph);
	}


	public function addCountryHotel_post(){
		$name_country = $this->input->post('name_country');

	    $data = array(
	    	'name_country' => $name_country
	    );

	    $icohh = $this->jobs_model->addCountryHotel($data);
	    echo $icohh;
	}

	public function addNewGroup_post(){
		$name_group = $this->input->post('name_group');

	    $data = array(
	    	'name_group' => $name_group
	    );

	    $newgroup = $this->jobs_model->addNewGroup($data);
	    echo $newgroup;
	}

	public function addNewSegmentation_post(){
		// $name_segment = $this->input->post('name_segment');
		$segment = $this->input->post('segment');


	    $data = array(
	    	// 'name_segment' => $name_segment,
	    	'segment' 		=> $segment

	    );

	    $newgroup = $this->jobs_model->addNewSegmentation($data);
	    echo $newgroup;
	}

	public function addNewRole_post(){
		$name_role = $this->input->post('name_role');

	    $data = array(
	    	'name_role' => $name_role
	    );

	    $newrole = $this->jobs_model->addNewRole($data);
	    echo $newrole;
	}

	public function updateNewRole_post(){
		$id = $this->input->post('id_role');
		$name_role = $this->input->post('name_role');

		$data = array(
			'id_role_edit' => $id,
			'name_role_edit' => $name_role
		);

		$newrole = $this->jobs_model->updateNewRole($data);
		echo json_encode($newrole);
	}

	public function updateMasterAgent_post(){
		$id = $this->input->post('id_agent');
		$name_agent = $this->input->post('name_agent');

		$data = array(
			'id_agent' => $id,
			'name_agent' => $name_agent
		);

		$new_agent = $this->jobs_model->updateMasterAgent($data);
		echo json_encode($new_agent);
	}

	public function addNewAgent_post(){
		$name_agent = $this->input->post('name_agent');
	    $data = array(
	    	'name_agent' => $name_agent
	    );
	    $newagent = $this->jobs_model->addNewAgent($data);
	    echo $newagent;
	}

	public function hapusMasterAgent_post(){
		$id = $this->input->post('id_agent');
		$new_agent = $this->jobs_model->hapusMasterAgent($id);
		echo $new_agent;
	}

	public function ubahMasterAgent_post(){
		$id = $this->input->post('id_agent');
		$new_agent = $this->jobs_model->ubahMasterAgent($id);
		echo json_encode($new_agent); 
	}

	public function get_events_calendar_get(){
		// // $id = $this->input->post('id_calendar');
		// $id_regist = $this->input->get("id_regist");
		// $adf_date = $this->input->get("adf_date");
  //       $adt_date   = $this->input->get("adt_date");

  //       $data = array(
  //       		'id_regist'=>$id_regist,
		// 		'adf_date'=>$adf_date,
		// 		'adt_date'=>$adt_date
		// 	);

		$event = $this->jobs_model->get_events_calendar();
		echo json_encode($event); 
	}

	public function ubahMasterGroup_post(){
		$id = $this->input->post('id_group');
		$new_group = $this->jobs_model->ubahMasterGroup($id);
		echo json_encode($new_group); 
	}

	public function hapusMasterGroup_post(){
		$id = $this->input->post('id_group');
		$new_group = $this->jobs_model->hapusMasterGroup($id);
		echo $new_group;
	}


	// Start User Management
	public function addUser_post(){
		$role = $this->input->post('role');
		$user_photo = $this->input->post('user_photo');
		$full_name = $this->input->post('full_name');
		$email = $this->input->post('email');
		$mobile_phone = $this->input->post('mobile_phone');
		$password = $this->input->post('password');
		$re_password = $this->input->post('re_password');

		$data = array(
			'role' 		  => $role,
	        'user_photo'  => $user_photo,
	        'full_name'   => $full_name,
	        'email' 	  => $email,
	        'mobile_phone' => $mobile_phone,
	        'password' 	  => $password,
	        're_password' => $re_password				
		);

		$user = $this->jobs_model->addUser($data);
		echo $user;
	}

	// End User Managemnet

	public function getUser_get(){
		$user = $this->jobs_model->getUser();
		echo json_encode($user);
	}

	public function getCityHotel_get(){
		$ch = $this->jobs_model->getCityHotel();
		echo json_encode($ch);
	}

	public function getProvinceHotel_get(){
		$ph = $this->jobs_model->getProvinceHotel();
		echo json_encode($ph);
	}

	public function getCountryHotel_get(){
		$coh = $this->jobs_model->getCountryHotel();
		echo json_encode($coh);
	}

	public function getCountryViewReservation_get(){
		$gcvr = $this->jobs_model->getCountryViewReservation();
		echo json_encode($gcvr);
	}

	public function getProvinceViewReservation_get(){
		$gpvr = $this->jobs_model->getProvinceViewReservation();
		echo json_encode($gpvr);
	}

	public function getCityViewReservation_get(){
		$gpvr = $this->jobs_model->getCityViewReservation();
		echo json_encode($gpvr);
	}

	public function getStatusViewReservation_get(){
		$status = $this->jobs_model->getStatusViewReservation();
		echo json_encode($status);
	}

	public function getPayMethodViewReservation_get(){
		$pay_method = $this->jobs_model->getPayMethodViewReservation();
		echo json_encode($pay_method);
	}

	public function getMasterStatus_get(){
		$pay_method = $this->jobs_model->getMasterStatus();
		echo json_encode($pay_method);
	}

	public function getStatPayment_get(){
		$stat_payment = $this->jobs_model->getStatPayment();
		echo json_encode($stat_payment);
	}

	public function getCityGuestModal_get(){
		$cg = $this->jobs_model->getCityGuestModal();
		echo json_encode($cg);
	}

	public function getProvinceGuestModal_get(){
		$pg = $this->jobs_model->getProvinceGuestModal();
		echo json_encode($pg);
	}

	public function getCountryGuestModal_get(){
		$cog = $this->jobs_model->getCountryGuestModal();
		echo json_encode($cog);
	}

	public function getStatusGuestModal_get(){
		$stts = $this->jobs_model->getStatusGuestModal();
		echo json_encode($stts);
	}

	public function getStatus_get(){
		$stts = $this->jobs_model->getStatus();
		echo json_encode($stts);
	}


	public function getCurrencyGuestModal_get(){
		$crrncy = $this->jobs_model->getCurrencyGuestModal();
		echo json_encode($crrncy);
	}

	public function getAgentGuestModal_get(){
		$agnt = $this->jobs_model->getAgentGuestModal();
		echo json_encode($agnt);
	}

	public function getRTypeGuestModal_get(){
		$rtypeguest = $this->jobs_model->getRTypeGuestModal();
		echo json_encode($rtypeguest);
	}

	public function getCountryHotelModal_get(){
		$cohm = $this->jobs_model->getCountryHotelModal();
		echo json_encode($cohm);
	}


	public function getHotelInformation_get(){
		$hi = $this->jobs_model->getHotelInformation();
		echo json_encode($hi);
	}

	public function getHotelInformationPDF_get(){
		$hi = $this->jobs_model->getHotelInformationPDF();
		echo json_encode($hi);
	}

	public function editGuest_post(){
		$id = $this->input->post('id_regist');
		$editGuest = $this->jobs_model->editGuest($id);
		echo json_encode($editGuest); 
	}

	public function getUserHotel_get(){
		$user = $this->jobs_model->getUserHotel();
		echo json_encode($user);
	}

	public function getRoleHotel_get(){
		$role = $this->jobs_model->getRoleHotel();
		echo json_encode($role);
	}

	public function getNewRole_get(){
		$newrole = $this->jobs_model->getNewRole();
		echo json_encode($newrole);
	}

	public function hapusNewRole_post(){
		$id = $this->input->post('id_role');
		$newrole = $this->jobs_model->hapusNewRole($id);
		echo $newrole;
	}

	public function ubahNewRole_post(){
		$id = $this->input->post('id_role');
		$newrole = $this->jobs_model->ubahNewRole($id);
		echo json_encode($newrole); 
	}

	public function geteditRole_post(){
		$id = $this->input->post('id_role');
		$editRole = $this->jobs_model->geteditRole($id);
		echo json_encode($editRole); 
	}

	public function getroleProfile_get(){
		$roleprofile = $this->jobs_model->getroleProfile();
		echo json_encode($roleprofile);
	}

	public function getviewProfile_get(){
		$vp = $this->jobs_model->getviewProfile();
		echo json_encode($vp);
	}

	public function getDetailNew_post(){
		$id_detail_guest_type = $this->input->post('id_detail_guest_type');
		$detail = $this->jobs_model->getDetailNew($id_detail_guest_type);
		echo json_encode($detail); 
	}

	public function getCityNew_post(){
		$id_city = $this->input->post('id_city');
		$name_city = $this->jobs_model->getCityNew($id_city);
		echo json_encode($name_city); 
	}

	public function getProvinceNew_post(){
		$id_province = $this->input->post('id_province');
		$name_province = $this->jobs_model->getProvinceNew($id_province);
		echo json_encode($name_province); 
	}

	public function getPromo_get(){
		$promo = $this->jobs_model->getPromo();
		echo json_encode($promo);
	}

	public function addPromo_post(){
			$name_promo 		= $this->input->post('name_promo');
			$status_promo 		= $this->input->post('status_promo');
			$start_promo		= $this->input->post('start_promo');
			$end_promo			= $this->input->post('end_promo');
			$code_promo	  		= $this->input->post('code_promo');

			$data 				= array(
				'name_promo' 	=> $name_promo,
				'status_promo'	=> $status_promo,
	      		'start_promo' 	=> $start_promo,
	      		'end_promo' 	=> $end_promo,
	      		'code_promo' 	=> $code_promo
		);

		$promo = $this->jobs_model->addPromo($data);
		echo $promo;
	}

	public function editPromo_post(){
		$id = $this->input->post('id');
		$editPromo = $this->jobs_model->editPromo($id);
		echo json_encode($editPromo);
	}

	public function updatePromo_post(){
		$id 		   = $this->input->post('id_promo_modal');
		$name_promo    = $this->input->post('name_promo_modal');
		$status_promo  = $this->input->post('status_promo_modal');
		$start_promo   = $this->input->post('start_promo_modal');
		$end_promo 	   = $this->input->post('end_promo_modal');
		$code_promo    = $this->input->post('code_promo_modal');

		$data = array(
			'id_promo_modal' 	  => $id,
			'name_promo_modal'    => $name_promo,
			'status_promo_modal'  => $status_promo,
			'start_promo_modal'   => $start_promo,
			'end_promo_modal' 	  => $end_promo,
			'code_promo_modal'    => $code_promo
		);

		$r = $this->jobs_model->updatePromo($data);
		echo json_encode($r);
	}

	public function getCityRegistration_post(){
		$id_city = $this->input->post('id_city');
		$name_city = $this->jobs_model->getCityRegistration($id_city);
		echo json_encode($name_city);
	}

	public function getProvinceRegistration_post(){
		$id_province = $this->input->post('id_province');
		$name_province = $this->jobs_model->getProvinceRegistration($id_province);
		echo json_encode($name_province); 
	}

	public function getCityGuest_post(){
		$id_city = $this->input->post('id_city');
		$name_city = $this->jobs_model->getCityGuest($id_city);
		echo json_encode($name_city);
	}

	public function getProvinceGuest_post(){
		$id_province = $this->input->post('id_province');
		$name_province = $this->jobs_model->getProvinceGuest($id_province);
		echo json_encode($name_province); 
	}

	public function getPriceRoomGuest_post(){
		$id_regist = $this->input->post('id_regist');
		$price_room = $this->jobs_model->getPriceRoomGuest($id_regist);
		echo json_encode($price_room); 
	}

	public function getCityHIModal_post(){
		$id_city = $this->input->post('id_city');
		$name_city = $this->jobs_model->getCityHIModal($id_city);
		echo json_encode($name_city);
	}

	public function getProvinceHIModal_post(){
		$id_province = $this->input->post('id_province');
		$name_province = $this->jobs_model->getProvinceHIModal($id_province);
		echo json_encode($name_province); 
	}

	public function getCityModal_post(){
		$id_city = $this->input->post('id_city');
		$name_city = $this->jobs_model->getCityModal($id_city);
		echo json_encode($name_city); 
	}

	public function getProvinceModal_post(){
		$id_province = $this->input->post('id_province');
		$name_province = $this->jobs_model->getProvinceModal($id_province);
		echo json_encode($name_province); 
	}


	public function getregistrationGuest_get(){
		$rg = $this->jobs_model->getregistrationGuest();
		echo json_encode($rg);
	}

	public function getmasterAgent_get(){
		$mg = $this->jobs_model->getmasterAgent();
		echo json_encode($mg);
	}

	public function getmasterGroup_get(){
		$mgrup = $this->jobs_model->getmasterGroup();
		echo json_encode($mgrup);
	}

	public function getReservation_get(){
		$mg = $this->jobs_model->getReservation();
		echo json_encode($mg);
	}

	public function addReservTORegistrationGuest_post(){

	$TittleRegistrationEditModal            = $this->input->post('tittle_edit2');
    $FirstNameRegistrationEditModal         = $this->input->post('first_name_edit2');
    $MiddleNameRegistrationEditModal        = $this->input->post('middle_name_edit2');
    $LastnameRegistrationEditModal          = $this->input->post('last_name_edit2');
    // $AddressRegistrationEditModal           = $this->input->post('email_cp_edit2');
    // $CountryRegistrationEditModal           = $this->input->post('regist_country_edit');
    // $CityRegistrationEditModal              = $this->input->post('CityRegist');
    // $ZipCodeRegistrationEditModal           = $this->input->post('zip_code_edit');
    $PhoneRegistrationEditModal             = $this->input->post('phone_number_cp_modal2');
    $GuestTypeRegistrationEditModal         = $this->input->post('guest_type');
    $DetailRegistrationEditModal            = $this->input->post('DetailGuestTypeReservationEditModal');
    // $JabatanRegistrationEditModal           = $this->input->post('jabatan_edit');
    // $IdentityTypeRegistrationEditModal      = $this->input->post('identity_type_edit');
    // $IdentityNumberRegistrationEditModal    = $this->input->post('identity_number_edit');
    // $DateofBirthRegistrationEditModal       = $this->input->post('date_birth_edit');
    $EmailRegistrationEditModal             = $this->input->post('email_cp_edit2');
    // $NationalityRegistrationEditModal       = $this->input->post('nationality_edit');
    $DepositRegistrationEditModal           = $this->input->post('pay_method');
    $TypeCardRegistrationEditModal          = $this->input->post('TypeCardReservationEditModal');
    $CardNoRegistrationEditModal            = $this->input->post('CardNoReservationEditModal');
    $ExpiredDateRegistrationEditModal       = $this->input->post('exp_date_edit2');
    // $ReservByRegistrationEditModal          = $this->input->post('reserv_handled_edit2');
    // $CheckedByRegistrationEditModal         = $this->input->post('CheckedByRegistrationEditModal');
    // $PurposeofVisitRegistrationEditModal    = $this->input->post('PurposeofVisitRegistrationEditModal');
    $BuildingRegistrationEditModal          = $this->input->post('building_edit2');
    $FloorRegistrationEditModal             = $this->input->post('floor_edit2');
    $NoRoomRegistrationEditModal            = $this->input->post('no_room_edit2');
    $RoomRateRegistrationEditModal          = $this->input->post('room_rate_edit2');
    $TypeRoomRegistrationEditModal          = $this->input->post('room_type_edit2');
    $TotalPaxRegistrationEditModal          = $this->input->post('total_edit2');
    $StatusRegistrationEditModal            = $this->input->post('status_edit2');
    $SpesialRequestRegistrationEditModal    = $this->input->post('spesial_request_edit2');
    $CheckInRegistrationEditModal           = date( 'Y-m-d H:i:s', strtotime($this->input->post('arrival_edit2')));
    $CheckOutRegistrationEditModal          = date( 'Y-m-d H:i:s', strtotime($this->input->post('departure_edit2')));



		// $segmentation              = $this->input->post('segment_edit2');
	 //    $guest_type                = $this->input->post('guest_type_edit2');
	 //    $detail_guest_type         = $this->input->post('detail_guest_type');
	 //    $tittle                    = $this->input->post('tittle_edit2');
	 //    $first_name                = $this->input->post('first_name_edit2');
	 //    $middle_name               = $this->input->post('middle_name_edit2');
	 //    $last_name                 = $this->input->post('last_name_edit2');
	 //    $file_name 		           = $this->input->post('identity_foto');
	 //    $identity_tipe             = $this->input->post('identity_type_edit2');
	 //    $identity_number           = $this->input->post('identity_number_edit2');
	 //    $gender                    = $this->input->post('gender_view_reservation');
	 //    $email                     = $this->input->post('email_edit2');
	 //    $phone                     = $this->input->post('phone_number_edit2');
	 //    $regist_country            = $this->input->post('regist_country_viewReserv');
	 //    $regist_province           = $this->input->post('regist_province_viewReserv');
	 //    $regist_city               = $this->input->post('regist_city_viewReserv');
	 //    $zip_code                  = $this->input->post('zip_code');
	 //    $address                   = $this->input->post('address_edit2');
	 //    $date1                     = date( 'Y-m-d H:i:s', strtotime($this->input->post('arrival_edit2')));
	 //    $date2                     = date( 'Y-m-d H:i:s', strtotime($this->input->post('departure_edit2')));
	 //    $total_pax                 = $this->input->post('total_edit2');    
	 //    $room_type                 = $this->input->post('room_type_edit2');
	 //    $room_rate                 = $this->input->post('room_rate_edit2');
	 //    $no_of_room                = $this->input->post('no_room_edit2');
	 //    $status                    = $this->input->post('status_edit2');
	 //    $remarks                   = $this->input->post('remarks_edit2');
	 //    $pay_method                = $this->input->post('pay_method');
	 //    $stat_payment              = $this->input->post('stat_payment');
	 //    $tot_bill                  = $this->input->post('tot_bill');

		$data = array(

	  
      'tittle_edit2'                   => $TittleRegistrationEditModal,
      'first_name_edit2'               => $FirstNameRegistrationEditModal,
      'middle_name_edit2'              => $MiddleNameRegistrationEditModal,
      'last_name_edit2'                => $LastnameRegistrationEditModal,
      // 'address_edit'                  => $AddressRegistrationEditModal,
      // 'regist_country_edit'           => $CountryRegistrationEditModal,
      // 'CityRegist'                    => $CityRegistrationEditModal,
      // 'zip_code_edit'                 => $ZipCodeRegistrationEditModal,
      'phone_number_cp_modal2'         => $PhoneRegistrationEditModal,
      'guest_type'                     => $GuestTypeRegistrationEditModal,
      'DetailGuestTypeReservationEditModal' => $DetailRegistrationEditModal,
      // 'jabatan_edit'                  => $JabatanRegistrationEditModal,
      // 'identity_type_edit'            => $IdentityTypeRegistrationEditModal,
      // 'identity_number_edit'          => $IdentityNumberRegistrationEditModal,
      // 'date_birth_edit'               => $DateofBirthRegistrationEditModal,
      'email_cp_edit2'                 => $EmailRegistrationEditModal,
      // 'nationality_edit'              => $NationalityRegistrationEditModal,
      'pay_method'                     => $DepositRegistrationEditModal,
      'TypeCardReservationEditModal'   => $TypeCardRegistrationEditModal,
      'CardNoReservationEditModal'     => $CardNoRegistrationEditModal,
      'exp_date_edit2'                 => $ExpiredDateRegistrationEditModal,
      // 'ReservByRegistrationEditModal' => $ReservByRegistrationEditModal,
      // 'CheckedByRegistrationEditModal'=> $CheckedByRegistrationEditModal,
      // 'PurposeofVisitRegistrationEditModal' => $PurposeofVisitRegistrationEditModal,
      'building_edit2'                 => $BuildingRegistrationEditModal,
      'floor_edit2'                    => $FloorRegistrationEditModal,
      'no_room_edit2'                  => $NoRoomRegistrationEditModal,
      'room_rate_edit2'                => str_replace(".","","$RoomRateRegistrationEditModal"),
      'room_type_edit2'                => $TypeRoomRegistrationEditModal,
      'total_edit2'                    => $TotalPaxRegistrationEditModal,
      'status_edit2'                   => $StatusRegistrationEditModal,
      'spesial_request_edit2'          => $SpesialRequestRegistrationEditModal,
      'arrival_edit2'                  => $CheckInRegistrationEditModal,
      'departure_edit2'                => $CheckOutRegistrationEditModal


		// 'segment_edit2'                 => $segmentation,
  //     	'guest_type_edit2'              => $guest_type,
  //     	'detail_guest_type'             => $detail_guest_type,
  //     	'tittle_edit2'                  => $tittle,
  //     	'first_name_edit2'              => $first_name,
  //     	'middle_name_edit2'             => $middle_name,
  //     	'last_name_edit2'               => $last_name,
  //     	'identity_foto'                 => $file_name,
  //     	'identity_type_edit2'           => $identity_tipe,
  //     	'identity_number_edit2'         => $identity_number,
  //     	'gender_view_reservation'       => $gender,
  //     	'email_edit2'                   => $email,
  //     	'phone_number_edit2'            => $phone,
  //     	'regist_country_viewReserv'     => $regist_country,
  //     	'regist_province_viewReserv'    => $regist_province,
  //     	'regist_city_viewReserv'        => $regist_city,
  //     	'zip_code'                      => $zip_code,
  //     	'address_edit2'                 => $address,
  //     	'arrival_edit2'                 => $date1,
  //     	'departure_edit2'               => $date2,
  //     	'total_edit2'                   => $total_pax,
  //     	'room_type_edit2'               => $room_type,
  //     	'room_rate_edit2'               => str_replace(".","","$room_rate"),
  //     	'no_room_edit2'                 => $no_of_room,
  //     	'status_edit2'                  => $status,
  //     	'remarks_edit2'                 => $remarks,
  //     	'pay_method'                    => $pay_method,
  //     	'stat_payment'                  => $stat_payment,
  //     	'tot_bill'                      => $tot_bill      
		);

		$rg = $this->jobs_model->addReservTORegistrationGuest($data);
		echo $rg;
	}

	
	public function addRegistrationGuest_post(){

		// $segmentation              = $this->input->post('segment');
	 //    $guest_type                = $this->input->post('guest_type');
	 //    $detail_guest_type         = $this->input->post('detail_guest_type');
	 //    $tittle                    = $this->input->post('tittle');
	 //    $first_name                = $this->input->post('first_name');
	 //    $middle_name               = $this->input->post('middle_name');
	 //    $last_name                 = $this->input->post('last_name');
	 //    $identity_foto             = $this->input->post('identity_foto');
	 //    $identity_tipe             = $this->input->post('identity_tipe');
	 //    $identity_number           = $this->input->post('identity_number');
	 //    $gender                    = $this->input->post('gender');
	 //    $email                     = $this->input->post('email');
	 //    $phone                     = $this->input->post('phone');
	 //    $regist_country            = $this->input->post('regist_country');
	 //    $regist_country_2            = $this->input->post('regist_country_2');
	 //    $regist_province           = $this->input->post('regist_province');
	 //    $regist_province_2           = $this->input->post('regist_province_2');
	 //    $regist_city               = $this->input->post('regist_city');
	 //    $regist_city_2               = $this->input->post('regist_city_2');
	 //    $zip_code                  = $this->input->post('zip_code');
	 //    $address                   = $this->input->post('address');
	 //    $date1 	                   = date( 'Y-m-d H:i:s', strtotime( $this->input->post('date1')));
	 //    $date2   	               = date( 'Y-m-d H:i:s', strtotime( $this->input->post('date2')));
	 //    $total_pax                 = $this->input->post('total_pax');    
	 //    $room_type                 = $this->input->post('room_type');
	 //    $BuildingRegistration 	   = $this->input->post('BuildingRegistration');
	 //    $FloorRegistration 	   	   = $this->input->post('FloorRegistration');
	 //    $room_rate 		           = $this->input->post('room_rate');
	 //    $no_of_room                = $this->input->post('no_of_room');
	 //    $status                    = $this->input->post('status');
	 //    $remarks                   = $this->input->post('remarks');
	 //    $pay_method                = $this->input->post('pay_method');
	 //    $stat_payment              = $this->input->post('stat_payment');
	 //    $tot_bill                  = $this->input->post('tot_bill');

	$TittleRegistrationGuest                   = $this->input->post('TittleRegistrationGuest');
    $FirstNameRegistrationGuest                = $this->input->post('FirstNameRegistrationGuest');
    $SurnameRegistrationGuest                  = $this->input->post('SurnameRegistrationGuest');
    // $MiddleNameRegistrationGuest               = $this->input->post('MiddleNameRegistrationGuest');
    // $LastNameRegistrationGuest                 = $this->input->post('LastNameRegistrationGuest');
    $AddressRegistrationGuest                  = $this->input->post('AddressRegistrationGuest');
    $CountryRegistrationGuest                  = $this->input->post('CountryRegistrationGuest');
    $CityRegistrationGuest                     = $this->input->post('CityRegistrationGuest');
    $ZipCodeRegistrationGuest                  = $this->input->post('ZipCodeRegistrationGuest');
    $PhoneRegistrationGuest                    = $this->input->post('PhoneRegistrationGuest');
    $GuestTypeRegistrationGuest                = $this->input->post('GuestTypeRegistrationGuest');
    $DetailGuestTypeRegistrationGuest          = $this->input->post('DetailGuestTypeRegistrationGuest');
    $JabatanRegistrationGuest                  = $this->input->post('JabatanRegistrationGuest');
    $IdentityTypeRegistrationGuest             = $this->input->post('IdentityTypeRegistrationGuest');
    $IdentityNumberRegistrationGuest           = $this->input->post('IdentityNumberRegistrationGuest');
    $DateBirthRegistrationGuest                = $this->input->post('DateBirthRegistrationGuest');
    $EmailRegistrationGuest                    = $this->input->post('EmailRegistrationGuest');
    $NationalityRegistrationGuest              = $this->input->post('NationalityRegistrationGuest');
    $DepositRegistrationGuest                  = $this->input->post('DepositRegistrationGuest');
    $TypeCardRegistrationGuest                 = $this->input->post('TypeCardRegistrationGuest');
    $CardNoRegistrationGuest                   = $this->input->post('CardNoRegistrationGuest');
    $ExpDateRegistrationGuest                  = $this->input->post('ExpDateRegistrationGuest');
    $ReservByRegistrationGuest                 = $this->input->post('ReservByRegistrationGuest');
    $CheckedByRegistrationGuest                = $this->input->post('CheckedByRegistrationGuest');
    $PurposeofVisitRegistrationGuest           = $this->input->post('PurposeofVisitRegistrationGuest');
    $RoomTypeRegistrationGuest                 = $this->input->post('room_type');
    $BuildingRegistration                      = $this->input->post('BuildingRegistration');
    $FloorRegistrationGuest                    = $this->input->post('FloorRegistration');
    $NoOfRoomRegistrationGuest                 = $this->input->post('no_of_room');
    $RoomRateRegistrationGuest                 = $this->input->post('room_rate');
    $IdentityFotoRegistrationGuest             = $this->input->post('identity_foto');
    $CheckInDateRegistrationGuest              = date('Y-m-d', strtotime( $this->input->post('CheckInDateRegistrationGuest')));
    $CheckInTimeRegistrationGuest              = date('H:i:s', strtotime( $this->input->post('CheckInTimeRegistrationGuest')));
    $CheckOutDateRegistrationGuest             = date('Y-m-d', strtotime( $this->input->post('CheckOutDateRegistrationGuest')));
    $CheckOutTimeRegistrationGuest             = date('H:i:s', strtotime( $this->input->post('CheckOutTimeRegistrationGuest')));
    $TotalPaxRegistrationGuest                 = $this->input->post('TotalPaxRegistrationGuest');
    $StatusRegistrationGuest                   = $this->input->post('StatusRegistrationGuest');
    $TotalBillRegistrationGuest                = $this->input->post('TotalBillRegistrationGuest');
    $AdultRegistrationGuest                    = $this->input->post('AdultRegistrationGuest');
    $ChildRegistrationGuest                    = $this->input->post('ChildRegistrationGuest');
    $SpesialRequestRegistrationGuest           = $this->input->post('SpesialRequestRegistrationGuest');

		$data = array(
	  'TittleRegistrationGuest'                => $TittleRegistrationGuest,
      'FirstNameRegistrationGuest'             => $FirstNameRegistrationGuest,
      'SurnameRegistrationGuest'               => $SurnameRegistrationGuest,
      // 'MiddleNameRegistrationGuest'            => $MiddleNameRegistrationGuest,
      // 'LastNameRegistrationGuest'              => $LastNameRegistrationGuest,
      'AddressRegistrationGuest'               => $AddressRegistrationGuest,
      'CountryRegistrationGuest'               => $CountryRegistrationGuest,
      'CityRegistrationGuest'                  => $CityRegistrationGuest,
      'ZipCodeRegistrationGuest'               => $ZipCodeRegistrationGuest,
      'PhoneRegistrationGuest'                 => $PhoneRegistrationGuest,
      'GuestTypeRegistrationGuest'             => $GuestTypeRegistrationGuest,
      'DetailGuestTypeRegistrationGuest'       => $DetailGuestTypeRegistrationGuest,
      'JabatanRegistrationGuest'               => $JabatanRegistrationGuest,
      'IdentityTypeRegistrationGuest'          => $IdentityTypeRegistrationGuest,
      'IdentityNumberRegistrationGuest'        => $IdentityNumberRegistrationGuest,
      'DateBirthRegistrationGuest'             => $DateBirthRegistrationGuest,
      'EmailRegistrationGuest'                 => $EmailRegistrationGuest,
      'NationalityRegistrationGuest'           => $NationalityRegistrationGuest,
      'DepositRegistrationGuest'               => $DepositRegistrationGuest,
      'TypeCardRegistrationGuest'              => $TypeCardRegistrationGuest,
      'CardNoRegistrationGuest'                => $CardNoRegistrationGuest,
      'ExpDateRegistrationGuest'               => $ExpDateRegistrationGuest,
      'ReservByRegistrationGuest'              => $ReservByRegistrationGuest,
      'CheckedByRegistrationGuest'             => $CheckedByRegistrationGuest,
      'PurposeofVisitRegistrationGuest'        => $PurposeofVisitRegistrationGuest,
      'room_type'                              => $RoomTypeRegistrationGuest,
      'BuildingRegistration'                   => $BuildingRegistration,
      'FloorRegistration'                      => $FloorRegistrationGuest,
      'no_of_room'                             => $NoOfRoomRegistrationGuest,
      'room_rate'                              => $RoomRateRegistrationGuest,
      'identity_foto'                          => $IdentityFotoRegistrationGuest,
      
      'CheckInDateRegistrationGuest'           => $CheckInDateRegistrationGuest,
      'CheckInTimeRegistrationGuest'           => $CheckInTimeRegistrationGuest,

      'CheckOutDateRegistrationGuest'          => $CheckOutDateRegistrationGuest,
      'CheckOutTimeRegistrationGuest'          => $CheckOutTimeRegistrationGuest,

      'TotalPaxRegistrationGuest'              => $TotalPaxRegistrationGuest,
      'StatusRegistrationGuest'                => $StatusRegistrationGuest,
      'TotalBillRegistrationGuest'             => $TotalBillRegistrationGuest,
      'AdultRegistrationGuest'                 => $AdultRegistrationGuest,
      'ChildRegistrationGuest'                 => $ChildRegistrationGuest,
      'SpesialRequestRegistrationGuest'        => $SpesialRequestRegistrationGuest

		  // 'segment'            => $segmentation,
	   //    'guest_type'         => $guest_type,
	   //    'detail_guest_type'  => $detail_guest_type,
	   //    'tittle'             => $tittle,
	   //    'first_name'         => $first_name,
	   //    'middle_name'        => $middle_name,
	   //    'last_name'          => $last_name,
	   //    'identity_foto'      => $identity_foto,
	   //    'identity_tipe'      => $identity_tipe,
	   //    'identity_number'    => $identity_number,
	   //    'gender'             => $gender,
	   //    'email'              => $email,
	   //    'phone'              => $phone,
	   //    'regist_country'     => $regist_country,
	   //    'regist_country_2'     => $regist_country_2,
	   //    'regist_province'    => $regist_province,
	   //    'regist_province_2'    => $regist_province_2,
	   //    'regist_city'        => $regist_city,
	   //    'regist_city_2'    => $regist_city_2,
	   //    'zip_code'           => $zip_code,
	   //    'address'            => $address,
	   //    'date1'	           => $date1,
	   //    'date2'              => $date2,
	   //    'total_pax'          => $total_pax,
	   //    'room_type'          => $room_type,
	   //    'building' 		   => $BuildingRegistration,
	   //    'floor' 			   => $FloorRegistration,
	   //    'room_rate'          => str_replace(".","","$room_rate"),
	   //    'no_of_room'         => $no_of_room,
	   //    'status'             => $status,
	   //    'remarks'            => $remarks,
	   //    'pay_method'         => $pay_method,
	   //    'stat_payment'       => $stat_payment,
	   //    'tot_bill'           => $tot_bill      
		);

		$rg = $this->jobs_model->addRegistrationGuest($data);
		echo $rg;
	}

	public function addRegistrationReservation_post(){

	$TittleReservation                    = $this->input->post('TittleReservation');
    $FirstNameReservation                 = $this->input->post('FirstNameReservation');
    $SurnameReservation                   = $this->input->post('SurnameReservation');
    // $MiddleNameReservation                = $this->input->post('MiddleNameReservation');
    // $LastNameReservation                  = $this->input->post('LastNameReservation');
    // $ArrivalDateReservation               = date( 'Y-m-d H:i:s', strtotime( $this->input->post('ArrivalDateReservation')));
    // $DepartDateReservation                = date( 'Y-m-d H:i:s', strtotime( $this->input->post('DepartDateReservation')));
    $ArrDateReservation                   = date('Y-m-d', strtotime($this->input->post('ArrDateReservation')));
    $ArrTimeReservation                   = date('H:i:s', strtotime($this->input->post('ArrTimeReservation')));
    $DprtDateReservation                  = date('Y-m-d', strtotime($this->input->post('DprtDateReservation')));
    $DprtTimeReservation                  = date('H:i:s', strtotime($this->input->post('DprtTimeReservation')));
    $TotalPaxReservation                  = $this->input->post('TotalPaxReservation');
    $RoomTypeReservation                  = $this->input->post('RoomTypeReservation');
    $NoRoomReservation                    = $this->input->post('NoRoomReservation');
    $RoomRateReservation                  = $this->input->post('RoomRateReservation');
    $SpesialRequestReservation            = $this->input->post('SpesialRequestReservation');
    $BillingInstructionReservation        = $this->input->post('BillingInstructionReservation');
    $DepositByReservation                 = $this->input->post('DepositByReservation');
    $TypeCardReservation                  = $this->input->post('TypeCardReservation');
    $CardNoReservation                    = $this->input->post('CardNoReservation');
    $ExpiredDateReservation                  = date('Y-m-d', strtotime($this->input->post('ExpDateReservation')));
    $NoteReservation                      = $this->input->post('NoteReservation');
    $StatusReservation                    = $this->input->post('StatusReservation');
    $GuestTypeReservation                 = $this->input->post('GuestTypeReservation');
    $DetailGuestTypeReservation           = $this->input->post('DetailGuestTypeReservation');
    $RemarksReservation                   = $this->input->post('RemarksReservation');
    $TittleCPReservation                  = $this->input->post('TittleCPReservation');
    $FirstNameCPReservation               = $this->input->post('FirstNameCPReservation');
    $SurnameCPReservation                 = $this->input->post('SurnameCPReservation');
    // $MiddleNameCPReservation              = $this->input->post('MiddleNameCPReservation');
    // $LastNameCPReservation                = $this->input->post('LastNameCPReservation');
    $PhoneNumberCPReservation             = $this->input->post('PhoneNumberCPReservation');
    $EmailCPReservation                   = $this->input->post('EmailCPReservation');
    $DateTimeCPReservation                = $this->input->post('DateTimeCPReservation');
    $ReservByReservation                  = $this->input->post('ReservByReservation');
    $BuildingReservation                  = $this->input->post('BuildingReservation');
    $FloorReservation                     = $this->input->post('FloorReservation');


    // $segmentation              = $this->input->post('segment');
    // $identity_foto             = $this->input->post('identity_foto');
    // $identity_tipe             = $this->input->post('identity_tipe');
    // $identity_number           = $this->input->post('identity_number');
    // $gender                    = $this->input->post('gender_reservation');
    // $regist_country            = $this->input->post('regist_country');
    // $regist_province           = $this->input->post('regist_province');
    // $regist_city               = $this->input->post('regist_city');
    // $zip_code                  = $this->input->post('zip_code');
    // $address                   = $this->input->post('address');
    
    // $pay_method                = $this->input->post('pay_method');
    // $val_code                  = $this->input->post('val_code');
    // $stat_payment              = $this->input->post('stat_payment');
    // $tot_bill                  = $this->input->post('tot_bill');
	// for ($i=0; $i < count($TotalPaxReservation); $i++) {

	$data = array(
	'TittleReservation'                 => $TittleReservation,
	'FirstNameReservation'              => $FirstNameReservation,
	'SurnameReservation'                => $SurnameReservation,
	// 'MiddleNameReservation'           => $MiddleNameReservation,
	// 'LastNameReservation'             => $LastNameReservation,
	// 'ArrivalDateReservation'            => $ArrivalDateReservation,
	// 'DepartDateReservation'             => $DepartDateReservation,
	'ArrDateReservation'                => $ArrDateReservation,
    'ArrTimeReservation'                => $ArrTimeReservation,
    'DprtDateReservation'               => $DprtDateReservation,
    'DprtTimeReservation'               => $DprtTimeReservation,
	'TotalPaxReservation'               => $TotalPaxReservation,
	'RoomTypeReservation'               => $RoomTypeReservation,
	'NoRoomReservation'                 => $NoRoomReservation,
	'RoomRateReservation'               => $RoomRateReservation,
	'SpesialRequestReservation'         => $SpesialRequestReservation,
	'BillingInstructionReservation'     => $BillingInstructionReservation,
	'DepositByReservation'              => $DepositByReservation,
	'TypeCardReservation'               => $TypeCardReservation,
	'CardNoReservation'                 => $CardNoReservation,
	'ExpDateReservation'  	            => $ExpiredDateReservation,
	'NoteReservation'                   => $NoteReservation,
	'StatusReservation'                 => $StatusReservation,
	'GuestTypeReservation'              => $GuestTypeReservation,
	'DetailGuestTypeReservation'        => $DetailGuestTypeReservation,
	'RemarksReservation'                => $RemarksReservation,
	'TittleCPReservation'               => $TittleCPReservation,
	'FirstNameCPReservation'            => $FirstNameCPReservation,
    'SurnameCPReservation'              => $SurnameCPReservation,
	// 'MiddleNameCPReservation'           => $MiddleNameCPReservation,
	// 'LastNameCPReservation'             => $LastNameCPReservation,
	'PhoneNumberCPReservation'          => $PhoneNumberCPReservation,
	'EmailCPReservation'                => $EmailCPReservation,
	'DateTimeCPReservation'             => $DateTimeCPReservation,
	'ReservByReservation'               => $ReservByReservation,
	'BuildingReservation'               => $BuildingReservation,
    'FloorReservation'                  => $FloorReservation
	);

      // 'segment'              => $segmentation,
      // 'guest_type'           => $guest_type,
      // 'detail_guest_type'    => $detail,
      // 'tittle'               => $tittle,
      // 'first_name[]'           => implode(',', $first_name),
      // 'middle_name[]'          => implode(',', $middle_name),
      // 'last_name[]'            => implode(',', $last_name),
      // 'identity_foto'        => $file_name,
      // 'identity_tipe'        => $identity_tipe,
      // 'identity_number'      => $identity_number,
      // 'gender_reservation'   => $gender,
      // 'email'                => $email,
      // 'phone_number'         => $phone_number,
      // 'regist_country'       => $regist_country,
      // 'regist_province'      => $regist_province,
      // 'regist_city'          => $regist_city,
      // 'zip_code'             => $zip_code,
      // 'address'              => $address,
      // 'arrival_date'         => $arrival_date,
      // 'departure_date'       => $depart_date,
      // 'total_pax'            => $total_pax,
      // 'room_type'            => $room_type,
      // 'room_rate'            => $room_rate,
      // 'no_room'              => $no_room,
      // 'status'               => $status,
      // 'pay_method'           => $pay_method,
      // 'val_code'             => $val_code,      
      // 'remarks'              => $remarks,
      // 'stat_payment'         => $stat_payment,
      // 'tot_bill'             => $tot_bill
		// );

		$rg = $this->jobs_model->addRegistrationReservation($data);
		echo $rg;
	// }
	}

	public function getBuilding_get(){
		$r = $this->jobs_model->getBuilding();
		echo json_encode($r);
	}

	public function getFloor_get(){
		$r = $this->jobs_model->getFloor();
		echo json_encode($r);
	}

	public function getBillingInstruction_get(){
		$r = $this->jobs_model->getBillingInstruction();
		echo json_encode($r);
	}

	public function getIdentityTipe_get(){
		$r = $this->jobs_model->getIdentityTipe();
		echo json_encode($r);
	}

	public function getCountryRegist_get(){
		$cor = $this->jobs_model->getCountryRegist();
		echo json_encode($cor);
	}

	public function getProvinceRegist_get(){
		$pr = $this->jobs_model->getProvinceRegist();
		echo json_encode($pr);
	}

	public function getCityRegist_get(){
		$cr = $this->jobs_model->getCityRegist();
		echo json_encode($cr);
	}

	public function getRegionRegist_get(){
		$rr = $this->jobs_model->getRegionRegist();
		echo json_encode($rr);
	}

	public function getStatusRegist_get(){
		$status = $this->jobs_model->getStatusRegist();
		echo json_encode($status);
	}

	public function getCurrencyRegist_get(){
		$curr = $this->jobs_model->getCurrencyRegist();
		echo json_encode($curr);
	}

	public function getAgentRegist_get(){
		$agent = $this->jobs_model->getAgentRegist();
		echo json_encode($agent);
	}

	public function getRoomTypeRegist_get(){
		$rtg = $this->jobs_model->getRoomTypeRegist();
		echo json_encode($rtg);
	}

	public function getRoomTypeModal_get(){
		$rtm = $this->jobs_model->getRoomTypeModal();
		echo json_encode($rtm);
	}

	public function getNoRoomRegist_get(){
		$nrg = $this->jobs_model->getNoRoomRegist();
		echo json_encode($nrg);
	}

	public function getNoRoomModal_get(){
		$gnrm = $this->jobs_model->getNoRoomModal();
		echo json_encode($gnrm);
	}

	public function getDetailFasilitas_get(){
		$gdf = $this->jobs_model->getDetailFasilitas();
		echo json_encode($gdf);
	}

	public function getSegmentationViewRegist_get(){
		$gsvr = $this->jobs_model->getSegmentationViewRegist();
		echo json_encode($gsvr);
	}

	public function getSegmentationRegist_get(){
		$sgmnt = $this->jobs_model->getSegmentationRegist();
		echo json_encode($sgmnt);
	}

	public function getGuestTypeRegist_get(){
		$ggt = $this->jobs_model->getGuestTypeRegist();
		echo json_encode($ggt);
	}

	public function getStatusReservation_get(){
		$gsr = $this->jobs_model->getStatusReservation();
		echo json_encode($gsr);
	}

	public function getGuestTypeViewRegist_get(){
		$ggtvr = $this->jobs_model->getGuestTypeViewRegist();
		echo json_encode($ggtvr);
	}

	public function getDetailGuestTypeRegist_get(){
		$dgtr = $this->jobs_model->getDetailGuestTypeRegist();
		echo json_encode($dgtr);
	}

	public function getTypeCard_get(){
		$gtc = $this->jobs_model->getTypeCard();
		echo json_encode($gtc);
	}

	public function getDetailGuestTypeViewRegist_get(){
		$gdgtvr = $this->jobs_model->getDetailGuestTypeViewRegist();
		echo json_encode($gdgtvr);
	}

	public function getHotelCountryViewRegist_get(){
		$ghcvr = $this->jobs_model->getHotelCountryViewRegist();
		echo json_encode($ghcvr);
	}

	public function getCurrencyViewRegist_get(){
		$gcvr = $this->jobs_model->getCurrencyViewRegist();
		echo json_encode($gcvr);
	}

	public function getTipeRoomViewRegist_get(){
		$gtrvr = $this->jobs_model->getTipeRoomViewRegist();
		echo json_encode($gtrvr);
	}

	public function getTypeCardViewRegist_get(){
		$gtrvr = $this->jobs_model->getTypeCardViewRegist();
		echo json_encode($gtrvr);
	}

	public function getBuildingViewRegist_get(){
		$gbvr = $this->jobs_model->getBuildingViewRegist();
		echo json_encode($gbvr);
	}

	public function getNoRoomViewRegist_get(){
		$gnrvr = $this->jobs_model->getNoRoomViewRegist();
		echo json_encode($gnrvr);
	}

	public function getGroupRegist_get(){
		$ggg = $this->jobs_model->getGroupRegist();
		echo json_encode($ggg);
	}

	public function getGuest_get(){
		$guest = $this->jobs_model->getGuest();
		echo json_encode($guest);
	}

	// public function getGuestPDF_get(){
	// 	$guest = $this->jobs_model->getGuestPDF();
	// 	echo json_encode($guest);
	// }

	public function getGuestPrint_get(){
		$id_regist = $this->jobs_model->getGuestPrint();
		echo json_encode($id_regist);
	}

	public function getlaporanPDF_post(){

		$idReg = $this->input->post('idReg');
		$laporanPDF = $this->jobs_model->getlaporanPDF($idReg);
		echo json_encode($laporanPDF);
	}

	public function getHeightfasilitas_get(){
		
		$getHeightfasilitas = $this->jobs_model->getHeightfasilitas();
		echo json_encode($getHeightfasilitas);
	}



		// End Hotel Information



	public function addHumanResources_post(){
		$companyName = $this->input->post('companyName');
		$officeBuilding =  $this->input->post('officeBuilding');
		$floor = $this->input->post('floor');
		$address = $this->input->post('address');
		$city = $this->input->post('city');
		$zipCode = $this->input->post('zipCode');
		$province = $this->input->post('province');
		$country = $this->input->post('country');

		$data = array(
			'companyName' => $companyName,
	      	'officeBuilding' => $officeBuilding,
	      	'floor' => $floor,
	      	'address'=>$address,
	      	'city'=>$city,
	      	'zipCode'=>$zipCode,
	      	'province'=>$province,
	      	'country'=>$country
		);

		$r = $this->jobs_model->addHumanResources($data);
		echo $r;
	}

	public function addHumanResourcesCP_post(){
	 	$contactPerson = $this->input->post('contactPerson');
	    $jobTitle = $this->input->post('jobTitle');
	    $phoneNumber = $this->input->post('phoneNumber');
	    $ext = $this->input->post('ext');
	    $mobilePhone1 = $this->input->post('mobilePhone1');
	    $mobilePhone2 = $this->input->post('mobilePhone2');

		$data = array(
			'contactPerson' => $contactPerson,
	      	'jobTitle' => $jobTitle,
	      	'phoneNumber' => $phoneNumber,
	      	'ext'=>$ext,
	      	'mobilePhone1'=>$mobilePhone1,
	      	'mobilePhone2'=>$mobilePhone2
		);

		$r = $this->jobs_model->addHumanResourcesCP($data);
		echo $r;
	}

	public function getHumanResources_get(){
		$r = $this->jobs_model->getHumanResources();
		echo json_encode($r);
	}

	public function getSegmentation_get(){
		$r = $this->jobs_model->getSegmentation();
		echo json_encode($r);
	}

	public function getSegmentationReservation_get(){
		$r = $this->jobs_model->getSegmentationReservation();
		echo json_encode($r);
	}

	public function getguestTypeReservation_get(){
		$r = $this->jobs_model->getguestTypeReservation();
		echo json_encode($r);
	}

	public function getDetailGuestTypeReservation_get(){
		$r = $this->jobs_model->getDetailGuestTypeReservation();
		echo json_encode($r);
	}

	public function getguestType_get(){
		$r = $this->jobs_model->getguestType();
		echo json_encode($r);
	}



	public function getguestTypeDetail_get(){
		$r = $this->jobs_model->getguestTypeDetail();
		echo json_encode($r);
	}

	public function getviewGuestTypeDetail_get(){
		$r = $this->jobs_model->getviewGuestTypeDetail();
		echo json_encode($r);
	}


	public function addCourse_post(){
		$courseName = $this->input->post('courseName');
		$type = $this->input->post('type');

		$data = array(
			'courseName' => $courseName,
      		'type' => $type
		);

		$r = $this->jobs_model->addCourse($data);
		echo $r;
	}

	public function getCourse_get(){
		$r = $this->jobs_model->getCourse();
		echo json_encode($r);
	}

	public function addChapter_post(){
		$courseName = $this->input->post('courseName');
		$chapter = $this->input->post('chapter');
		$duration = $this->input->post('duration');

		$data = array(
			'courseName' => $courseName,
	        'chapter' => $chapter,
	        'duration' => $duration				
		);

		$r = $this->jobs_model->addChapter($data);
		echo $r;
	}

	public function getChapter_get(){
		$r = $this->jobs_model->getChapter();
		echo json_encode($r);
	}

	public function addCity_post(){
		$city = $this->input->post('city');

		$r = $this->jobs_model->addCity($city);
		echo $r;
	}

	public function addProvince_post(){
		$province = $this->input->post('province');
		
		$r = $this->jobs_model->addProvince($province);
		echo $r;

	}

	public function addCountry_post(){
		$country = $this->input->post('country');
		
		$r = $this->jobs_model->addCountry($country);
		echo $r;
	}

	public function getCity_get(){
		$r = $this->jobs_model->getCity();
		echo json_encode($r);
	}

	public function getProvince_get(){
		$r = $this->jobs_model->getProvince();
		echo json_encode($r);
	}

	public function getCountry_get(){
		$r = $this->jobs_model->getCountry();
		echo json_encode($r);
	}

	public function addReligion_post(){
		$religion = $this->input->post('religion');

		$r = $this->jobs_model->addReligion($religion);
		echo $r;
	}

	public function getReligion_get(){
		$r = $this->jobs_model->getReligion();
		echo json_encode($r);
	}

	public function getChangePsw_get(){
		$r = $this->jobs_model->getChangePsw();
		echo json_encode($r);
	}

	public function editPassword_post(){
		$id = $this->input->post('id_user');
		$r = $this->jobs_model->editPassword($id);
		echo json_encode($r);
	}

	public function updatePswd_post(){
		$id = $this->input->post('id_user');
		$password = $this->input->post('password');

		$data = array(
			'id_user' => $id,
			'pass_edit' => md5($password)
		);

		$r = $this->jobs_model->updatePswd($data);
		echo json_encode($r);
	}

	public function addTypeOfTraining_post(){
		$typeTraining = $this->input->post('typeTraining');

		$r = $this->jobs_model->addTypeOfTraining($typeTraining);
		echo $r;
	}

	public function getTypeTraining_get(){
		$r = $this->jobs_model->getTypeTraining();
		echo json_encode($r);
	}

	public function addTypeOfExdepro_post(){
		$typeExdepro = $this->input->post('typeExdepro');

		$r = $this->jobs_model->addTypeOfExdepro($typeExdepro);
		echo $r;
	}

	public function getTypeExdepro_get(){
		$r = $this->jobs_model->getTypeExdepro();
		echo json_encode($r);
	}

	public function addVenueOfTraining_post(){
		$venueName = $this->input->post('venueName');
	    $address = $this->input->post('address');
	    $city = $this->input->post('city');
	    $zipCode = $this->input->post('zipCode');
	    $province = $this->input->post('province');
	    $country = $this->input->post('country');

	    $data = array(
    	  'venueName' => $venueName,
	      'address'=> $address,
	      'city'=> $city,
	      'zipCode' => $zipCode,
	      'province' => $province,
	      'country' => $country
	    );

	    $r = $this->jobs_model->addVenueOfTraining($data);
	    echo $r;
	}

	public function addVenueOfTrainingCP_post(){
		$contactPerson = $this->input->post('contactPerson');
	    $jobTitle = $this->input->post('jobTitle');
	    $phoneNumber = $this->input->post('phoneNumber');
	    $ext = $this->input->post('ext');
	    $faxNumber = $this->input->post('faxNumber');
	    $mobileNumber = $this->input->post('mobileNumber');

	    $data = array(
	      'contactPerson' => $contactPerson,
	      'jobTitle'=> $jobTitle,
	      'phoneNumber'=> $phoneNumber,
	      'ext' => $ext,
	      'faxNumber' => $faxNumber,
	      'mobileNumber' => $mobileNumber
	    );

	    $r = $this->jobs_model->addVenueOfTrainingCP($data);
	    echo $r;
	}

	public function getVenueOfTraining_get(){
		$r = $this->jobs_model->getVenueOfTraining();
		echo json_encode($r);
	}

	public function addInstructor_post(){
		 $instructorName = $this->input->post('instructorName');
	     $instructorMobilePhone1 = $this->input->post('instructorMobilePhone1');
	     $instructorMobilePhone2 = $this->input->post('instructorMobilePhone2');
	     $instructorEmailAddress = $this->input->post('instructorEmailAddress');

	    $data = array(
	      'instructorName' => $instructorName,
	      'instructorMobilePhone1' => $instructorMobilePhone1,
	      'instructorMobilePhone2' => $instructorMobilePhone2,
	      'instructorEmailAddress' => $instructorEmailAddress
	    );

	    $r = $this->jobs_model->addInstructor($data);
	    echo $r;
	}

	public function getInstructor_get(){
		$r = $this->jobs_model->getInstructor();
		echo json_encode($r);
	}

	public function addUserAccount_post(){
		$fullName = $this->input->post('fullName');
	    $username = $this->input->post('username');
	    $initial = $this->input->post('initial');
	    $department = $this->input->post('department');
	    $userLevel = $this->input->post('userLevel');
	    $status = $this->input->post('status');

	    $data = array(
	      'fullName' => $fullName,
	      'username'=> $username,
	      'initial'=> $initial,
	      'department' => $department,
	      'userLevel' => $userLevel,
	      'status' => $status
	    );

	    $r = $this->jobs_model->addUserAccount($data);
	    echo $r;
	}

	public function getUserAccount_get(){
		$r = $this->jobs_model->getUserAccount();
		echo json_encode($r);
	}

	public function addLogisticOfficer_post(){
		$logisticOfficer = $this->input->post('logisticOfficer');
	    $initial = $this->input->post('initial');
	    $status = $this->input->post('status');

	    $data = array(
    	  'logisticOfficer' => $logisticOfficer,
	      'initial'=> $initial,
	      'status' => $status
	    );

	    $r = $this->jobs_model->addLogisticOfficer($data);
	    echo $r;
	}

	public function getLogisticOfficer_get(){
		$r = $this->jobs_model->getLogisticOfficer();
		echo json_encode($r);
	}

	public function addBatchMaster_post(){
		$course = $this->input->post('course');
	    $batchCode = $this->input->post('batchCode');
	    $classInput = $this->input->post('classInput');
	    $venue = $this->input->post('venue');
	    $room = $this->input->post('room');
	    $begin = $this->input->post('begin');
	    $end = $this->input->post('end');
	    $location1 = $this->input->post('location1');
	    $type1 = $this->input->post('type1');
	    $language1 = $this->input->post('language1');
	    $venue1 = $this->input->post('venue1');
	    $dateSimulation = $this->input->post('dateSimulation');

	    $data = array(
	 	  'course' => $course,
	      'batchCode' => $batchCode,
	      'classInput' => $classInput,
	      'venue'=>$venue,
	      'room'=>$room,
	      'begin'=>$begin,
	      'end'=>$end,
	      'location1'=>$location1,
	      'type1'=>$type1,
	      'language1'=>$language1,
	      'venue1'=>$venue1,
	      'dateSimulation'=>$dateSimulation
	    );

	    $r = $this->jobs_model->addBatchMaster($data);
	    echo $r;
	}

	public function getBatchMaster_get(){
		$r = $this->jobs_model->getBatchMaster();
		echo json_encode($r);
	}

	public function addPersonalData_post(){
		$kiranId = $this->input->post('kiranId');
	    $bsmrId = $this->input->post('bsmrId');
	    $fullName = $this->input->post('fullName');
	    $mobilePhone1 = $this->input->post('mobilePhone1');
	    $mobilePhone2 = $this->input->post('mobilePhone2');
	    $birthDate = $this->input->post('birthDate');
	    $religion = $this->input->post('religion');
	    $status = $this->input->post('status');

	    $data = array(
    		'kiranId' => $kiranId,
	        'bsmrId'=> $bsmrId,
	        'fullName' => $fullName,
	        'mobilePhone1' => $mobilePhone1,
	        'mobilePhone2' => $mobilePhone2,
	        'birthDate' => $birthDate,
	        'religion' => $religion,
	        'status' => $status
	    );

	    $r = $this->jobs_model->addPersonalData($data);
	    echo $r;
	}

	public function getPersonalData_get(){
		$r = $this->jobs_model->getPersonalData();
		echo json_encode($r);
	}

	public function addRoom_post(){

		$name_room = $this->input->post('name_room');
    	$type_room = $this->input->post('type_room');
    	$no_of_room = $this->input->post('no_of_room');
    	$building = $this->input->post('building');
    	$floor = $this->input->post('floor');
    	$price_room = $this->input->post('price_room');
    	$status_room = $this->input->post('status_room');

    	$max_person_room = $this->input->post('max_person_room');
    	//$fasilitas = $this->input->post('fasilitas');

    	$data = array(
    		'name_room' => $name_room,
	        'type_room'=> $type_room,
	        'no_of_room' => $no_of_room,
	        'building' => $building,
	        'floor' => $floor,
	        'price_room' => $price_room,
	        'max_person_room' => $max_person_room,
	        'status_room' =>$status_room
	        //'fasilitas'=>$fasilitas

	    );

	    $r = $this->jobs_model->addRoom($data);
	    echo $r;
	}

	public function addFasilitasRoom_post(){

    	$fasilitas = $this->input->post('fasilitas');
    	$id_room = $this->input->post('id_room');

    	$data = array(
	        'fasilitas'=>$fasilitas,
	        'id_room' => $id_room
	    );

	    $r = $this->jobs_model->addFasilitasRoom($data);
	    echo $r;
	}

	public function updateFasilitasRoom_post(){

    	$id = $this->input->post('id_room');
		$fasilitas = $this->input->post('fasilitas');

		$data = array(
			'id_room' => $id,
			'fasilitas' => $fasilitas
		);

		$r = $this->jobs_model->updateFasilitasRoom($data);
		echo json_encode($r);
	}

	public function updateRoom_post(){
		$id = $this->input->post('id_room');
		$name_room = $this->input->post('name_room');
		$type_room = $this->input->post('type_room');
		$no_of_room = $this->input->post('no_of_room');
		$building = $this->input->post('building');
		$floor = $this->input->post('floor');
		$price_room = $this->input->post('price_room');
		$max_person_room = $this->input->post('max_person_room');
		$fasilitas = $this->input->post('fasilitas');
		$status_room = $this->input->post('status_room');


		$data = array(
			'id_room' => $id,
			'name_room_edit' => $name_room,
			'type_room_edit' => $type_room,
			'no_of_room_edit' => $no_of_room,
			'building_edit' => $building,
			'floor_edit' => $floor,
			'price_room_edit' => $price_room,
			'max_person_room_edit' => $max_person_room,
			'fasilitas' => $fasilitas,
			'status_room' => $status_room
		);

		$r = $this->jobs_model->updateRoom($data);
		echo json_encode($r);
	}

	public function editRoom_post(){
		$id = $this->input->post('id_room');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->editRoom($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function viewDetFasilitas_post(){
		$id = $this->input->post('id_room');
		$r = $this->jobs_model->viewDetFasilitas($id);
		echo json_encode($r);
	}

	public function viewDetFasilitas1_get(){
		//$id = $this->input->post('id_room');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->viewDetFasilitas1();
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function viewDetFasilitas2_post(){
		$id = $this->input->post('id_room');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->viewDetFasilitas2($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function editSubFasilitas_post(){
		$id = $this->input->post('id_detail');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->editSubFasilitas($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function updateSubFasilitas_post(){
		$id = $this->input->post('id_detail');
		$dsc_detail = $this->input->post('dsc_detail');
		$qty = $this->input->post('qty');
		$brand = $this->input->post('brand');
		$note = $this->input->post('note');

		$data = array(
			'id_detail' => $id,
			'detail_sub_fasilitas' => $dsc_detail,
			'detail_sub_qty' => $qty,
			'detail_sub_brand' => $brand,
			'note_modal' => $note
		);

		$r = $this->jobs_model->updateSubFasilitas($data);
		echo json_encode($r);
	}
	

	public function getRoom_get(){
		$r = $this->jobs_model->getRoom();
		echo json_encode($r);
	}

	public function removeRoom_post($id){
		$id = $this->input->post('id_room');
		$r = $this->jobs_model->removeRoom($id);
		echo $r;
	}

	public function addMasterFacilities_post(){
		$dsc_fasilitas = $this->input->post('dsc_fasilitas');
		$dsc_detail = $this->input->post('dsc_detail');
		$qty = $this->input->post('qty');
		$brand = $this->input->post('brand');
		$note = $this->input->post('note');
    	$id = $this->input->post('id');


	    $data = array(
	    	'dsc_fasilitas' => $dsc_fasilitas,
	    	'dsc_detail' => $dsc_detail,
	    	'qty' => $qty,
	    	'brand' => $brand,
	    	'note' => $note,
	    	'id'=>$id
	    );

	    $r = $this->jobs_model->addMasterFacilities($data);
	    echo $r;
	}

	public function addDetailsInformation_post(){
		$dsc_tipe = $this->input->post('dsc_tipe');
		$price = $this->input->post('price');
	    // $company = $this->input->post('company');
	    // $status = $this->input->post('status');
	    // $jobTitle = $this->input->post('jobTitle');
	    // $division = $this->input->post('division');
	    // $officeBuilding = $this->input->post('officeBuilding');
	    // $floor = $this->input->post('floor');
	    // $officeNumber = $this->input->post('officeNumber');
	    // $ext = $this->input->post('ext');
	    // $address = $this->input->post('address');
	    // $faxNumber = $this->input->post('faxNumber');
	    // $emailAddress = $this->input->post('emailAddress');
	    // $city = $this->input->post('city');
	    // $zipCode = $this->input->post('zipCode');
	    // $province = $this->input->post('province');
	    // $country = $this->input->post('country');

	    $data = array(
	    	'dsc_tipe' => $dsc_tipe,
	    	'price' => str_replace(".","","$price")
   		  // 'company' => $company,
	      // 'status'=> $status,
	      // 'jobTitle' => $jobTitle,
	      // 'division' => $division,
	      // 'officeBuilding' => $officeBuilding,
	      // 'floor' => $floor,
	      // 'officeNumber' => $officeNumber,
	      // 'ext' => $ext,
	      // 'address' => $address,
	      // 'faxNumber' => $faxNumber,
	      // 'emailAddress' => $emailAddress,
	      // 'city' => $city,
	      // 'zipCode' => $zipCode,
	      // 'province' => $province,
	      // 'country' => $country
	    );

	    $r = $this->jobs_model->addDetailsInformation($data);
	    echo $r;
	}

	public function addguestType_post(){
		$guest_type = $this->input->post('guest_type');

	    $data = array(
	    	'guest_type' => $guest_type
	    );

	    $r = $this->jobs_model->addguestType($data);
	    echo $r;
	}

	public function addviewGuestTypeDetail_post(){
		$detail_type_guest = $this->input->post('detail_type_guest');
		$detail = $this->input->post('detail');
		$price = $this->input->post('price');

	    $data = array(
	    	'detail_type_guest' => $detail_type_guest,
	    	'detail'	 => $detail,
	    	'price' => $price
	    );

	    $r = $this->jobs_model->addviewGuestTypeDetail($data);
	    echo $r;
	}

	public function getMasterFacilities_get(){
		$r = $this->jobs_model->getMasterFacilities();
		echo json_encode($r);
	}

	public function getMasterSubFacilities_post(){
		$id = $this->input->post('id_fasilitas');
		$r = $this->jobs_model->getMasterSubFacilities($id);
		echo json_encode($r);
	}

	public function hapusSubFasilitas_post(){
		$id = $this->input->post('id_detail');
		$r = $this->jobs_model->hapusSubFasilitas($id);
		echo $r;
	}

	public function getDetailsInformation_get(){
		$r = $this->jobs_model->getDetailsInformation();
		echo json_encode($r);
	}

	public function gettypekamar_get(){
		$r = $this->jobs_model->gettypekamar();
		echo json_encode($r);
	}

	public function getNoRoom_get(){
		$r = $this->jobs_model->getNoRoom();
		echo json_encode($r);
	}

	public function editDetailsInformation_post(){
		$id = $this->input->post('id_tipe');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->editDetailsInformation($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}
	
	public function editReservation_post(){
		$id = $this->input->post('id_reservation');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->editReservation($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function viewReservation_post(){
		$id = $this->input->post('id_reservation');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->viewReservation($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function editGuestTentativeModal_post(){
		$id = $this->input->post('id_regist');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->editGuestTentativeModal($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}


	public function updateGuestInformation_post(){
		$id_regist 			= $this->input->post('id_regist');
		$tittle             = $this->input->post('tittle_edit');
		$first_name         = $this->input->post('first_name_edit');
    	$surname            = $this->input->post('surname_edit');

		// $middle_name        = $this->input->post('middle_name_edit');
		// $last_name          = $this->input->post('last_name_edit');
		$address            = $this->input->post('address_edit');
		$regist_country     = $this->input->post('regist_country_edit');
		$CityRegist         = $this->input->post('CityRegist');
		$zip_code           = $this->input->post('zip_code_edit');
		$phone              = $this->input->post('phone_edit');
		$guest_type         = $this->input->post('guest_type_edit');
		$guest_detail       = $this->input->post('detail_guest_type_edit');
		$jabatan            = $this->input->post('jabatan_edit');
		$identity_tipe      = $this->input->post('identity_type_edit');
		$identity_number    = $this->input->post('identity_number_edit');
		$date_of_birth      = $this->input->post('date_birth_edit');
		$email              = $this->input->post('email_edit');
		$nationality        = $this->input->post('nationality_edit');
		$deposit            = $this->input->post('DepositRegistrationEditModal');
		$type_card          = $this->input->post('TypeCardRegistrationEditModal');
		$card_no            = $this->input->post('CardNoRegistrationEditModal');
		$exp_date           = $this->input->post('ExpDateRegistrationEditModal');
		$reserv_handled     = $this->input->post('ReservByRegistrationEditModal');
		$check_by           = $this->input->post('CheckedByRegistrationEditModal');
		$purpose_visit      = $this->input->post('PurposeofVisitRegistrationEditModal');
		$building           = $this->input->post('BuildingReservationEditModal');
		$floor              = $this->input->post('FloorReservationEditModal');
		$no_room            = $this->input->post('NoRoomReservationEditModal');
		$room_rate          = $this->input->post('room_rate_edit');
		$room               = $this->input->post('room_edit');

		$ArrDateUpdateRegistration             = date( 'Y-m-d', strtotime($this->input->post('checkInDateEdit')));
	    $ArrTimeUpdateRegistration             = date( 'H:i:s', strtotime($this->input->post('checkInTimeEdit')));

	    $DprtDateUpdateRegistration            = date( 'Y-m-d', strtotime($this->input->post('checkOutDateEdit')));
	    $DprtTimeUpdateRegistration            = date( 'H:i:s', strtotime($this->input->post('checkOutTimeEdit')));
		// $arrival_date       = $this->input->post('chki_edit');
		// $departure_date     = $this->input->post('chko_edit');  
		$total_pax          = $this->input->post('total_pax_edit');
		$status             = $this->input->post('status_edit');
		$identity_foto      = $this->input->post('identity_foto_edit');
		$spesial_request    = $this->input->post('SpesialRequestRegistrationEditModal');
		$date_payment 		= $this->input->post('date_payment');
		$remark_payment 	= $this->input->post('remark_payment');
		$bank_code 			= $this->input->post('bank_code');
		$card_owner_name 	= $this->input->post('card_owner_name');
		$payment_amount 	= $this->input->post('payment_amount');
		$card_number 		= $this->input->post('card_number');
		$bank_issuer 		= $this->input->post('bank_issuer');
		$stat_payment 		= $this->input->post('stat_payment_edit');
        $pembayaran		    = $this->input->post('pembayaran');

		$data = array(
		  'id_regist'                   => $id_regist,
	      'tittle_edit'                 => $tittle,
	      'first_name_edit'             => $first_name,
      	  'surname_edit'                => $surname,

	      // 'middle_name_edit'            => $middle_name,
	      // 'last_name_edit'              => $last_name,
	      'address_edit'                => $address,
	      'regist_country_edit'         => $regist_country,
	      'CityRegist'                  => $CityRegist,
	      'zip_code_edit'               => $zip_code,
	      'phone_edit'                  => $phone,
	      'guest_type_edit'             => $guest_type,
	      'detail_guest_type_edit'      => $guest_detail,
	      'jabatan_edit'                => $jabatan,
	      'identity_type_edit'          => $identity_tipe,
	      'identity_number_edit'        => $identity_number,
	      'date_birth_edit'             => $date_of_birth,
	      'email_edit'                  => $email,
	      'nationality_edit'            => $nationality,
	      'DepositRegistrationEditModal'=> $deposit,
	      'TypeCardRegistrationEditModal'=> $type_card,
	      'CardNoRegistrationEditModal' => $card_no,
	      'ExpDateRegistrationEditModal'=> $exp_date,
	      'ReservByRegistrationEditModal'=> $reserv_handled,
	      'CheckedByRegistrationEditModal'=> $check_by,
	      'PurposeofVisitRegistrationEditModal'=> $purpose_visit,
	      'BuildingReservationEditModal'=> $building,
	      'FloorReservationEditModal'   => $floor,
	      'NoRoomReservationEditModal'  => $no_room,
	      'room_rate_edit'              => $room_rate,
	      'room_edit'                   => $room,

	      'checkInDateEdit'             => $ArrDateUpdateRegistration,
	      'checkInTimeEdit'             => $ArrTimeUpdateRegistration,
	      'checkOutDateEdit'            => $DprtDateUpdateRegistration,
	      'checkOutTimeEdit'            => $DprtTimeUpdateRegistration,
	      
	      // 'chki_edit'                   => $arrival_date,
	      // 'chko_edit'                   => $departure_date,
	      'total_pax_edit'              => $total_pax,
	      'status_edit'                 => $status,
	      'identity_foto_edit' 		    => $identity_foto,
	      'SpesialRequestRegistrationEditModal' => $spesial_request,
	      'date_payment' => $date_payment,
	      'remark_payment' => $remark_payment,
	      'bank_code' => $bank_code,
	      'card_owner_name' => $card_owner_name,
	      'payment_amount' => $payment_amount,
	      'card_number' => $card_number,
	      'bank_issuer' => $bank_issuer,
	      'stat_payment_edit' => $stat_payment,
            'pembayaran'				=> $pembayaran
		);

		$r = $this->jobs_model->updateGuestInformation($data);
		echo json_encode($r);
	}

        public function updateDeposit_post(){
            $id_regist 					= $this->input->post('id_regist');
            $depositAmount              		= $this->input->post('deposit_amount');
            $remarkDeposit         			= $this->input->post('remark_deposit');

            $data = array(
                'id_regist'                   => $id_regist,
                'deposit_amount'                => $depositAmount,
                'remark_deposit'             => $remarkDeposit
            );

            $r = $this->jobs_model->updateDeposit($data);
            echo json_encode($r);
        }

	public function updateReservation_post(){

	    $id_reservation         			  		= $this->input->post('id_reservation');
		$TittleUpdateReservation              		= $this->input->post('TittleReservationEditModal');
	    $FirstnameUpdateReservation           		= $this->input->post('FirstNameReservationEditModal');
    	$SurnameUpdateReservation            		= $this->input->post('SurnameReservationEditModal');

	    // $MiddleNameUpdateReservation          		= $this->input->post('MiddleNameReservationEditModal');
	    // $LastNameUpdateReservation            		= $this->input->post('LastNameReservationEditModal');
	    // $ArrivalDateUpdateReservation         		= $this->input->post('ArrivalDateReservationEditModal');
	    // $DepartDateUpdateReservation          		= $this->input->post('DepartDateReservationEditModal');\

	    $ArrDateUpdateReservation             		= date( 'Y-m-d', strtotime($this->input->post('ArrivalDateReservationEditModal')));
    	$ArrTimeUpdateReservation             		= date( 'H:i:s', strtotime($this->input->post('ArrivalTimeReservationEditModal')));

    	$DprtDateUpdateReservation            		= date( 'Y-m-d', strtotime($this->input->post('DepartureDateReservationEditModal')));
    	$DprtTimeUpdateReservation            		= date( 'H:i:s', strtotime($this->input->post('DepartureTimeReservationEditModal')));


	    $TotalPaxUpdateReservation            		= $this->input->post('TotalPaxReservationEditModal');
	    $BuildingUpdateReservation            		= $this->input->post('BuildingReservationEditModal');
	    $FloorUpdateReservation               		= $this->input->post('FloorReservationEditModal');
	    $NoRoomUpdateReservation              		= $this->input->post('NoRoomReservationEditModal');
	    $RoomTypeUpdateReservation            		= $this->input->post('RoomTypeReservationEditModal');
	    $RoomRateUpdateReservation            		= $this->input->post('RoomRateReservationEditModal');
	    $SpesialRequestUpdateReservation      		= $this->input->post('SpesialRequestReservationEditModal');
	    $BillingInstructionUpdateReservation  		= $this->input->post('BillingInstructionReservationEditModal');
	    $DepositUpdateReservation             		= $this->input->post('DepositByReservationEditModal');
	    $TypeCardUpdateReservation            		= $this->input->post('TypeCardReservationEditModal');
	    $CardNoUpdateReservation              		= $this->input->post('CardNoReservationEditModal');
	    $ExpDateUpdateReservation                   = date( 'Y-m-d', strtotime($this->input->post('ExpDateReservationEditModal')));
	    $NoteUpdateReservation                		= $this->input->post('NoteReservationEditModal');
	    $StatusUpdateReservation              		= $this->input->post('StatusReservationEditModal');
	    $GuestTypeUpdateReservation           		= $this->input->post('GuestTypeReservationEditModal');
	    $DetailGuestTypeUpdateReservation     		= $this->input->post('DetailGuestTypeReservationEditModal');
	    $RemarksUpdateReservation             		= $this->input->post('RemarksReservationEditModal');
	    $TittleCPUpdateReservation            		= $this->input->post('TittleCPReservationEditModal');
	    $FirstNameCPUpdateReservation         		= $this->input->post('FirstNameCPReservationEditModal');
	    $MiddleNameCPUpdateReservation        		= $this->input->post('MiddleNameCPReservationEditModal');
	    $LastNameCPUpdateReservation          		= $this->input->post('LastNameCPReservationEditModal');
	    $PhoneNumberCPUpdateReservation       		= $this->input->post('PhoneNumberCPReservationEditModal');
	    $EmailCPUpdateReservation             		= $this->input->post('EmailCPReservationEditModal');
	    $DateTimeCPUpdateReservation          		= $this->input->post('DateTimeCPReservationEditModal');
	    $ReservByUpdateReservation            		= $this->input->post('ReservByReservationEditModal');

		$data = array(

	   'id_reservation'          				   => $id_reservation,
       'TittleReservationEditModal'                => $TittleUpdateReservation,
       'FirstNameReservationEditModal'             => $FirstnameUpdateReservation,
       'SurnameReservationEditModal'    		   => $SurnameUpdateReservation,
       
       'ArrivalDateReservationEditModal'           => $ArrDateUpdateReservation,
       'ArrivalTimeReservationEditModal'           => $ArrTimeUpdateReservation,

       'DepartureDateReservationEditModal'         => $DprtDateUpdateReservation,
       'DepartureTimeReservationEditModal'         => $DprtTimeUpdateReservation,

       'TotalPaxReservationEditModal'              => $TotalPaxUpdateReservation,
       'BuildingReservationEditModal'              => $BuildingUpdateReservation,
       'FloorReservationEditModal'                 => $FloorUpdateReservation,
       'NoRoomReservationEditModal'                => $NoRoomUpdateReservation,
       'RoomTypeReservationEditModal'              => $RoomTypeUpdateReservation,
       'RoomRateReservationEditModal'              => $RoomRateUpdateReservation,
       'SpesialRequestReservationEditModal'        => $SpesialRequestUpdateReservation,
       'BillingInstructionReservationEditModal'    => $BillingInstructionUpdateReservation,
       'DepositByReservationEditModal'             => $DepositUpdateReservation,
       'TypeCardReservationEditModal'              => $TypeCardUpdateReservation,
       'CardNoReservationEditModal'                => $CardNoUpdateReservation,
       'ExpDateReservationEditModal'               => $ExpDateUpdateReservation,
       'NoteReservationEditModal'                  => $NoteUpdateReservation,
       'StatusReservationEditModal'                => $StatusUpdateReservation,
       'GuestTypeReservationEditModal'             => $GuestTypeUpdateReservation,
       'DetailGuestTypeReservationEditModal'       => $DetailGuestTypeUpdateReservation,
       'RemarksReservationEditModal'               => $RemarksUpdateReservation,
       'TittleCPReservationEditModal'              => $TittleCPUpdateReservation,
       'FirstNameCPReservationEditModal'           => $FirstNameCPUpdateReservation,
       'MiddleNameCPReservationEditModal'          => $MiddleNameCPUpdateReservation,
       'LastNameCPReservationEditModal'            => $LastNameCPUpdateReservation,
       'PhoneNumberCPReservationEditModal'         => $PhoneNumberCPUpdateReservation,
       'EmailCPReservationEditModal'               => $EmailCPUpdateReservation,
       'DateTimeCPReservationEditModal'            => $DateTimeCPUpdateReservation,
       'ReservByReservationEditModal'              => $ReservByUpdateReservation
		);

		$r = $this->jobs_model->updateReservation($data);
		echo json_encode($r);
	}

	public function hapusReservation_post($id){
		$id = $this->input->post('id_reservation');
		$r = $this->jobs_model->hapusReservation($id);
		echo $r;
	}

	public function updateDetailsInformation_post(){
		$id = $this->input->post('id_tipe');
		$dsc_tipe = $this->input->post('dsc_tipe');
		$price = $this->input->post('price');

		$data = array(
			'id_tipe_edit' => $id,
			'dsc_tipe_edit' => $dsc_tipe,
			'price_edit' => $price
		);

		$r = $this->jobs_model->updateDetailsInformation($data);
		echo json_encode($r);
	}

	public function updateGuestType_post(){
		$id = $this->input->post('id_type_guest');
		$guest_type = $this->input->post('type_guest_edit');

		$data = array(
			'id_type_guest_edit' => $id,
			'type_guest_edit' => $guest_type
		);

		$r = $this->jobs_model->updateGuestType($data);
		echo json_encode($r);
	}

	public function updateDetailGuestType_post(){
		$id 			   = $this->input->post('id_detail_guest_type');
		$detail_guest_type = $this->input->post('select_detail_type_guest_modal');
		$detail 		   = $this->input->post('detail_type_guest_modal');
		$price 			   = $this->input->post('price_edit');

		$data = array(
			'id_detail_type_guest_edit' => $id,
			'select_detail_type_guest_edit' => $detail_guest_type,
			'detail_type_guest_modal'				=> $detail,
			'price_edit' => $price
		);

		$r = $this->jobs_model->updateDetailGuestType($data);
		echo json_encode($r);
	}

	public function updateSegmentation_post(){
		$id_segment = $this->input->post('id_segment');
		$segment = $this->input->post('segment');

		$data = array(
			'id_segment' => $id_segment,
			'segment' => $segment
		);

		$r = $this->jobs_model->updateSegmentation($data);
		echo json_encode($r);
	}

	public function removeDetailsInformation_post($id){
		$id = $this->input->post('id_tipe');
		$r = $this->jobs_model->removeDetailsInformation($id);
		echo $r;
	}

	public function addFasilitas_post(){
		$dsc_fasilitas = $this->input->post('dsc_fasilitas');

	    $data = array(
	    	'dsc_fasilitas' => $dsc_fasilitas
	    );

	    $r = $this->jobs_model->addFasilitas($data);
	    echo $r;
	}

	// public function addFacilities_post(){
	// 	$dsc_fasilitas = $this->input->post('dsc_fasilitas');

	//     $data = array(
	//     	'dsc_fasilitas' => $dsc_fasilitas
	//     );

	//     $r = $this->jobs_model->addFasilitas($data);
	//     echo $r;
	// }

	public function hapusFasilitas_post($id){
		$id = $this->input->post('id_fasilitas');
		$r = $this->jobs_model->hapusFasilitas($id);
		echo $r;
	}

	public function editFasilitas_post(){
		$id = $this->input->post('id_fasilitas');
		// $data = array(
		// 	'id_tipe' => $id,
		// );
		$r = $this->jobs_model->editFasilitas($id);
		echo json_encode($r);
		// $r = $this->jobs_model->editDetailsInformation($id);
		// echo $r; 
	}

	public function updateFasilitas_post(){
		$id = $this->input->post('id_fasilitas');
		$dsc_fasilitas = $this->input->post('dsc_fasilitas');

		$data = array(
			'id_fasilitas' => $id,
			'dsc_fasilitas_edit' => $dsc_fasilitas
		);

		$r = $this->jobs_model->updateFasilitas($data);
		echo json_encode($r);
	}

	public function getFasilitas_get(){
		$r = $this->jobs_model->getFasilitas();
		echo json_encode($r);
	}

	public function getTypeRoom_get(){
		$r = $this->jobs_model->getTypeRoom();
		echo json_encode($r);
	}

	public function getNoRoomEditReservation_get(){
		$r = $this->jobs_model->getNoRoomEditReservation();
		echo json_encode($r);
	}

	public function getTypeCardEditReservation_get(){
		$r = $this->jobs_model->getTypeCardEditReservation();
		echo json_encode($r);
	}

	public function getGuestTypeEditReservation_get(){
		$r = $this->jobs_model->getGuestTypeEditReservation();
		echo json_encode($r);
	}

	public function getDetailGuestTypeEditReservation_get(){
		$r = $this->jobs_model->getDetailGuestTypeEditReservation();
		echo json_encode($r);
	}

	public function getFasilitas2_get(){
		$r = $this->jobs_model->getFasilitas2();
		echo json_encode($r);
	}

	public function getFasilitasMain_get(){
		$r = $this->jobs_model->getFasilitasMain();
		echo json_encode($r);
	}

	public function getDetailSubFasilitas_get(){
		$r = $this->jobs_model->getDetailSubFasilitas();
		echo json_encode($r);
	}

	public function getHrView_post(){
		$id = $this->input->post('id');

		$r = $this->jobs_model->getHrView($id);
		echo json_encode($r);
	}

	public function getContactPerson_post(){
		$id = $this->input->post('id');

		$r = $this->jobs_model->getContactPerson($id);
		echo json_encode($r);
	}


	////////////////////////////////////////////////////////////////
		public function get_leavebalance_post(){
			$userId = $this->input->post('userId');

			$r = $this->jobs_model->get_leavebalance($userId);

			if ($r) {
				$data = array(
					'leave_balance'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_balance'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve leave balance'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_leavetrans_approve_post(){
			$userId = $this->input->post('userId');

			$r = $this->jobs_model->get_leavetrans_approve($userId);

			if ($r) {
				$data = array(
					'leave_trans'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_trans'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve leave trans'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_leavetrans_disapprove_post(){
			$userId = $this->input->post('userId');

			$r = $this->jobs_model->get_leavetrans_disapprove($userId);

			if ($r) {
				$data = array(
					'leave_trans'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_trans'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve leave trans'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_leavetrans_waiting_post(){
			$userId = $this->input->post('userId');

			$r = $this->jobs_model->get_leavetrans_waiting($userId);

			if ($r) {
				$data = array(
					'leave_trans'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_trans'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve leave trans'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_meetingroom_post(){
			$officeId = $this->input->post('officeId');

			$r = $this->jobs_model->get_meetingroom($officeId);

			if ($r) {
				$data = array(
					'meeting_room'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'meeting_room'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve meeting room list'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_today_events_post(){
			$today = $this->input->post('today');

			$r = $this->jobs_model->get_today_events($today);

			if ($r) {
				$data = array(
					'today_events'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'today_events'=> array(
						'status'=>'failed',
						'data'=> 'no events'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function post_booking_room_post(){
			$eventsDate = $this->input->post('eventsDate');
			$eventsTimeFrom = $this->input->post('eventsTimeFrom');
			$eventsTimeTo = $this->input->post('eventsTimeTo');
			$eventsOffice = $this->input->post('eventsOffice');
			$eventsRoom = $this->input->post('eventsRoom');
			$eventsCreator = $this->input->post('eventsCreator');
			$eventsAgenda = $this->input->post('eventsAgenda');
			$eventsStatus = $this->input->post('eventsStatus');

			$data = array(
				'eventsDate'=>$eventsDate,
				'eventsTimeFrom'=>$eventsTimeFrom,
				'eventsTimeTo'=>$eventsTimeTo,
				'eventsOffice'=>$eventsOffice,
				'eventsRoom'=>$eventsRoom,
				'eventsCreator'=>$eventsCreator,
				'eventsAgenda'=>$eventsAgenda,
				'eventsStatus'=>$eventsStatus,
			);

			$r = $this->jobs_model->post_booking_room($data);

			if ($r) {
				$data = array(
					'booking_room'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'booking_room'=> array(
						'status'=>'failed',
						'data'=> 'failed to booking room. Please try again later.'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_leavetype_get(){
			$r = $this->jobs_model->get_leavetype();
			if ($r) {
				$data = array(
					'leave_type'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_type'=> array(
						'status'=>'failed',
						'data'=> 'error getting leave type data'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_meetingroom_tablet_post(){
			$dates = $this->input->post('dates');
			$room = $this->input->post('room');

			$data = array(
				'dates'=>$dates,
				'room'=>$room
			);

			$r = $this->jobs_model->get_events($data);

			if ($r) {
				$data = array(
					'list_meetings'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'list_meetings'=> array(
						'status'=>'failed',
						'data'=> 'no events'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_attendance_post(){
			$id = $this->input->post('id');

			$r = $this->jobs_model->get_attendance($id);

			if ($r) {
				$data = array(
					'attendance'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'attendance'=> array(
						'status'=>'failed',
						'data'=> 'no attendance data for current user'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function post_leave_1day_post(){
			$persNo = $this->input->post('persNo');
			$leaveType = $this->input->post('leaveType');
			$dates = $this->input->post('dates');
			$hours = $this->input->post('hours');
			$minutes = $this->input->post('minutes');
			$seconds = $this->input->post('seconds');
			$purpose = $this->input->post('purpose');
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$backupPerson = $this->input->post('backupPerson');
			$transSeq = $this->input->post('transSeq');
			$superiorComment = $this->input->post('superiorComment');

			$data = array(
				'persNo'=>$persNo,
				'leaveType'=>$leaveType,
				'dates'=>$dates,
				'hours'=>$hours,
				'minutes'=>$minutes,
				'seconds'=>$seconds,
				'purpose'=>$purpose,
				'address'=>$address,
				'phone'=>$phone,
				'transSeq'=>$transSeq,
				'backupPerson'=>$backupPerson,
				'superiorComment'=>$superiorComment,
			);

			$r = $this->jobs_model->post_leave_1day($data);

			if ($r) {
				$data = array(
					'leave_req'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_req'=> array(
						'status'=>'failed',
						'data'=> 'cannot proceed your leave request. check your network again'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_trans_seq_get(){
			$r = $this->jobs_model->get_trans_seq();
			if ($r) {
				$data = array(
					'trans_seq'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'trans_seq'=> array(
						'status'=>'failed',
						'data'=> 'error getting trans_seq'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function insert_token_post(){
			$token = $this->input->post('token');
			$persNo = $this->input->post('persNo');

			$data = array(
				'token'=>$token,
				'persNo'=>$persNo
			);

			$r = $this->jobs_model->insert_token($data);
			if ($r) {
				$data = array(
					'token'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'token'=> array(
						'status'=>'failed',
						'data'=> 'error inserting token'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_history_post(){
			$id = $this->input->post('id');

			$r = $this->jobs_model->get_history($id);

			if ($r) {
				$data = array(
					'history'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'history'=> array(
						'status'=>'failed',
						'data'=> 'no history'
					));

				$result = json_encode($data);
				echo $result;
			}
		}



		public function get_teamtrans_approve_post(){
			$name = $this->input->post('name');
	

			$r = $this->jobs_model->get_teamtrans_approve($name);

			if ($r) {
				$data = array(
					'leave_trans'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_trans'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve leave trans'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_teamtrans_disapprove_post(){
			$name = $this->input->post('name');


			$r = $this->jobs_model->get_teamtrans_disapprove($name);

			if ($r) {
				$data = array(
					'leave_trans'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_trans'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve leave trans'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_teamtrans_waiting_post(){
			$name = $this->input->post('name');


			$r = $this->jobs_model->get_teamtrans_waiting($name);

			if ($r) {
				$data = array(
					'leave_trans'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'leave_trans'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve leave trans'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function save_file_post(){
			$file_path = FCPATH."/assets/document/";

			$file_path = $file_path . basename($_FILES['uploaded_file']['name']);

			if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
				echo "Success";
			} else {
				echo "Error";
			}
		}

		public function send_evidence_post(){
			$trans_seq = $this->input->post('trans_seq');
			$evidence_path = $this->input->post('evidence_path');

			$data = array(
				'trans_seq'=>$trans_seq,
				'evidence_path'=>$evidence_path
			);

			$r = $this->jobs_model->send_evidence($data);

			if ($r) {
				$data = array(
					'evidence'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'evidence'=> array(
						'status'=>'failed',
						'data'=> 'cannot send evidence'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_pub_holiday_get(){
			$r = $this->jobs_model->get_pub_holiday();

			if ($r) {
				$data = array(
					'pub'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'pub'=> array(
						'status'=>'failed',
						'data'=> 'cannot get pub holiday'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function approve_leave_post(){
			$transSeq = $this->input->post('transSeq');

			$r = $this->jobs_model->approve($transSeq);

			if ($r) {
				$data = array(
					'approve'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'approve'=> array(
						'status'=>'failed',
						'data'=> 'cannot process the request'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function disapprove_leave_post(){	
			$transSeq = $this->input->post('transSeq');

			$r = $this->jobs_model->disapprove($transSeq);

			if ($r) {
				$data = array(
					'disapprove'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'disapprove'=> array(
						'status'=>'failed',
						'data'=> 'cannot process the request'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function insert_news_post(){
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$path = $this->input->post('path');

			$data = array(
				'title'=>$title,
				'content'=>$content,
				'path'=>$path
			);

			$r = $this->jobs_model->insert_news($data);

			if ($r) {
				$data = array(
					'news'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'news'=> array(
						'status'=>'failed',
						'data'=> 'cannot process the request'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_news_get(){
			$r = $this->jobs_model->get_news();
			$result = json_encode($r);
			echo $result;
		}

		public function get_details_news_post(){
			$id = $this->input->post('id');

			$r = $this->jobs_model->get_details_news($id);
			$result = json_encode($r);
			echo $result;
		}

		public function edit1_news_post(){
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$id = $this->input->post('id');

			$data = array(
				'title'=>$title,
				'content'=>$content,
				'id'=>$id
			);

			$r = $this->jobs_model->edit1_news($data);
		}

		public function edit2_news_post(){
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$path = $this->input->post('path');
			$id = $this->input->post('id');

			$data = array(
				'title'=>$title,
				'content'=>$content,
				'path'=>$path,
				'id'=>$id
			);

			$r = $this->jobs_model->edit2_news($data);
		}

		public function delete_news_post(){
			$id = $this->input->post('id');

			$r = $this->jobs_model->delete_news($id);
		}

		public function get_office_web_get(){
			$r = $this->jobs_model->get_office_web();
			$result = json_encode($r);
			echo $result;
		}

		public function get_meetingroom_web_get(){
			$r = $this->jobs_model->get_meetingroom_web();
			$result = json_encode($r);
			echo $result;
		}

		public function get_events_web_post(){
			$start_format= $this->input->post('start_format');
			$end_format = $this->input->post('end_format');

			$data = array(
				'start_format'=>$start_format,
				'end_format'=>$end_format
			);

			$r = $this->jobs_model->get_events_web($data);
			echo $r;
		}

		public function get_user_list_get(){
			$r = $this->jobs_model->get_users_list();

			if ($r) {
				$data = array(
					'users_list'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'users_list'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve users list'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_news_mobile_get(){
			$r = $this->jobs_model->get_news_list();

			if ($r) {
				$data = array(
					'news_list'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'news_list'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve news list'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function get_news_detail_mobile_post(){
			$id = $this->input->post('id');

			$r = $this->jobs_model->get_news_detail_list($id);

			if ($r) {
				$data = array(
					'news_list'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'news_list'=> array(
						'status'=>'failed',
						'data'=> 'cannot retrieve news list'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function update_remarks_post(){
			$userId = $this->input->post('userId');
			$date = $this->input->post('date');
			$remarks = $this->input->post('remarks');

			$data = array(
				'userId'=>$userId,
				'date'=>$date,
				'remarks'=>$remarks
			);

			$r = $this->jobs_model->update_remarks($data);

			if ($r) {
				$data = array(
					'remarks'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'remarks'=> array(
						'status'=>'failed',
						'data'=> 'cannot update remarks'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function changeTypeRoom_post(){
			$typeRoomId = $this->input->post('typeRoomId');

			$r = $this->jobs_model->changeTypeRoom($typeRoomId);
			if ($r) {
				$data = array(
					'changeTypeRoom'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'changeTypeRoom'=> array(
						'status'=>'failed',
						'data'=> 'cannot update remarks'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function changeTypeRoomReservation_post(){
			$typeRoomIdReservation = $this->input->post('room_rate');
			$buildingRoomIdReservation = $this->input->post('room_building');
			$floorRoomIdReservation = $this->input->post('room_floor');

			$data = array(
				'typeRoom'=>$typeRoomIdReservation,
				'buildingRoom'=>$buildingRoomIdReservation,
				'floorRoom'=>$floorRoomIdReservation,

			);


			$r = $this->jobs_model->changeTypeRoomReservation($data);
			if ($r) {
				$data = array(
					'changeTypeRoomReservation'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'changeTypeRoomReservation'=> array(
						'status'=>'failed',
						'data'=> 'cannot update remarks'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function changeTypeRoomReservationModal_post(){
			$typeRoomIdReservationModal = $this->input->post('room_rate_edit');

			$r = $this->jobs_model->changeTypeRoomReservationModal($typeRoomIdReservationModal);
			if ($r) {
				$data = array(
					'changeTypeRoomReservationModal'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'changeTypeRoomReservationModal'=> array(
						'status'=>'failed',
						'data'=> 'cannot update remarks'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function changeTypeRoomGuestModal_post(){
			$typeRoomIdModal = $this->input->post('price_regist_edit');

			$r = $this->jobs_model->changeTypeRoomGuestModal($typeRoomIdModal);
			if ($r) {
				$data = array(
					'changeTypeRoomGuestModal'=> array(
						'status'=>'success',
						'data'=> $r
					));

				$result = json_encode($data);
				echo $result;
			} else {
				$data = array(
					'changeTypeRoomGuestModal'=> array(
						'status'=>'failed',
						'data'=> 'cannot update remarks'
					));

				$result = json_encode($data);
				echo $result;
			}
		}

		public function getHotelInformation2_get(){
			$r = $this->jobs_model->getHotelInformation2();
			echo json_encode($r);
		}


		// class Room {}
		public function getDpRoom_get(){
			$r = $this->jobs_model->getDpRoom();
			echo json_encode($r);
		}

		public function getMasterStatusRoom_get(){
			$r = $this->jobs_model->getMasterStatusRoom();
			echo json_encode($r);
		}

		public function getMasterTax_get(){
			$r = $this->jobs_model->getMasterTax();
			echo json_encode($r);
		}

		public function login_post(){
			$username = $this->session->userdata('admin_session');
			$password = $this->input->post('password');

			$data = array('username'=>$username, 'password'=>md5($password));

			$r = $this->jobs_model->check_old_password($this->session->userdata('admin_session'), $data['password']);
			print_r($r);

			// if ($r) {
			// 	$data = array(
			// 		'login'=> array(
			// 			'status'=>'success',
			// 			'message'=>'user found',
			// 			'data'=> $r
			// 		));

			// 	$result = json_encode($data);
			// 	echo $result;
								
			// } else {
			// 	$data = array(
			// 		'login'=> array(
			// 			'status'=>'error',
			// 			'message'=>'user not found',
			// 			'data'=>'null'
			// 		));

			// 	$result = json_encode($data);
			// 	echo $result;
			// }

		}


		public function addTax_post(){
			$nama 		= $this->input->post('nama');
			$nominal 		  		= $this->input->post('nominal');

			$data 				= array(
				'nama' 			=> $nama,
				'nominal'		=> $nominal
		);

		$hi = $this->jobs_model->addTax($data);
		echo $hi;
	}

	public function editTax_post(){
		$id = $this->input->post('id');
		$editHotel = $this->jobs_model->editTax($id);
		echo json_encode($editHotel);
	}

	public function updateTax_post(){
		$id 		  	= $this->input->post('id_tax');
		$nama 			= $this->input->post('nama');
		$nominal 		= $this->input->post('nominal');

		$data = array(
			'id_tax' 				=> $id,
			'nama_modal' 			=> $nama,
			'nominal_modal' 		=> $nominal
		);

		$r = $this->jobs_model->updateTax($data);
		echo json_encode($r);
	}

	public function hapusTax_post(){
		$id = $this->input->post('id');
		$r = $this->jobs_model->hapusTax($id);
		echo $r;
	}

	public function getMasterBuilding_get(){
		$r = $this->jobs_model->getMasterBuilding();
		echo json_encode($r);
	}

	public function getBuildingMaster_get(){
		$r = $this->jobs_model->getBuildingMaster();
		echo json_encode($r);
	}

	public function getTypeCardGuestRegistration_get(){
		$r = $this->jobs_model->getTypeCardGuestRegistration();
		echo json_encode($r);
	}

	public function getDetailRoomChart_post(){
		$id = $this->input->post('id');

		$r = $this->jobs_model->getDetailRoomChart($id);
		echo json_encode($r);
	}

	public function updateRoomChart_post(){
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		
		$data = array(
			'id'=>$id,
			'status'=>$status
		);

		$r = $this->jobs_model->updateRoomChart($data);
		echo json_encode($r);
	}

	public function getFloorReserv_post(){
		$idBuilding = $this->input->post('idBuilding');

		$r = $this->jobs_model->getFloorReserv($idBuilding);
		echo json_encode($r);
	}

	public function getNoReserv_post(){
		$buildingValue = $this->input->post('buildingValue');
    	$floorValue = $this->input->post('floorValue');

    	$data = array(
    		'buildingValue'=>$buildingValue,
      		'floorValue'=>$floorValue,
    	);

    	$r = $this->jobs_model->getNoReserv($data);
    	echo json_encode($r);
	}

	public function getMasterRoom_get(){
		$r = $this->jobs_model->getMasterRoom();
		echo json_encode($r);
	}

	public function getRoomCounter_get(){
		$r = $this->jobs_model->getRoomCounter();
		echo json_encode($r);
	}

	public function getPrintPdfGuest_post(){
		$id_regist = $this->input->post('id_regist');

		$r = $this->jobs_model->getPrintPdfGuest($id_regist);
		echo json_encode($r);
	}



	}

?>
