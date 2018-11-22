<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class jobs_model extends CI_Model {

		public function addHumanResources($data){
			$companyName = $data['companyName'];
			$officeBuilding = $data['officeBuilding'];
			$floor = $data['floor'];
			$address = $data['address'];
			$city = $data['city'];
			$zipCode = $data['zipCode'];
			$province = $data['province'];
			$country = $data['country'];

			$query = $this->db->query("INSERT INTO kiran_human_resources (hr_company_name, hr_office_building, hr_floor, hr_address, hr_city, hr_zip_code, hr_province, hr_country)
										VALUES ('$companyName', '$officeBuilding', '$floor', '$address', '$city', '$zipCode', '$province', '$country')");
			return $query;
		}

		public function addHumanResourcesCP($data){
			$contactPerson = $data['contactPerson'];
			$jobTitle = $data['jobTitle'];
			$phoneNumber = $data['phoneNumber'];
			$ext = $data['ext'];
			$mobilePhone1 = $data['mobilePhone1'];
			$mobilePhone2 = $data['mobilePhone2'];
		
			$query = $this->db->query("INSERT INTO kiran_human_resources_cp (hr_cp_name, hr_cp_job_title, hr_cp_phone_number, hr_cp_ext, hr_cp_mobile_phone_1, hr_cp_mobile_phone_2)
										VALUES ('$contactPerson', '$jobTitle', '$phoneNumber', '$ext', '$mobilePhone1', '$mobilePhone2')");
		}

		// Start Hotel Information

		public function getHotelInformation(){
			$query = $this->db->query("SELECT * FROM hotel_information, hotel_city, hotel_province, hotel_country WHERE city = id_city AND province = id_province AND country = id_country");
			return $query->result_array();
		}

		public function getPromo(){
			$query = $this->db->query("SELECT * FROM hotel_promo");
			return $query->result_array();
		}

		public function addPromo($data){
			$name_promo		 = $data['name_promo'];
			$status_promo	 = $data['status_promo'];
			$start_promo	 = $data['start_promo'];
			$end_promo		 = $data['end_promo'];
			$code_promo		 = $data['code_promo'];

			$query = $this->db->query("INSERT INTO hotel_promo (name_promo, start_date, end_date, status_promo, code_promo)
										VALUES ('$name_promo', '$start_promo', '$end_promo', '$status_promo', '$code_promo')");
			return $query;
		}

		public function editPromo($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT *	FROM hotel_promo WHERE id_promo = '$id' ");
			return $query->result_array();
		}

		public function updatePromo($data)
		{
			$id 		 	= $data['id_promo_modal'];
			$name_promo	 	= $data['name_promo_modal'];
			$status_promo  	= $data['status_promo_modal'];
			$start_promo   	= $data['start_promo_modal'];
			$end_promo 		= $data['end_promo_modal'];
			$code_promo 	= $data['code_promo_modal'];

			$query = $this->db->query("UPDATE hotel_promo SET name_promo ='$name_promo', status_promo ='$status_promo', start_date ='$start_promo', end_date ='$end_promo', code_promo = '$code_promo' WHERE id_promo = '$id' ");
			return $query->result_array();
		}

		public function getHotelInformationPDF(){
			$query = $this->db->query("SELECT *
				FROM `hotel_information` a
				INNER JOIN hotel_city b ON a.city = b.id_city
				INNER JOIN hotel_province c ON a.province = c.id_province
				RIGHT JOIN hotel_country d ON a.country = d.id_country");
			return $query->result_array();
		}

		public function getTypeRoom(){
			$query = $this->db->query("SELECT * FROM master_tipe ORDER BY dsc_tipe ASC");
			return $query->result_array();
		}

		public function getNoRoomEditReservation(){
			$query = $this->db->query("SELECT * FROM master_room ORDER BY no_of_room ASC");
			return $query->result_array();
		}

		public function getTypeCardEditReservation(){
			$query = $this->db->query("SELECT * FROM hotel_type_card ORDER BY type_card ASC");
			return $query->result_array();
		}

		public function getGuestTypeEditReservation(){
			$query = $this->db->query("SELECT * FROM hotel_guest_type ORDER BY guest_type ASC");
			return $query->result_array();
		}

		public function getDetailGuestTypeEditReservation(){
			$query = $this->db->query("SELECT * FROM hotel_detail_guest_type ORDER BY detail ASC");
			return $query->result_array();
		}

		public function getCityHotel(){
			$query = $this->db->query("SELECT * FROM hotel_city ORDER BY name_city ASC");
			return $query->result_array();
		}

		public function getProvinceHotel(){
			$query = $this->db->query("SELECT * FROM hotel_province ORDER BY name_province ASC");
			return $query->result_array();
		}

		public function getCountryHotel(){
			$query = $this->db->query("SELECT * FROM hotel_country");
			return $query->result_array();
		}

		public function getCountryViewReservation(){
			$query = $this->db->query("SELECT * FROM hotel_country ORDER BY name_country ASC");
			return $query->result_array();
		}

		public function getProvinceViewReservation(){
			$query = $this->db->query("SELECT * FROM hotel_province ORDER BY name_province ASC");
			return $query->result_array();
		}

		public function getCityViewReservation(){
			$query = $this->db->query("SELECT * FROM hotel_city ORDER BY name_city ASC");
			return $query->result_array();
		}

		public function getStatusViewReservation(){
			$query = $this->db->query("SELECT * FROM hotel_status_guest ORDER BY nama_status ASC");
			return $query->result_array();
		}

		public function getPayMethodViewReservation(){
			$query = $this->db->query("SELECT * FROM payment_method ORDER BY payment_method ASC");
			return $query->result_array();
		}

		public function getMasterStatus(){
			$query = $this->db->query("SELECT * FROM hotel_status_guest ORDER BY nama_status ASC");
			return $query->result_array();
		}

		public function getStatPayment(){
			$query = $this->db->query("SELECT * FROM hotel_stat_payment ORDER BY status_payment ASC");
			return $query->result_array();
		}

		public function getCountryHotelModal(){
			$query = $this->db->query("SELECT * FROM hotel_country");
			return $query->result_array();
		}

		public function getUserHotel(){
			$query = $this->db->query("SELECT * FROM hotel_user");
			return $query->result_array();
		}

		public function addHotelInformation($data){
			$company_name = $data['company_name'];
			$email = $data['email'];
			$website = $data['website'];
			$phone = $data['phone'];
			$fax = $data['fax'];
			$address = $data['address'];
			$city = $data['city'];
			$zip_code = $data['zip_code'];
			$province = $data['province'];
			$country = $data['country'];

			$query = $this->db->query("INSERT INTO hotel_information (company_name, email, website, phone, fax, address, city, zip_code, province, country)
										VALUES ('$company_name', '$email', '$website', '$phone', '$fax', '$address', '$city', '$zip_code', '$province', '$country')");
			return $query;
		}

		public function hapusHotelInformation($id)
		{
			$query = $this->db->query("DELETE FROM hotel_information WHERE id_hotel='$id'");
			return $query;
		}

		public function hapusGuest($id)
		{
			$query = $this->db->query("DELETE FROM hotel_registration WHERE id_regist='$id'");
			return $query;
		}

		public function hapusUser($id)
		{
			$query = $this->db->query("DELETE FROM hotel_user WHERE id_user='$id'");
			return $query;
		}

		public function hapusSegment($id)
		{
			$query = $this->db->query("DELETE FROM hotel_segmentation WHERE id_segment='$id'");
			return $query;
		}

		public function hapusPromo($id)
		{
			$query = $this->db->query("DELETE FROM hotel_promo WHERE id_promo='$id'");
			return $query;
		}

		public function hapusGuestType($id)
		{
			$query = $this->db->query("DELETE FROM hotel_guest_type WHERE id_guest_type='$id'");
			return $query;
		}

		public function hapusDetailGuestType($id)
		{
			$query = $this->db->query("DELETE FROM hotel_detail_guest_type WHERE id_detail_guest_type='$id'");
			return $query;
		}

		public function updateHotelInformation($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_hotel = $data['id_hotel_edit'];
			$company_name = $data['company_name_edit'];
			$email = $data['email_edit'];
			$website = $data['website_edit'];
			$phone = $data['phone_edit'];
			$fax = $data['fax_edit'];
			$address = $data['address_edit'];
			$city = $data['city_edit'];
			$zip_code = $data['zip_code_edit'];
			$province = $data['province_edit'];
			$country = $data['country_edit'];

			$query = $this->db->query("UPDATE hotel_information SET 
				company_name 	='$company_name', 
				email 		 	='$email', 
				website 	 	='$website', 
				phone 		 	='$phone',
				fax 		 	='$fax',
				address 	 	='$address',
				city 		 	='$city',
				zip_code 	 	='$zip_code',
				province 	 	='$province',
				country 	 	='$country'
				WHERE id_hotel  ='$id_hotel'");
			return $query->result_array();
		}

		public function editHotelInformation($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT *
				FROM `hotel_information` a
				INNER JOIN hotel_country b ON a.country = b.id_country
				INNER JOIN hotel_province c ON a.province = c.id_province
				INNER JOIN hotel_city d ON a.city = d.id_city
				WHERE id_hotel = '$id' ");
			return $query->result_array();
		}

		// public function editRegist($id)
		// {
		// 	$query = $this->db->query("SELECT * FROM hotel_registration WHERE id_regist='$id' ");
		// 	return $query->result_array();
		// }

		public function editGuest($id)
		{
			$query = $this->db->query("SELECT * 
			FROM  `hotel_registration` a
			LEFT JOIN hotel_identity_tipe b  ON a.identity_tipe 	 = b.id_identity_tipe
			LEFT JOIN hotel_country c 		 ON a.regist_country 	 = c.id_country
			LEFT JOIN hotel_province d 		 ON a.regist_province 	 = d.id_province
			LEFT JOIN hotel_city e 			 ON a.regist_city 		 = e.id_city
			LEFT JOIN hotel_status_guest f 	 ON a.status 			 = f.id_status
			LEFT JOIN hotel_currency_guest g ON a.currency 			 = g.id_currency
			LEFT JOIN hotel_agent_guest h 	 ON a.agent 			 = h.id_agent
			LEFT JOIN hotel_grup_guest i 	 ON a.group_registration = i.id_group
			LEFT JOIN master_tipe j 	 	 ON a.guest_room_type 	 = j.id_tipe
			LEFT JOIN master_room k 		 ON a.no_of_room 		 = k.id_room
			WHERE id_regist =  '$id'");
			return $query->result_array();
			
			// SELECT * FROM hotel_registration, hotel_identity_tipe, hotel_agent_guest, master_tipe, hotel_status_guest, hotel_currency_guest WHERE identity_tipe = id_identity_tipe AND agent = id_agent AND guest_room_type = id_tipe AND status = id_status AND currency = id_currency
		}

		// public function editSubFasilitas($id)
		// {
			
		// 	$query = $this->db->query("SELECT * FROM master_detail_fasilitas, master_fasilitas WHERE master_fasilitas.id_fasilitas = master_detail_fasilitas.id_fasilitas AND id_detail='$id' ");
		// 	return $query->result_array();
		// }



		public function ubahUserHotel($id)
		{
			$query = $this->db->query("SELECT * FROM hotel_user WHERE id_user = '$id' ");
			return $query->result_array();
		}

		public function addUser($data){
			$role 		  = $data['role'];
			$user_photo   = $data['user_photo'];
			$full_name    = $data['full_name'];
			$email 		  = $data['email'];
			$mobile_phone = $data['mobile_phone'];
			$password 	  = $data['password'];
			$re_password  = $data['re_password'];

			$query = $this->db->query("INSERT INTO hotel_user (role, user_photo, full_name, email, mobile_phone, password, re_password) 
										VALUES ('$role', '$user_photo', '$full_name', '$email', '$mobile_phone', '$password', '$re_password')");
			return $query;
		}

		function simpan_upload($image){
        $data = array(
                // 'judul' => $judul,
                'user_photo' => $user_photo
            );  
        $result= $this->db->insert('hotel_user',$data);
        return $result;
    }
		// End Hotel Information


    	public function getTax(){
			$query = $this->db->query("SELECT * FROM master_tax");
			return $query->result_array();
		}

		public function getinputHotel(){
			$query = $this->db->query("SELECT * FROM hotel_city");
			return $query->result_array();
		}

		public function getInputProvinceHotel(){
			$query = $this->db->query("SELECT * FROM hotel_province");
			return $query->result_array();
		}

		public function addinputCityHotel($data){
			$name_city = $data['name_city'];

		    $query = $this->db->query("INSERT INTO hotel_city (name_city) VALUES ('$name_city')");
		    return $query;
		}

		public function hapusInputCityHotel($id)
		{
			$query = $this->db->query("DELETE FROM hotel_city WHERE id_city='$id'");
			return $query;
		}

		public function ubahCityHotel($id)
		{
			$query = $this->db->query("SELECT * FROM hotel_city WHERE id_city = '$id' ");
			return $query->result_array();
		}

		public function updateCityHotel($data)
		{	
			$id_city = $data['id_city_edit'];
			$name_city = $data['name_city_edit'];

			$query = $this->db->query("UPDATE hotel_city SET name_city ='$name_city' WHERE id_city = '$id_city' ");
			return $query->result_array();
		}

		public function addprovinceHotel($data){
			$name_province = $data['name_province'];

		    $query = $this->db->query("INSERT INTO hotel_province (name_province) VALUES ('$name_province')");
		    return $query;
		}

		public function ubahProvinceHotel($id)
		{
			$query = $this->db->query("SELECT * FROM hotel_province WHERE id_province = '$id' ");
			return $query->result_array();
		}

		public function updateProvinceHotel($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_province = $data['id_province'];
			$name_province = $data['name_province'];

			$query = $this->db->query("UPDATE hotel_province SET name_province ='$name_province' WHERE id_province = '$id_province' ");
			return $query->result_array();
		}


		public function hapusProvinceHotel($id)
		{
			$query = $this->db->query("DELETE FROM hotel_province WHERE id_province='$id'");
			return $query;
		}

		public function addCountryHotel($data){
			$name_country = $data['name_country'];

		    $query = $this->db->query("INSERT INTO hotel_country (name_country) VALUES ('$name_country')");
		    return $query;
		}

		public function hapusCountryHotel($id)
		{
			$query = $this->db->query("DELETE FROM hotel_country WHERE id_country='$id'");
			return $query;
		}

		public function ubahCountryHotel($id)
		{
			$query = $this->db->query("SELECT * FROM hotel_country WHERE id_country = '$id' ");
			return $query->result_array();
		}

		public function updateCountryHotel($data)
		{
			$id_country = $data['id_country'];
			$name_country = $data['name_country'];

			$query = $this->db->query("UPDATE hotel_country SET name_country ='$name_country' WHERE id_country = '$id_country' ");
			return $query->result_array();
		}

		public function updateUserHotel($data)
		{
			$id_user 	 = $data['id_user'];
			$role 		 = $data['role'];
			$user_photo  = $data['user_photo'];
			$full_name   = $data['full_name'];
			$email 		 = $data['email'];
			$mobile_phone = $data['mobile_phone'];
			$password 	 = md5("hoteluser");
			$re_password = $data['re_password'];

			$query = $this->db->query("UPDATE hotel_user SET role ='$role', user_photo ='$user_photo', full_name ='$full_name', email ='$email', mobile_phone = '$mobile_phone', password ='$password', re_password ='$re_password' WHERE id_user = '$id_user' ");
			return $query->result_array();
		}

		public function addNewGroup($data){
			$name_group = $data['name_group'];

		    $query = $this->db->query("INSERT INTO hotel_grup_guest (name_group) VALUES ('$name_group')");
		    return $query;
		}

		public function addNewSegmentation($data){
			// $name_segment = $data['name_segment'];
			$segment = $data['segment'];

		    $query = $this->db->query("INSERT INTO hotel_segmentation (segment) VALUES ('$segment')");
		    return $query;
		}

		public function addNewRole($data){
			$name_role = $data['name_role'];

		    $query = $this->db->query("INSERT INTO hotel_role (name_role) VALUES ('$name_role')");
		    return $query;
		}

		public function getNewRole(){
			$query = $this->db->query("SELECT * FROM hotel_role");
			return $query->result_array();
		}

		public function hapusNewRole($id)
		{
			$query = $this->db->query("DELETE FROM hotel_role WHERE id_role='$id'");
			return $query;
		}

		public function ubahNewRole($id)
		{
			$query = $this->db->query("SELECT * FROM hotel_role WHERE id_role = '$id' ");
			return $query->result_array();
		}

		public function updateNewRole($data)
		{	
			$id_role = $data['id_role_edit'];
			$name_role = $data['name_role_edit'];

			$query = $this->db->query("UPDATE hotel_role SET name_role ='$name_role' WHERE id_role = '$id_role' ");
			return $query->result_array();
		}

		public function geteditRole(){
			$query = $this->db->query("SELECT * FROM hotel_role WHERE id_role = '$id' ");
			return $query->result_array();
		}

		public function editSegment($id){
			$query = $this->db->query("SELECT * FROM hotel_segmentation WHERE id_segment = '$id' ");
			return $query->result_array();
		}

		public function editGuestType($id){
			$query = $this->db->query("SELECT * FROM hotel_guest_type WHERE id_guest_type = '$id' ");
			return $query->result_array();
		}

		public function editDetailGuestType($id){
			$query = $this->db->query("SELECT * FROM hotel_detail_guest_type WHERE id_detail_guest_type = '$id' ");
			return $query->result_array();
		}

		public function getroleProfile(){
			$query = $this->db->query("SELECT * FROM hotel_role");
			return $query->result_array();
		}

		public function updateMasterAgent($data)
		{	
			$id_agent 	= $data['id_agent'];
			$name_agent = $data['name_agent'];

			$query = $this->db->query("UPDATE hotel_agent_guest SET name_agent ='$name_agent' WHERE id_agent = '$id_agent' ");
			return $query->result_array();
		}

		public function addNewAgent($data){
			$name_agent = $data['name_agent'];

		    $query = $this->db->query("INSERT INTO hotel_agent_guest (name_agent) VALUES ('$name_agent')");
		    return $query;
		}

		public function hapusMasterAgent($id)
		{
			$query = $this->db->query("DELETE FROM hotel_agent_guest WHERE id_agent='$id'");
			return $query;
		}

		public function ubahMasterAgent($id)
		{
			$query = $this->db->query("SELECT * FROM hotel_agent_guest WHERE id_agent = '$id' ");
			return $query->result_array();
		}

		public function get_events_calendar()
		{
			$query = $this->db->query("SELECT * FROM hotel_registration a LEFT JOIN master_tipe b ON a.guest_room_type = b.id_tipe  ");
			return $query->result_array();
		}

		public function ubahMasterGroup($id)
		{
			$query = $this->db->query("SELECT * FROM hotel_grup_guest WHERE id_group = '$id' ");
			return $query->result_array();
		}

		public function hapusMasterGroup($id)
		{
			$query = $this->db->query("DELETE FROM hotel_grup_guest WHERE id_group='$id'");
			return $query;
		}

		public function getviewProfile(){
			$query = $this->db->query("SELECT * FROM hotel_user a
				LEFT JOIN hotel_role b ON a.role = b.id_role");
			return $query->result_array();
		}

		public function getregistrationGuest(){
			$query = $this->db->query("SELECT * FROM hotel_registration a
				LEFT JOIN hotel_status_guest b 	 ON a.status 			 = b.id_status
				LEFT JOIN hotel_agent_guest c 	 ON a.agent 			 = c.id_agent
				LEFT JOIN master_tipe d 		 ON a.guest_room_type 	 = d.id_tipe
				LEFT JOIN master_room e 		 ON a.floor 			 = e.floor");
			return $query->result_array();
		}

		public function getmasterAgent(){
			$query = $this->db->query("SELECT * FROM hotel_agent_guest");
			return $query->result_array();
		}

		public function getmasterGroup(){
			$query = $this->db->query("SELECT * FROM hotel_grup_guest");
			return $query->result_array();
		}

		public function getReservation(){
	$query = $this->db->query("SELECT a.*, d.name_room,d.type_room,d.no_of_room,b.name_identity from hotel_reservation a LEFT JOIN hotel_identity_tipe b ON a.identity_tipe = b.id_identity_tipe LEFT JOIN master_tipe c ON a.room_type = c.id_tipe LEFT JOIN master_room d ON a.no_of_room = d.id_room");
			return $query->result_array();
		}


		public function addReservTORegistrationGuest($data){

			$TittleRegistrationEditModal				= $data['tittle_edit2'];            
			$FirstNameRegistrationEditModal         	= $data['first_name_edit2'];
			$MiddleNameRegistrationEditModal        	= $data['middle_name_edit2'];
			$LastnameRegistrationEditModal          	= $data['last_name_edit2'];
			$PhoneRegistrationEditModal             	= $data['phone_number_cp_modal2'];
			$GuestTypeRegistrationEditModal         	= $data['guest_type'];
			$DetailRegistrationEditModal            	= $data['DetailGuestTypeReservationEditModal'];
			$EmailRegistrationEditModal             	= $data['email_cp_edit2'];
			$DepositRegistrationEditModal           	= $data['pay_method'];
			$TypeCardRegistrationEditModal          	= $data['TypeCardReservationEditModal'];
			$CardNoRegistrationEditModal            	= $data['CardNoReservationEditModal'];
			$ExpiredDateRegistrationEditModal       	= $data['exp_date_edit2'];
			$BuildingRegistrationEditModal          	= $data['building_edit2'];
			$FloorRegistrationEditModal             	= $data['floor_edit2'];
			$NoRoomRegistrationEditModal            	= $data['no_room_edit2'];
			$RoomRateRegistrationEditModal          	= $data['room_rate_edit2'];
			$TypeRoomRegistrationEditModal          	= $data['room_type_edit2'];
			$TotalPaxRegistrationEditModal          	= $data['total_edit2'];
			$StatusRegistrationEditModal            	= $data['status_edit2'];
			$SpesialRequestRegistrationEditModal    	= $data['spesial_request_edit2'];
			$CheckInRegistrationEditModal           	= $data['arrival_edit2'];
			$CheckOutRegistrationEditModal          	= $data['departure_edit2'];

			// $segmentation  	 	= $data['segment_edit2'];
			// $guest_type 		= $data['guest_type_edit2'];
			// $detail_guest_type  = $data['detail_guest_type'];
			// $tittle				= $data['tittle_edit2'];
			// $first_name  	 	= $data['first_name_edit2'];
			// $middle_name  	 	= $data['middle_name_edit2'];
			// $last_name  	 	= $data['last_name_edit2'];
			// $file_name      	= $data['identity_foto'];
			// $identity_tipe   	= $data['identity_type_edit2'];
			// $identity_number 	= $data['identity_number_edit2'];
			// $gender 		 	= $data['gender_view_reservation'];
			// $email 			 	= $data['email_edit2'];
			// $phone 			 	= $data['phone_number_edit2'];
			// $regist_country  	= $data['regist_country_viewReserv'];
			// $regist_province 	= $data['regist_province_viewReserv'];
			// $regist_city 	 	= $data['regist_city_viewReserv'];
			// $zip_code 		 	= $data['zip_code'];
			// $address 		 	= $data['address_edit2'];
			// $date1			 	= $data['arrival_edit2'];
			// $date2 			 	= $data['departure_edit2'];
			// $total_pax 			= $data['total_edit2'];
			// $room_type 			= $data['room_type_edit2'];
			// $room_rate   		= $data['room_rate_edit2'];
			// $no_of_room 		= $data['no_room_edit2'];
			// $status 		 	= $data['status_edit2'];
			// $remarks 			= $data['remarks_edit2'];
			// $pay_method		 	= $data['pay_method'];
			// $stat_payment 		= $data['stat_payment'];
			// $tot_bill 			= $data['tot_bill'];

			// $currency 		 	= $data['currency'];
			// $agent 			 	= $data['agent'];
			// $group_registration = $data['group_registration'];
			// $valid_code		 	= $data['val_code'];

			$query = $this->db->query("INSERT INTO hotel_registration 
				(	

					tittle, 
					first_name, 
					middle_name, 
					last_name,
					phone,
					guest_type,
					detail_guest_type,
					email,
					pay_method,
					type_card,
					card_no,
					expired_date,
					building,
					floor,
					no_of_room,
					room_rate,
					guest_room_type,
					total_pax,
					status,
					spesial_request,
					adf_date,
					adt_date
				)
				
				VALUES 

				(
					'$TittleRegistrationEditModal',
					'$FirstNameRegistrationEditModal', 
					'$MiddleNameRegistrationEditModal', 
					'$LastnameRegistrationEditModal',
					'$PhoneRegistrationEditModal', 
					'$GuestTypeRegistrationEditModal', 
					'$DetailRegistrationEditModal', 
					'$EmailRegistrationEditModal', 
					'$DepositRegistrationEditModal', 
					'$TypeCardRegistrationEditModal', 
					'$CardNoRegistrationEditModal',
					'$ExpiredDateRegistrationEditModal',
					'$BuildingRegistrationEditModal', 
					'$FloorRegistrationEditModal', 
					'$NoRoomRegistrationEditModal', 
					'$RoomRateRegistrationEditModal',
					'$TypeRoomRegistrationEditModal',
					'$TotalPaxRegistrationEditModal',
					'$StatusRegistrationEditModal',
					'$SpesialRequestRegistrationEditModal',					
					'$CheckInRegistrationEditModal',
					'$CheckOutRegistrationEditModal'
				)"
			);
			return $query;
		}

		public function addRegistrationGuest($data){

			$TittleRegistrationGuest 					= $data['TittleRegistrationGuest'];
			$FirstNameRegistrationGuest 				= $data['FirstNameRegistrationGuest'];
			$SurnameRegistrationGuest 					= $data['SurnameRegistrationGuest'];				
			$AddressRegistrationGuest 					= $data['AddressRegistrationGuest'];			
			$CountryRegistrationGuest 					= $data['CountryRegistrationGuest'];			
			$CityRegistrationGuest   					= $data['CityRegistrationGuest'];			
			$ZipCodeRegistrationGuest 					= $data['ZipCodeRegistrationGuest'];			
			$PhoneRegistrationGuest 					= $data['PhoneRegistrationGuest'];			
			$GuestTypeRegistrationGuest 				= $data['GuestTypeRegistrationGuest'];			
			$DetailGuestTypeRegistrationGuest			= $data['DetailGuestTypeRegistrationGuest'];			
			$JabatanRegistrationGuest 					= $data['JabatanRegistrationGuest'];			
			$IdentityTypeRegistrationGuest				= $data['IdentityTypeRegistrationGuest'];			
			$IdentityNumberRegistrationGuest			= $data['IdentityNumberRegistrationGuest'];			
			$DateBirthRegistrationGuest					= $data['DateBirthRegistrationGuest'];			
			$EmailRegistrationGuest 					= $data['EmailRegistrationGuest'];			
			$NationalityRegistrationGuest				= $data['NationalityRegistrationGuest'];			
			$DepositRegistrationGuest 					= $data['DepositRegistrationGuest'];			
			$TypeCardRegistrationGuest 					= $data['TypeCardRegistrationGuest'];			
			$CardNoRegistrationGuest 					= $data['CardNoRegistrationGuest'];			
			$ExpDateRegistrationGuest 					= $data['ExpDateRegistrationGuest'];			
			$ReservByRegistrationGuest 					= $data['ReservByRegistrationGuest'];			
			$CheckedByRegistrationGuest					= $data['CheckedByRegistrationGuest'];			
			$PurposeofVisitRegistrationGuest    		= $data['PurposeofVisitRegistrationGuest'];			
			$RoomTypeRegistrationGuest  				= $data['room_type'];			
			$BuildingRegistration   					= $data['BuildingRegistration'];			
			$FloorRegistrationGuest  					= $data['FloorRegistration'];			
			$NoOfRoomRegistrationGuest 					= $data['no_of_room'];			
			$RoomRateRegistrationGuest 					= $data['room_rate'];			
			$IdentityFotoRegistrationGuest				= $data['identity_foto'];			
			
			$CheckInDateRegistrationGuest 				= $data['CheckInDateRegistrationGuest'];
			$CheckInTimeRegistrationGuest 				= $data['CheckInTimeRegistrationGuest'];

			$CheckOutDateRegistrationGuest 				= $data['CheckOutDateRegistrationGuest'];
			$CheckOutTimeRegistrationGuest 				= $data['CheckOutTimeRegistrationGuest'];

			$TotalPaxRegistrationGuest 					= $data['TotalPaxRegistrationGuest'];
			$StatusRegistrationGuest 					= $data['StatusRegistrationGuest'];			
			$TotalBillRegistrationGuest 				= $data['TotalBillRegistrationGuest'];			
			$AdultRegistrationGuest 					= $data['AdultRegistrationGuest'];			
			$ChildRegistrationGuest 					= $data['ChildRegistrationGuest'];			
			$SpesialRequestRegistrationGuest    		= $data['SpesialRequestRegistrationGuest'];		


			// $segmentation  	 	= $data['segment'];
			// $guest_type 		= $data['guest_type'];
			// $detail_guest_type  = $data['detail_guest_type'];
			// $tittle				= $data['tittle'];
			// $first_name  	 	= $data['first_name'];
			// $middle_name  	 	= $data['middle_name'];
			// $last_name  	 	= $data['last_name'];
			// $identity_foto  	= $data['identity_foto'];
			// $identity_tipe   	= $data['identity_tipe'];
			// $identity_number 	= $data['identity_number'];
			// $gender 		 	= $data['gender'];
			// $email 			 	= $data['email'];
			// $phone 			 	= $data['phone'];
			// $regist_country  	= $data['regist_country'];
			// $regist_country_2  	= $data['regist_country_2'];
			// $regist_province 	= $data['regist_province'];
			// $regist_province_2 	= $data['regist_province_2'];
			// $regist_city 	 	= $data['regist_city'];
			// $regist_city_2 	 	= $data['regist_city_2'];
			// $zip_code 		 	= $data['zip_code'];
			// $address 		 	= $data['address'];
			// $date1			 	= $data['date1'];
			// $date2 			 	= $data['date2'];
			// $total_pax 			= $data['total_pax'];
			// $room_type 			= $data['room_type'];
			// $building 			= $data['building'];
			// $floor 				= $data['floor'];			
			// $room_rate   		= $data['room_rate'];
			// $no_of_room 		= $data['no_of_room'];
			// $status 		 	= $data['status'];
			// $remarks 			= $data['remarks'];
			// $pay_method		 	= $data['pay_method'];
			// $stat_payment 		= $data['stat_payment'];
			// $tot_bill 			= $data['tot_bill'];

			// $currency 		 	= $data['currency'];
			// $agent 			 	= $data['agent'];
			// $group_registration = $data['group_registration'];
			// $valid_code		 	= $data['val_code'];

			$query = $this->db->query("INSERT INTO hotel_registration 
				(

					tittle,
					first_name,
					surname,
					address,
					regist_country,
					city_text,
					zip_code,
					phone,
					guest_type,
					detail_guest_type,
					jabatan,
					identity_tipe,
					identity_number,
					date_of_birth,
					email,
					regist_nationality,
					pay_method,
					type_card,
					card_no,
					expired_date,
					registration_handled,
					checked_by,
					purpose_of_visit,
					guest_room_type,
					building,
					floor,
					no_of_room,
					room_rate,
					identity_foto,
					arr_date,
					arr_time,
					dprt_date,
					dprt_time,
					total_pax,
					status,
					tot_bill,
					regist_adult,
					regist_child,
					spesial_request
				)
				
				VALUES 

				(

					'$TittleRegistrationGuest',
					'$FirstNameRegistrationGuest',
					'$SurnameRegistrationGuest',
					'$AddressRegistrationGuest',
					'$CountryRegistrationGuest',
					'$CityRegistrationGuest',
					'$ZipCodeRegistrationGuest',
					'$PhoneRegistrationGuest',
					'$GuestTypeRegistrationGuest',
					'$DetailGuestTypeRegistrationGuest',
					'$JabatanRegistrationGuest',
					'$IdentityTypeRegistrationGuest',
					'$IdentityNumberRegistrationGuest',
					'$DateBirthRegistrationGuest',
					'$EmailRegistrationGuest',
					'$NationalityRegistrationGuest',
					'$DepositRegistrationGuest',
					'$TypeCardRegistrationGuest',
					'$CardNoRegistrationGuest',
					'$ExpDateRegistrationGuest',
					'$ReservByRegistrationGuest',
					'$CheckedByRegistrationGuest',
					'$PurposeofVisitRegistrationGuest',
					'$RoomTypeRegistrationGuest',
					'$BuildingRegistration',
					'$FloorRegistrationGuest',
					'$NoOfRoomRegistrationGuest',
					'$RoomRateRegistrationGuest',
					'$IdentityFotoRegistrationGuest',
					'$CheckInDateRegistrationGuest',
					'$CheckInTimeRegistrationGuest',
					'$CheckOutDateRegistrationGuest',
					'$CheckOutTimeRegistrationGuest',
					'$StatusRegistrationGuest',
					'$TotalPaxRegistrationGuest',
					'$TotalBillRegistrationGuest',
					'$AdultRegistrationGuest',
					'$ChildRegistrationGuest',
					'$SpesialRequestRegistrationGuest'				
					
				)"
			);
			return $query;
		}


		public function addRegistrationReservation($data){


		// 	for($i=0; $i<$TotalPaxReservation; $i++){
			
			$TittleReservation					= $data['TittleReservation'];
			$FirstNameReservation				= $data['FirstNameReservation'];
			$SurnameReservation 				= $data['SurnameReservation'];
			// $MiddleNameReservation				= $data['MiddleNameReservation'];
			// $LastNameReservation				= $data['LastNameReservation'];
			// $ArrivalDateReservation				= $data['ArrivalDateReservation'];
			// $DepartDateReservation				= $data['DepartDateReservation'];
			$ArrDateReservation	    			= $data['ArrDateReservation'];
			$ArrTimeReservation		    		= $data['ArrTimeReservation'];
			$DprtDateReservation				= $data['DprtDateReservation'];
			$DprtTimeReservation				= $data['DprtTimeReservation'];
			$TotalPaxReservation				= $data['TotalPaxReservation'];
			$RoomTypeReservation				= $data['RoomTypeReservation'];
			$NoRoomReservation					= $data['NoRoomReservation'];
			$RoomRateReservation				= $data['RoomRateReservation'];
			$SpesialRequestReservation			= $data['SpesialRequestReservation'];
			$BillingInstructionReservation		= $data['BillingInstructionReservation'];
			$DepositByReservation				= $data['DepositByReservation'];
			$TypeCardReservation				= $data['TypeCardReservation'];
			$CardNoReservation					= $data['CardNoReservation'];
			$ExpiredDateReservation				= $data['ExpDateReservation'];
			$NoteReservation					= $data['NoteReservation'];
			$StatusReservation 					= $data['StatusReservation'];
			$GuestTypeReservation 				= $data['GuestTypeReservation'];
			$DetailGuestTypeReservation 		= $data['DetailGuestTypeReservation'];
			$RemarksReservation					= $data['RemarksReservation'];
			$TittleCPReservation				= $data['TittleCPReservation'];
			$FirstNameCPReservation				= $data['FirstNameCPReservation'];
			$SurnameCPReservation				= $data['SurnameCPReservation'];
			// $MiddleNameCPReservation			= $data['MiddleNameCPReservation'];
			// $LastNameCPReservation				= $data['LastNameCPReservation'];
			$PhoneNumberCPReservation			= $data['PhoneNumberCPReservation'];
			$EmailCPReservation					= $data['EmailCPReservation'];
			$DateTimeCPReservation				= $data['DateTimeCPReservation'];
			$ReservByReservation				= $data['ReservByReservation'];
			$BuildingReservation				= $data['BuildingReservation'];
			$FloorReservation					= $data['FloorReservation'];

			$query = $this->db->query("INSERT INTO hotel_reservation 
			(	
				tittle,
				first_name,
				surname,
				-- middle_name,
				-- last_name,
				-- arrival_date,
				-- depart_date,
				arr_date,
				arr_time,
				dprt_date,
				dprt_time,
				total_pax,
				room_type,
				no_of_room,
				room_rate,
				spesial_request,
				billing_instruction,
				pay_method,
				type_card,
				card_no,
				expired_date,
				note,
				status,
				guest_type,
				detail_guest_type,
				remarks,
				tittleCP,
				first_nameCP,
				surnameCP,
				-- middle_nameCP,
				-- last_nameCP,
				phoneCP,
				emailCP,
				datetimeCP,
				reservation_handle_by,
				building,
				floor				
			)
			VALUES 
			(	
				'$TittleReservation',
				'$FirstNameReservation',
				'$SurnameReservation',
				'$ArrDateReservation',
				'$ArrTimeReservation',
				'$DprtDateReservation',
				'$DprtTimeReservation',
				'$TotalPaxReservation',
				'$RoomTypeReservation',
				'$NoRoomReservation',
				'$RoomRateReservation',
				'$SpesialRequestReservation',
				'$BillingInstructionReservation',
				'$DepositByReservation',
				'$TypeCardReservation',
				'$CardNoReservation',
				'$ExpiredDateReservation',
				'$NoteReservation',
				'$StatusReservation',
				'$GuestTypeReservation',
				'$DetailGuestTypeReservation',
				'$RemarksReservation',
				'$TittleCPReservation',
				'$FirstNameCPReservation',
				'$SurnameCPReservation',
				'$PhoneNumberCPReservation',
				'$EmailCPReservation',
				'$DateTimeCPReservation',
				'$ReservByReservation',
				'$BuildingReservation',
				'$FloorReservation'
			)"
		); 

			return $query;
		}

		public function getBuilding(){
			$query = $this->db->query("SELECT * FROM master_building ORDER BY name_building ASC");
			return $query->result_array();
		}

		public function getFloor(){
			$query = $this->db->query("SELECT * FROM master_room ORDER BY floor ASC");
			return $query->result_array();
		}

		public function getBillingInstruction(){
			$query = $this->db->query("SELECT * FROM hotel_billing_instruction ORDER BY billing_instruction ASC");
		}

		public function getIdentityTipe(){
			$query = $this->db->query("SELECT * FROM hotel_identity_tipe ORDER BY name_identity ASC");
			return $query->result_array();
		}

		public function getCountryRegist(){
			$query = $this->db->query("SELECT * FROM hotel_country");
			return $query->result_array();
		}

		public function getProvinceRegist(){
			$query = $this->db->query("SELECT * FROM hotel_province");
			return $query->result_array();
		}

		public function getCityRegist(){
			$query = $this->db->query("SELECT * FROM hotel_city");
			return $query->result_array();
		}

		public function getCountryGuestModal(){
			$query = $this->db->query("SELECT * FROM hotel_country");
			return $query->result_array();
		}

		public function getProvinceGuestModal(){
			$query = $this->db->query("SELECT * FROM hotel_province");
			return $query->result_array();
		}

		public function getCityGuestModal(){
			$query = $this->db->query("SELECT * FROM hotel_city");
			return $query->result_array();
		}

		public function getStatusGuestModal(){
			$query = $this->db->query("SELECT * FROM hotel_status_guest");
			return $query->result_array();
		}

		public function getStatus(){
			$query = $this->db->query("SELECT * FROM hotel_status_guest ORDER BY nama_status");
			return $query->result_array();
		}

		public function getCurrencyGuestModal(){
			$query = $this->db->query("SELECT * FROM hotel_currency_guest");
			return $query->result_array();
		}

		public function getAgentGuestModal(){
			$query = $this->db->query("SELECT * FROM hotel_agent_guest");
			return $query->result_array();
		}

		public function getRTypeGuestModal(){
			$query = $this->db->query("SELECT * FROM master_tipe");
			return $query->result_array();
		}

		public function getRegionRegist(){
			$query = $this->db->query("SELECT * FROM hotel_region");
			return $query->result_array();
		}

		public function getStatusRegist(){
			$query = $this->db->query("SELECT * FROM hotel_status_guest ORDER BY nama_status");
			return $query->result_array();
		}

		public function getCurrencyRegist(){
			$query = $this->db->query("SELECT * FROM hotel_currency_guest ORDER BY name_currency ASC");
			return $query->result_array();
		}

		public function getAgentRegist(){
			$query = $this->db->query("SELECT * FROM hotel_agent_guest ORDER BY name_agent ASC");
			return $query->result_array();
		}

		public function getRoomTypeRegist(){
			$query = $this->db->query("SELECT * FROM master_tipe ORDER BY dsc_tipe ASC");
			return $query->result_array();
		}

		public function getRoomTypeModal(){
			$query = $this->db->query("SELECT * FROM master_tipe ORDER BY dsc_tipe ASC");
			return $query->result_array();
		}

		public function getNoRoomRegist(){
			$query = $this->db->query("SELECT * FROM master_room ORDER BY no_of_room ASC");
			return $query->result_array();
		}

		public function getNoRoomModal(){
			$query = $this->db->query("SELECT * FROM master_room ORDER BY no_of_room ASC");
			return $query->result_array();
		}

		public function getDetailFasilitas(){
			$query = $this->db->query("SELECT * FROM master_detail_fasilitas ORDER BY dsc_detail ASC");
			return $query->result_array();
		}

		public function getSegmentationRegist(){
			$query = $this->db->query("SELECT * FROM hotel_segmentation ORDER BY segment ASC");
			return $query->result_array();
		}

		public function getSegmentationViewRegist(){
			$query = $this->db->query("SELECT * FROM hotel_segmentation ORDER BY segment ASC");
			return $query->result_array();
		}

		public function getGuestTypeRegist(){
			$query = $this->db->query("SELECT * FROM hotel_guest_type ORDER BY guest_type ASC");
			return $query->result_array();
		}

		public function getStatusReservation(){
			$query = $this->db->query("SELECT * FROM hotel_status_guest ORDER BY nama_status ASC");
			return $query->result_array();
		}

		public function getGuestTypeViewRegist(){
			$query = $this->db->query("SELECT * FROM hotel_guest_type ORDER BY guest_type ASC");
			return $query->result_array();
		}

		public function getDetailGuestTypeRegist(){
			$query = $this->db->query("SELECT * FROM hotel_detail_guest_type ORDER BY detail ASC");
			return $query->result_array();
		}

		public function getTypeCard(){
			$query = $this->db->query("SELECT * FROM hotel_type_card ORDER BY type_card ASC");
			return $query->result_array();
		}

		public function getDetailGuestTypeViewRegist(){
			$query = $this->db->query("SELECT * FROM hotel_detail_guest_type ORDER BY detail ASC");
			return $query->result_array();
		}

		public function getHotelCountryViewRegist(){
			$query = $this->db->query("SELECT * FROM hotel_country ORDER BY name_country");
			return $query->result_array();
		}

		public function getTipeRoomViewRegist(){
			$query = $this->db->query("SELECT * FROM master_tipe ORDER BY dsc_tipe");
			return $query->result_array();
		}

		public function getTypeCardViewRegist(){
			$query = $this->db->query("SELECT * FROM hotel_type_card ORDER BY type_card");
			return $query->result_array();
		}

		public function getBuildingViewRegist(){
			$query = $this->db->query("SELECT * FROM master_building ORDER BY name_building");
			return $query->result_array();
		}

		public function getNoRoomViewRegist(){
			$query = $this->db->query("SELECT * FROM master_room ORDER BY no_of_room");
			return $query->result_array();
		}

		public function getCurrencyViewRegist(){
			$query = $this->db->query("SELECT * FROM hotel_currency_guest ORDER BY name_currency");
			return $query->result_array();
		}

		public function getGroupRegist(){
			$query = $this->db->query("SELECT * FROM hotel_grup_guest ORDER BY name_group ASC");
			return $query->result_array();
		}

		public function getDetailNew($id_detail_guest_type){
			$query = $this->db->query("SELECT * FROM hotel_detail_guest_type WHERE id_join_guest_type='$id_detail_guest_type' ORDER BY detail ASC");
			return $query->result_array();
		}

		public function getCityNew($id_city){
			$query = $this->db->query("SELECT * FROM hotel_city WHERE id_city_province='$id_city' ORDER BY name_city ASC");
			return $query->result_array();
		}

		public function getProvinceNew($id_province){
			$query = $this->db->query("SELECT * FROM hotel_province WHERE id_province_country='$id_province' ORDER BY name_province ASC");
			return $query->result_array();
		}

		public function getCityRegistration($id_city){
			$query = $this->db->query("SELECT * FROM hotel_city WHERE id_city_province='$id_city' ORDER BY name_city ASC");
			return $query->result_array();
		}

		public function getProvinceRegistration($id_province){
			$query = $this->db->query("SELECT * FROM hotel_province WHERE id_province_country='$id_province' ORDER BY name_province ASC");
			return $query->result_array();
		}

		public function getCityGuest($id_city){
			$query = $this->db->query("SELECT * FROM hotel_city WHERE id_city_province='$id_city' ORDER BY name_city ASC");
			return $query->result_array();
		}

		public function getProvinceGuest($id_province){
			$query = $this->db->query("SELECT * FROM hotel_province WHERE id_province_country='$id_province' ORDER BY name_province ASC");
			return $query->result_array();
		}

		public function getNoRoomGuest($id_regist){
			$query = $this->db->query("SELECT * FROM hotel_registration WHERE no_of_room='$id_regist' ORDER BY no_of_room ASC");
			return $query->result_array();
		}

		public function getCityHIModal($id_city){
			$query = $this->db->query("SELECT * FROM hotel_city WHERE id_city_province='$id_city' ORDER BY name_city ASC");
			return $query->result_array();
		}

		public function getProvinceHIModal($id_province){
			$query = $this->db->query("SELECT * FROM hotel_province WHERE id_province_country='$id_province' ORDER BY name_province ASC");
			return $query->result_array();
		}

		public function getCityModal($id_city){
			$query = $this->db->query("SELECT * FROM hotel_city WHERE id_city_province='$id_city' ORDER BY name_city ASC");
			return $query->result_array();
		}

		public function getProvinceModal($id_province){
			$query = $this->db->query("SELECT * FROM hotel_province WHERE id_province_country='$id_province' ORDER BY name_province ASC");
			return $query->result_array();
		}

		public function getGuest(){
			$query = $this->db->query("SELECT a.*,b.name_identity, h.name_room,h.type_room,h.no_of_room as noRooms from hotel_registration a LEFT JOIN hotel_identity_tipe b ON a.identity_tipe = b.id_identity_tipe LEFT JOIN hotel_country c ON a.regist_country = c.id_country LEFT JOIN hotel_province d ON a.regist_province = d.id_province LEFT JOIN hotel_city e ON a.regist_city = e.id_city LEFT JOIN hotel_status_guest f ON a.status = f.id_status LEFT JOIN master_tipe g ON a.guest_room_type = g.id_tipe LEFT JOIN master_room h ON a.id_regist = h.id_room LEFT JOIN hotel_guest_type i ON a.guest_type = i.id_guest_type
			");
			return $query->result_array();
		}

		// public function getGuestPDF(){
		// 	$query = $this->db->query("SELECT a.*,b.name_identity, h.name_room,h.type_room,h.no_of_room from hotel_registration a LEFT JOIN hotel_identity_tipe b ON a.identity_tipe = b.id_identity_tipe LEFT JOIN hotel_country c ON a.regist_country = c.id_country LEFT JOIN hotel_province d ON a.regist_province = d.id_province LEFT JOIN hotel_city e ON a.regist_city = e.id_city LEFT JOIN hotel_status_guest f ON a.status = f.id_status LEFT JOIN master_tipe g ON a.guest_room_type = g.id_tipe LEFT JOIN master_room h ON a.no_of_room = h.id_room LEFT JOIN hotel_guest_type i ON a.guest_type = i.id_guest_type
		// 	");
		// 	return $query->result_array();
		// }


		public function getGuestPrint($id_regist){
			$query = $this->db->query("SELECT * FROM hotel_registration, hotel_identity_tipe, hotel_agent_guest, master_tipe, hotel_status_guest, hotel_grup_guest WHERE identity_tipe = id_identity_tipe AND agent = id_agent AND guest_room_type = id_room AND status = id_status AND group_registration = id_group AND no_of_room = id_room AND id_regist = '$id_regist' ");
			return $query->result_array();
		}

		public function getLaporanPDF($id)
		{
			$query = $this->db->query("SELECT * FROM `hotel_registration` a 
				LEFT JOIN hotel_identity_tipe b  ON a.identity_tipe   	 = b.id_identity_tipe 
				LEFT JOIN hotel_status_guest c   ON a.status 		  	 = c.id_status 
				LEFT JOIN hotel_agent_guest d    ON a.agent 		  	 = d.id_agent 
				LEFT JOIN hotel_currency_guest e ON a.currency 		  	 = e.id_currency 
				LEFT JOIN master_tipe f 		 ON a.guest_room_type 	 = f.id_tipe 
				LEFT JOIN hotel_city g 			 ON a.regist_city 	  	 = g.id_city 
				LEFT JOIN hotel_province h 		 ON a.regist_province 	 = h.id_province 
				LEFT JOIN hotel_country i 		 ON a.regist_country 	 = i.id_country 
				LEFT JOIN hotel_grup_guest j 	 ON a.group_registration = j.id_group 
				LEFT JOIN hotel_agent_guest k 	 ON a.agent 			 = k.id_agent 
				LEFT JOIN master_tipe l 		 ON a.guest_room_type 	 = l.id_tipe 
				LEFT JOIN master_room m 		 ON a.no_of_room 		 = m.id_room 
				WHERE id_regist='$id'");
			return $query->result_array();
			
			// SELECT * FROM hotel_registration, hotel_identity_tipe, hotel_agent_guest, master_tipe, hotel_status_guest, hotel_currency_guest WHERE identity_tipe = id_identity_tipe AND agent = id_agent AND guest_room_type = id_tipe AND status = id_status AND currency = id_currency
		}

		public function getHeightfasilitas()
		{
			$query = $this->db->query("select A.FAS,A.IDFAS,A.DESCDET, CASE WHEN B.id_master_room_fasilitas IS NOT NULL THEN 'ADA' ELSE 'TIDAKADA' END AS addressexists from (SELECT a.dsc_fasilitas AS FAS, b.id_detail AS IDFAS, b.dsc_detail AS DESCDET FROM `master_fasilitas` a LEFT JOIN master_detail_fasilitas b ON a.id_fasilitas = b.id_fasilitas ORDER BY `a`.`dsc_fasilitas` ASC ) A left join (SELECT id_master_room_fasilitas, id_room , id_detail FROM master_room_fasilitas where id_room='187') B on A.IDFAS=B.id_detail ");
			return $query->result_array();
			
			// SELECT * FROM hotel_registration, hotel_identity_tipe, hotel_agent_guest, master_tipe, hotel_status_guest, hotel_currency_guest WHERE identity_tipe = id_identity_tipe AND agent = id_agent AND guest_room_type = id_tipe AND status = id_status AND currency = id_currency
		}

		public function getSegmentation(){
			$query = $this->db->query("SELECT * FROM hotel_segmentation");
			return $query->result_array();
		}

		public function getSegmentationReservation(){
			$query = $this->db->query("SELECT * FROM hotel_segmentation ORDER BY segment");
			return $query->result_array();
		}

		public function getguestTypeReservation(){
			$query = $this->db->query("SELECT * FROM hotel_guest_type ORDER BY guest_type ASC");
			return $query->result_array();
		}

		public function getDetailGuestTypeReservation(){
			$query = $this->db->query("SELECT * FROM hotel_detail_guest_type");
			return $query->result_array();
		}

		public function getguestType(){
			$query = $this->db->query("SELECT * FROM hotel_guest_type ORDER BY guest_type ASC");
			return $query->result_array();
		}

		public function getguestTypeDetail(){
			$query = $this->db->query("SELECT * FROM hotel_guest_type");
			return $query->result_array();
		}

		public function getviewGuestTypeDetail(){
			$query = $this->db->query("SELECT * FROM hotel_detail_guest_type ORDER BY detail_type_guest ASC");
			return $query->result_array();
		}



/*-------------------------------------------------------------------------------------------------------------------------------*/

		public function getHumanResources(){
			$query = $this->db->query("SELECT * FROM kiran_human_resources");
			return $query->result_array();
		}

		

		public function addCourse($data){
			$courseName = $data['courseName'];
			$type = $data['type'];

			$query = $this->db->query("INSERT INTO kiran_course (course_name, course_type) VALUES ('$courseName', '$type')");
			return $query;
		}

		public function getCourse(){
			$query = $this->db->query("SELECT * FROM kiran_course");
			return $query->result_array();
		}

		public function addChapter($data){
			$courseName = $data['courseName'];
			$chapter = $data['chapter'];
			$duration = $data['duration'];

			$query = $this->db->query("INSERT INTO kiran_chapter (chapter_course_name, chapter_name, chapter_duration) 
										VALUES ('$courseName', '$chapter', '$duration')");
			return $query;
		}

		public function getChapter(){
			$query = $this->db->query("SELECT * FROM kiran_chapter");
			return $query->result_array();
		}

		public function addCity($city){
			$query = $this->db->query("INSERT INTO kiran_city (city_name) 
										VALUES ('$city')");
			return $query;
		}

		public function addProvince($province){
			$query = $this->db->query("INSERT INTO kiran_province (province_name) 
										VALUES ('$province')");
			return $query;
		}

		public function addCountry($country){
			$query = $this->db->query("INSERT INTO kiran_country (country_name) 
										VALUES ('$country')");
			return $query;
		}

		public function getCity(){
			$query = $this->db->query("SELECT * FROM kiran_city");
			return $query->result_array();
		}

		public function getProvince(){
			$query = $this->db->query("SELECT * FROM kiran_province");
			return $query->result_array();
		}

		public function getCountry(){
			$query = $this->db->query("SELECT * FROM kiran_country");
			return $query->result_array();
		}

		public function getRoleHotel(){
			$query = $this->db->query("SELECT * FROM hotel_role");
			return $query->result_array();
		}

		public function addReligion($religion){
			$query = $this->db->query("INSERT INTO kiran_religion (religion_name)
										VALUES ('$religion')");
			return $query;
		}

		public function getReligion(){
			$query = $this->db->query("SELECT * FROM kiran_religion");
			return $query->result_array();
		}

		public function addTypeOfTraining($typeTraining){
			$query = $this->db->query("INSERT INTO kiran_type_training (tt_name)
										VALUES ('$typeTraining')");
			return $query;
		}

		public function getTypeTraining(){
			$query = $this->db->query("SELECT * FROM kiran_type_training");
			return $query->result_array();
		}

		public function addTypeOfExdepro($typeExdepro){
			$query = $this->db->query("INSERT INTO kiran_type_exdepro (te_name)
										VALUES ('$typeExdepro')");
			return $query;
		}

		public function getTypeExdepro(){
			$query = $this->db->query("SELECT * FROM kiran_type_exdepro");
			return $query->result_array();
		}

		public function addVenueOfTraining($data){
			$venueName = $data['venueName'];
		    $address = $data['address'];
		    $city = $data['city'];
		    $zipCode = $data['zipCode'];
		    $province = $data['province'];
		    $country = $data['country'];

		    $query = $this->db->query("INSERT INTO kiran_venue_of_training (vot_name, vot_address, vot_city, vot_zip_code, vot_province, vot_country)
		    							VALUES ('$venueName', '$address', '$city', '$zipCode', '$province', '$country')");
		    return $query;

		}

		public function addVenueOfTrainingCP($data){
			$contactPerson = $data['contactPerson'];
		    $jobTitle = $data['jobTitle'];
		    $phoneNumber = $data['phoneNumber'];
		    $ext = $data['ext'];
		    $faxNumber = $data['faxNumber'];
		    $mobileNumber = $data['mobileNumber'];

		    $query = $this->db->query("INSERT INTO kiran_venue_of_training_cp (vot_cp_name, vot_cp_job_title, vot_cp_phone_number, vot_cp_ext, vot_cp_fax_number, vot_cp_mobile_number)
		    							VALUES ('$contactPerson', '$jobTitle', '$phoneNumber', '$ext', '$faxNumber', '$mobileNumber') ");
		    return $query;
		}

		public function getVenueOfTraining(){
			$query = $this->db->query("SELECT * FROM kiran_venue_of_training");
			return $query->result_array();
		}

		public function addInstructor($data){
			$instructorName = $data['instructorName'];
		    $instructorMobilePhone1 = $data['instructorMobilePhone1'];
		    $instructorMobilePhone2 = $data['instructorMobilePhone2'];
		    $instructorEmailAddress = $data['instructorEmailAddress'];

		    $query = $this->db->query("INSERT INTO kiran_instructor (instructor_name, instructor_mobile_phone1, instructor_mobile_phone2, instructor_email_address)
		    							VALUES ('$instructorName', '$instructorMobilePhone1', '$instructorMobilePhone2', '$instructorEmailAddress')");
		    return $query;
		}

		public function getInstructor(){
			$query = $this->db->query("SELECT * FROM kiran_instructor");
			return $query->result_array();
		}

		public function addUserAccount($data){
			$fullName = $data['fullName'];
		    $username = $data['username'];
		    $initial = $data['initial'];
		    $department = $data['department'];
		    $userLevel = $data['userLevel'];
		    $status = $data['status'];

		    $query = $this->db->query("INSERT INTO kiran_user_account (user_account_fullname, user_account_username, user_account_initial, user_account_department, user_account_user_level, user_account_status)
		    							VALUES ('$fullName', '$username', '$initial', '$department', '$userLevel', '$status')");
		    return $query;
		}

		public function getUserAccount(){
			$query = $this->db->query("SELECT * FROM kiran_user_account");
			return $query->result_array();
		}

		public function addLogisticOfficer($data){
			$logisticOfficer = $data['logisticOfficer'];
		    $initial = $data['initial'];
		    $status = $data['status'];

		    $query = $this->db->query("INSERT INTO kiran_logistic_officer (lo_name, lo_initial, lo_status)
		    							VALUES ('$logisticOfficer', '$initial', '$status')");
		    return $query;
		}

		public function getLogisticOfficer(){
			$query = $this->db->query("SELECT * FROM kiran_logistic_officer");
			return $query->result_array();
		}

		public function addBatchMaster($data){
			$course = $data['course'];
		    $batchCode = $data['batchCode'];
		    $classInput = $data['classInput'];
		    $venue = $data['venue'];
		    $room = $data['room'];
		    $begin = $data['begin'];
		    $end = $data['end'];
		    $location1 = $data['location1'];
		    $type1 = $data['type1'];
		    $language1 = $data['language1'];
		    $venue1 = $data['venue1'];
		    $dateSimulation = $data['dateSimulation'];

		    $query = $this->db->query("INSERT INTO kiran_batch_master (bm_course, bm_batch_code, bm_class_input, bm_venue, bm_room, bm_begin, bm_end, bm_location1, bm_type1, bm_language1, bm_venue1, bm_date_simulation)
		    	VALUES ('$course', '$batchCode', '$classInput', '$venue', '$room', '$begin', '$end', '$location1', '$type1', '$language1', '$venue1', '$dateSimulation')");
		    return $query;
		}

		public function getBatchMaster(){
			$query = $this->db->query("SELECT * FROM kiran_batch_master");
			return $query->result_array();
		}

		public function addPersonalData($data){
			$kiranId = $data['kiranId'];
		    $bsmrId = $data['bsmrId'];
		    $fullName = $data['fullName'];
		    $mobilePhone1 = $data['mobilePhone1'];
		    $mobilePhone2 = $data['mobilePhone2'];
		    $birthDate = $data['birthDate'];
		    $religion = $data['religion'];
		    $status = $data['status'];

		    $query = $this->db->query("INSERT INTO kiran_participant_personal_data (personal_kiran_id, personal_bsmr_id, personal_full_name, personal_mobile_phone1, personal_mobile_phone2, personal_birth_date, personal_religion, personal_status)
		    	VALUES ('$kiranId', '$bsmrId', '$fullName', '$mobilePhone1', '$mobilePhone2', '$birthDate', '$religion', '$status')");
		    return $query;
		}

		public function getPersonalData(){
			$query = $this->db->query("SELECT * FROM kiran_participant_personal_data");
			return $query->result_array();
		}

		public function addRoom(){
			$name_room = $this->input->post('name_room');
    		$type_room = $this->input->post('type_room');
    		$no_of_room = $this->input->post('no_of_room');
    		$building = $this->input->post('building');
    		$floor = $this->input->post('floor');
    		$price_room = $this->input->post('price_room');
    		$max_person_room = $this->input->post('max_person_room');
    		$fasilitas = $this->input->post('fasilitas');
    		$status_room = $this->input->post('status_room');

	

    		// for($x=0;$x<sizeof($fasilitas);$x++){
    		// $query = $this->db->query("INSERT INTO master_room (name_room, type_room, no_of_room, price_room, max_person_room, fasilitas) VALUES ('$name_room', '$type_room', '$no_of_room', '$price_room', '$max_person_room', '$fasilitas[$x]')");	
    		// }
    		$query = $this->db->query("INSERT INTO master_room (name_room, type_room, no_of_room, building, floor, price_room, max_person_room, status) VALUES ('$name_room', '$type_room', '$no_of_room', '$building', '$floor', '$price_room', '$max_person_room', '$status_room')");

    		return $query;
		}

		public function addFasilitasRoom($data){
    		$fasilitas = $this->input->post('fasilitas');
    		$id_room = $data['id_room'];
				

    		// for($x=0;$x<sizeof($fasilitas);$x++){
    		$query = $this->db->query("DELETE FROM master_room_fasilitas where id_room = '$id_room'");	
			//}
    		if($query == 1){
    			for($y=0;$y<sizeof($fasilitas);$y++){
    				$query2 = $this->db->query("INSERT INTO master_room_fasilitas (id_room, id_detail) VALUES ('$id_room','$fasilitas[$y]')");
    			}
    		}
    		// if($query_hasil){
    		// 	$query2 = $this->db->query("INSERT INTO master_room_fasilitas (id_room, id_detail) VALUES ('$id_room','$fasilitas[$x]')");
    		// }

    		// INSERT INTO master_room_fasilitas (id_room, id_detail) VALUES ('$id_room','$fasilitas[$x]')

    		return $query2;
		}

        public function updateFasilitasRoom(){             
        	echo $id_room = $data['id_room'];             
        	$fasilitas = $data['fasilitas'];


			for($i=0;$i<sizeof($fasilitas);$i++){
			$query = $this->db->query("UPDATE master_room SET fasilitas ='$fasilitas[$i]' WHERE id_room = '$id_room' ");
			}
			return $query->result_array();
		}

		public function removeRoom($id)
		{
			$query = $this->db->query("DELETE FROM master_room WHERE id_room='$id'");
			return $query;
		}

		public function editRoom($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM master_room  WHERE id_room = '$id' ");
			return $query->result_array();
		}

		public function viewDetFasilitas($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("select A.FAS,A.IDFAS,A.DESCDET, CASE WHEN B.id_master_room_fasilitas IS NOT NULL THEN 'ADA' ELSE 'TIDAKADA' END AS addressexists from (SELECT a.dsc_fasilitas AS FAS, b.id_detail AS IDFAS, b.dsc_detail AS DESCDET FROM `master_fasilitas` a LEFT JOIN master_detail_fasilitas b ON a.id_fasilitas = b.id_fasilitas ORDER BY `a`.`dsc_fasilitas` ASC ) A left join (SELECT id_master_room_fasilitas, id_room , id_detail FROM master_room_fasilitas where id_room='$id') B on A.IDFAS=B.id_detail");
			// $query = $this->db->query("SELECT * FROM  master_room_fasilitas ");
			return $query->result_array();
		}

// 		public function viewDetFasilitas1()
// 		{
// 			// $id = $data['id_tipe'];
// 			$query = $this->db->query("SELECT * FROM  `master_room_fasilitas` a LEFT JOIN master_detail_fasilitas b ON a.id_detail = b.id_detail
// WHERE id_room =  '162' ");
// 			return $query->result_array();
// 		}

		public function viewDetFasilitas2($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM master_detail_fasilitas a LEFT JOIN master_room_fasilitas b ON a.id_detail = b.id_detail LEFT JOIN master_fasilitas c ON a.id_fasilitas = c.id_fasilitas WHERE id_room =  '$id' ");
			// SELECT a.id_fasilitas,a.dsc_fasilitas,b.id_detail,b.dsc_detail FROM master_fasilitas a LEFT JOIN master_detail_fasilitas b on a.id_fasilitas = b.id_fasilitas ORDER by dsc_fasilitas ASC, dsc_detail ASC
			return $query->result_array();
		}

		public function updateRoom($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_room = $data['id_room'];
			$name_room = $data['name_room_edit'];
			$type_room = $data['type_room_edit'];
			$no_of_room = $data['no_of_room_edit'];
			$building = $data['building_edit'];
			$floor = $data['floor_edit'];
			$price_room = $data['price_room_edit'];
			$max_person_room = $data['max_person_room_edit'];
			$fasilitas = $data['fasilitas'];
			$status_room = $data['status_room'];


			for($i=0;$i<sizeof($fasilitas);$i++){
			$query = $this->db->query("UPDATE master_room SET name_room ='$name_room', type_room ='$type_room', no_of_room = '$no_of_room', building = '$building', floor ='$floor', price_room ='$price_room', max_person_room ='$max_person_room', fasilitas ='$fasilitas[$i]', status = '$status_room' WHERE id_room = '$id_room' ");
			}
			return $query->result_array();
			// }
			// return $query->result_array();
			// $query = $this->db->query("UPDATE master_room SET name_room ='$name_room', type_room ='$type_room', no_of_room = '$no_of_room', price_room ='$price_room', max_person_room ='$max_person_room' WHERE id_room = '$id_room' ");

		}

		public function updateSubFasilitas($data)
		{
			$id_detail = $data['id_detail'];
			$dsc_detail = $data['detail_sub_fasilitas'];
			$qty = $data['detail_sub_qty'];
			$brand = $data['detail_sub_brand'];
			$note = $data['note_modal'];

			$query = $this->db->query("UPDATE master_detail_fasilitas SET dsc_detail='$dsc_detail', qty='$qty', brand='$brand', note='$note' WHERE id_detail='$id_detail' ");
			return $query->result_array();
		}

		public function getRoom()
		{
			$query = $this->db->query("SELECT * FROM master_room a LEFT join master_building b on a.building = b.id_building");
			return $query->result_array();
		}

		public function gettypekamar()
		{
			$query = $this->db->query("SELECT dsc_tipe FROM master_tipe");
			return $query->result_array();
		}

		public function editSubFasilitas($id)
		{
			// // $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM master_detail_fasilitas, master_fasilitas WHERE master_fasilitas.id_fasilitas = master_detail_fasilitas.id_fasilitas AND id_detail='$id' ");
			// $query = $this->db->query("SELECT * FROM master_detail_fasilitas WHERE id_detail = '$id' ");
			return $query->result_array();
		}

		public function getMasterFacilities()
		{
			$query = $this->db->query("SELECT * FROM master_fasilitas");
			return $query->result_array();
		}	

		public function getMasterSubFacilities($id)
		{
			$query = $this->db->query("SELECT * FROM master_detail_fasilitas, master_fasilitas WHERE master_fasilitas.id_fasilitas = master_detail_fasilitas.id_fasilitas AND master_fasilitas.id_fasilitas = '$id' ORDER BY id_detail DESC");
			return $query->result_array();
		}

		public function addMasterFacilities($data){
			$dsc_fasilitas = $data['dsc_fasilitas'];
			$dsc_detail = $data['dsc_detail'];
			$qty = $data['qty'];
			$brand = $data['brand'];
			$note = $data['note'];
			$id = $data['id'];

		    $query = $this->db->query("INSERT INTO master_detail_fasilitas (id_fasilitas, dsc_detail, qty, brand, note) VALUES ('$id', '$dsc_detail', '$qty', '$brand', '$note')");
		    return $query;
		}

		public function addDetailsInformation($data){
			$dsc_tipe = $data['dsc_tipe'];
			$price = $data['price'];
		    // $status = $data['status'];
		    // $jobTitle = $data['jobTitle'];
		    // $division = $data['division'];
		    // $officeBuilding = $data['officeBuilding'];
		    // $floor = $data['floor'];
		    // $officeNumber = $data['officeNumber'];
		    // $ext = $data['ext'];
		    // $address = $data['address'];
		    // $faxNumber = $data['faxNumber'];
		    // $emailAddress = $data['emailAddress'];
		    // $city = $data['city'];
		    // $zipCode = $data['zipCode'];
		    // $province = $data['province'];
		    // $country = $data['country'];

		    $query = $this->db->query("INSERT INTO master_tipe (dsc_tipe, price) VALUES ('$dsc_tipe','$price')");
		    return $query;
		}

		public function addguestType($data){
			$guest_type = $data['guest_type'];

		    $query = $this->db->query("INSERT INTO hotel_guest_type (guest_type) VALUES ('$guest_type')");
		    return $query;
		}

		public function addviewGuestTypeDetail($data){
			$detail_type_guest = $data['detail_type_guest'];
			$detail = $data['detail'];
			$price = $data['price'];


		    $query = $this->db->query("INSERT INTO hotel_detail_guest_type (detail_type_guest, detail, price) VALUES ('$detail_type_guest','$detail','$price')");
		    return $query;

		 //    $query = $this->db->query("INSERT INTO hotel_guest_type ( id_detail_guest_type, guest_type) 
			// SELECT o.id_detail_guest_type , o.guest_type FROM hotel_detail_guest_type u INNER JOIN hotel_guest_type o ON  o.id_detail_guest_type = u.id_detail_guest_type (detail_type_guest, detail) VALUES ('$detail_type_guest','$detail')");
		 //    return $query;
		}

		public function getDetailsInformation()
		{
			$query = $this->db->query("SELECT * FROM master_tipe");
			return $query->result_array();
		}


		public function getNoRoom()
		{
			$query = $this->db->query("SELECT no_of_room FROM master_room");
			return $query->result_array();
		}

		public function getChangePsw()
		{
			$query = $this->db->query("SELECT * from hotel_user ");
			return $query->result_array();
		}

		public function updatePswd($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_user = $data['id_user'];
			$password = $data['pass_edit'];

			$query = $this->db->query("UPDATE hotel_user SET password ='$password' WHERE id_user = '$id_user' ");
			return $query->result_array();
		}


		public function updateGuestInformation($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_regist 						= $data['id_regist'];
			$tittle 						= $data['tittle_edit'];
			$first_name 					= $data['first_name_edit'];
			$surname     					= $data['surname_edit'];
			// $middle_name 					= $data['middle_name_edit'];
			// $last_name 						= $data['last_name_edit'];
			$address 						= $data['address_edit'];
			$regist_country 				= $data['regist_country_edit'];
			$CityRegist 					= $data['CityRegist'];
			$zip_code 						= $data['zip_code_edit'];
			$phone 							= $data['phone_edit'];
			$guest_type 					= $data['guest_type_edit'];
			$guest_detail 					= $data['detail_guest_type_edit'];
			$jabatan 						= $data['jabatan_edit'];
			$identity_type 					= $data['identity_type_edit'];
			$identity_number 				= $data['identity_number_edit'];
			$identity_foto					= $data['identity_foto_edit'];
			$date_of_birth 					= $data['date_birth_edit'];
			$email 							= $data['email_edit'];
			$nationality 					= $data['nationality_edit'];
			$deposit 						= $data['DepositRegistrationEditModal'];
			$type_card 						= $data['TypeCardRegistrationEditModal'];
			$card_no 						= $data['CardNoRegistrationEditModal'];
			$exp_date 						= $data['ExpDateRegistrationEditModal'];
			$reserv_handled 				= $data['ReservByRegistrationEditModal'];
			$check_by 						= $data['CheckedByRegistrationEditModal'];
			$purpose_visit 					= $data['PurposeofVisitRegistrationEditModal'];
			$building 						= $data['BuildingReservationEditModal'];
			$floor 							= $data['FloorReservationEditModal'];
			$no_room 						= $data['NoRoomReservationEditModal'];
			$room_rate 						= $data['room_rate_edit'];
			$room 							= $data['room_edit'];

			$ArrDateUpdateRegistration 		= $data['checkInDateEdit'];
			$ArrTimeUpdateRegistration 		= $data['checkInTimeEdit'];
			$DprtDateUpdateRegistration		= $data['checkOutDateEdit'];
			$DprtTimeUpdateRegistration		= $data['checkOutTimeEdit'];


			// $arrival_date 					= $data['chki_edit'];
			// $departure_date 				= $data['chko_edit'];
			$total_pax 						= $data['total_pax_edit'];
			$status 						= $data['status_edit'];
			$spesial_request 				= $data['SpesialRequestRegistrationEditModal'];
            $date_payment               	= $data['date_payment'];
            $remark_payment             	= $data['remark_payment'];
            $bank_code                  	= $data['bank_code'];
            $card_owner_name            	= $data['card_owner_name'];
            $payment_amount             	= $data['payment_amount'];
            $card_number                	= $data['card_number'];
            $bank_issuer                	= $data['bank_issuer'];
            $stat_payment                	= $data['stat_payment_edit'];
            $pembayaran 					= $data['pembayaran'];

			$query = $this->db->query("UPDATE hotel_registration SET 

				tittle 						= '$tittle',
				first_name 					= '$first_name',
				surname 					= '$surname',
				address 					= '$address',
				regist_country 				= '$regist_country',
				city_text 					= '$CityRegist',
				zip_code 					= '$zip_code',
				phone 						= '$phone',
				guest_type 					= '$guest_type',
				detail_guest_type 			= '$guest_detail',
				jabatan 					= '$jabatan',
				identity_tipe 				= '$identity_type', 
				identity_number 			= '$identity_number', 
				date_of_birth 				= '$date_of_birth',
				email 						= '$email', 
				regist_nationality 			= '$nationality',
				guest_type 					= '$guest_type', 
				detail_guest_type    		= '$guest_detail', 
				identity_foto 				= '$identity_foto', 

				arr_date 					= '$ArrDateUpdateRegistration',
				arr_time 					= '$ArrTimeUpdateRegistration',
				dprt_date 					= '$DprtDateUpdateRegistration',
				dprt_time 					= '$DprtTimeUpdateRegistration',


				total_pax 					= '$total_pax',
				guest_room_type 			= '$room',
				price_regist 				= '$room_rate',
				no_of_room 					= '$no_room',
				status 						= '$status',
				pay_method 					= '$deposit',
				stat_payment 				= '$stat_payment',
				date_payment               	= '$date_payment',
            	remark_payment             	= '$remark_payment',
            	bank_code                  	= '$bank_code',
            	card_owner_name            	= '$card_owner_name',
            	payment_amount             	= '$payment_amount',
            	card_number                	= '$card_number',
            	bank_issuer                	= '$bank_issuer',
            	spesial_request 			= '$spesial_request',
				pembayaran                  = '$pembayaran'
				WHERE id_regist	 			= '$id_regist' ");
			return $query->result_array();
		}

    public function updateDeposit($data)
    {
        $id_regist 						= $data['id_regist'];
        $depositAmount 						= $data['deposit_amount'];
        $remarkDeposit 					= $data['remark_deposit'];

        $query = $this->db->query("UPDATE hotel_registration SET 
				deposit_amount 				= '$depositAmount', 
				remark_deposit 					= '$remarkDeposit', 
				WHERE id_regist	 			= '$id_regist' ");
        return $query->result_array();
    }

		public function updateReservation($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];

			$id_reservation 						= $data['id_reservation'];
			$TittleUpdateReservation				= $data['TittleReservationEditModal'];
			$FirstnameUpdateReservation				= $data['FirstNameReservationEditModal'];
			$SurnameUpdateReservation				= $data['SurnameReservationEditModal'];
			// $MiddleNameUpdateReservation			= $data['MiddleNameReservationEditModal'];
			// $LastNameUpdateReservation				= $data['LastNameReservationEditModal'];
			// $ArrivalDateUpdateReservation			= $data['ArrivalDateReservationEditModal'];
			// $DepartDateUpdateReservation			= $data['DepartDateReservationEditModal'];
			
			$ArrDateUpdateReservation				= $data['ArrivalDateReservationEditModal'];
			$ArrTimeUpdateReservation				= $data['ArrivalTimeReservationEditModal'];

			$DprtDateUpdateReservation				= $data['DepartureDateReservationEditModal'];
			$DprtTimeUpdateReservation				= $data['DepartureTimeReservationEditModal'];


			$TotalPaxUpdateReservation  			= $data['TotalPaxReservationEditModal'];
			$BuildingUpdateReservation				= $data['BuildingReservationEditModal'];
			$FloorUpdateReservation					= $data['FloorReservationEditModal'];
			$NoRoomUpdateReservation				= $data['NoRoomReservationEditModal'];
			$RoomTypeUpdateReservation				= $data['RoomTypeReservationEditModal'];
			$RoomRateUpdateReservation				= $data['RoomRateReservationEditModal'];
			$SpesialRequestUpdateReservation		= $data['SpesialRequestReservationEditModal'];
			$BillingInstructionUpdateReservation	= $data['BillingInstructionReservationEditModal'];
			$DepositUpdateReservation				= $data['DepositByReservationEditModal'];
			$TypeCardUpdateReservation				= $data['TypeCardReservationEditModal'];
			$CardNoUpdateReservation				= $data['CardNoReservationEditModal'];
			$ExpDateUpdateReservation			 	= $data['ExpDateReservationEditModal'];
			$NoteUpdateReservation					= $data['NoteReservationEditModal'];
			$StatusUpdateReservation				= $data['StatusReservationEditModal'];
			$GuestTypeUpdateReservation				= $data['GuestTypeReservationEditModal'];
			$DetailGuestTypeUpdateReservation		= $data['DetailGuestTypeReservationEditModal'];
			$RemarksUpdateReservation				= $data['RemarksReservationEditModal'];
			$TittleCPUpdateReservation				= $data['TittleCPReservationEditModal'];
			$FirstNameCPUpdateReservation			= $data['FirstNameCPReservationEditModal'];
			$MiddleNameCPReservationEditModal		= $data['MiddleNameCPReservationEditModal'];
			$LastNameCPUpdateReservation			= $data['LastNameCPReservationEditModal'];
			$PhoneNumberCPUpdateReservation			= $data['PhoneNumberCPReservationEditModal'];
			$EmailCPUpdateReservation				= $data['EmailCPReservationEditModal'];
			$DateTimeCPUpdateReservation			= $data['DateTimeCPReservationEditModal'];
			$ReservByUpdateReservation				= $data['ReservByReservationEditModal'];			

			$query = $this->db->query("UPDATE hotel_reservation SET
				tittle								= '$TittleUpdateReservation',
				first_name  						= '$FirstnameUpdateReservation',
				surname 							= '$SurnameUpdateReservation',

				arr_date  							= '$ArrDateUpdateReservation',
				arr_time  							= '$ArrTimeUpdateReservation',

				dprt_date  							= '$DprtDateUpdateReservation',
				dprt_time  							= '$DprtTimeUpdateReservation',


				total_pax 							= '$TotalPaxUpdateReservation',
				building    						= '$BuildingUpdateReservation',
				floor 		 						= '$FloorUpdateReservation',
				no_of_room          				= '$NoRoomUpdateReservation',
				room_type							= '$RoomTypeUpdateReservation',
				room_rate							= '$RoomRateUpdateReservation',
				spesial_request						= '$SpesialRequestUpdateReservation',
				billing_instruction					= '$BillingInstructionUpdateReservation',
				pay_method 		 					= '$DepositUpdateReservation',
				type_card   						= '$TypeCardUpdateReservation',
				card_no 							= '$CardNoUpdateReservation',
				expired_date						= '$ExpDateUpdateReservation',
				note        						= '$NoteUpdateReservation', 
				status      						= '$StatusUpdateReservation', 
				guest_type 							= '$GuestTypeUpdateReservation',
				detail_guest_type      				= '$DetailGuestTypeUpdateReservation', 
				remarks 							= '$RemarksUpdateReservation', 
				tittleCP 							= '$TittleCPUpdateReservation', 
				first_nameCP						= '$FirstNameCPUpdateReservation', 
				middle_nameCP						= '$MiddleNameCPReservationEditModal',
				last_nameCP							= '$LastNameCPUpdateReservation',
				phoneCP     						= '$PhoneNumberCPUpdateReservation',
				emailCP 							= '$EmailCPUpdateReservation',
				datetimeCP							= '$DateTimeCPUpdateReservation',
				reservation_handle_by   			= '$ReservByUpdateReservation'

				WHERE id_reservation = '$id_reservation' ");
			return $query->result_array();
		}

		public function hapusReservation($id)
		{
			$query = $this->db->query("DELETE FROM hotel_reservation WHERE id_reservation='$id'");
			return $query;
		}

		public function updateDetailsInformation($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_tipe = $data['id_tipe_edit'];
			$dsc_tipe = $data['dsc_tipe_edit'];
			$price = $data['price_edit'];

			$query = $this->db->query("UPDATE master_tipe SET dsc_tipe ='$dsc_tipe', price ='$price' WHERE id_tipe = '$id_tipe' ");
			return $query->result_array();
		}

		public function updateSegmentation($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_segment = $data['id_segment'];
			$segment = $data['segment'];

			$query = $this->db->query("UPDATE hotel_segmentation SET segment ='$segment' WHERE id_segment = '$id_segment' ");
			return $query->result_array();
		}

		public function updateGuestType($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_guest_type = $data['id_type_guest_edit'];
			$guest_type = $data['type_guest_edit'];

			$query = $this->db->query("UPDATE hotel_guest_type SET guest_type ='$guest_type' WHERE id_guest_type = '$id_guest_type' ");
			return $query->result_array();
		}

		public function updateDetailGuestType($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_detail_guest_type = $data['id_detail_type_guest_edit'];
			$detail_guest_type = $data['select_detail_type_guest_edit'];
			$detail = $data['detail_type_guest_modal'];


			$query = $this->db->query("UPDATE hotel_detail_guest_type SET detail_type_guest ='$detail_guest_type', detail = '$detail' WHERE id_detail_guest_type = '$id_detail_guest_type' ");
			return $query->result_array();
		}

		public function editDetailsInformation($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM master_tipe WHERE id_tipe = '$id' ");
			return $query->result_array();
		}

		public function editReservation($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM hotel_reservation a 
				LEFT JOIN hotel_identity_tipe 		b ON a.identity_tipe 		= b.id_identity_tipe 
				LEFT JOIN hotel_segmentation  		c ON a.segmentation 		= c.id_segment
				LEFT JOIN hotel_detail_guest_type   d ON a.detail_guest_type    = d.id_detail_guest_type
				LEFT JOIN hotel_province            e ON a.regist_province 		= e.id_province

				WHERE id_reservation = '$id' ");
			return $query->result_array();
		}

		public function viewReservation($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM hotel_reservation a 
				LEFT JOIN hotel_identity_tipe 		b ON a.identity_tipe 		= b.id_identity_tipe
				LEFT JOIN hotel_segmentation  		c ON a.segmentation  		= c.id_segment
				LEFT JOIN hotel_guest_type 	  		d ON a.guest_type    		= d.id_guest_type
				LEFT JOIN hotel_detail_guest_type	e ON a.detail_guest_type 	= e.id_detail_guest_type
				LEFT JOIN hotel_status_guest        f ON a.status 				= f.id_status
				LEFT JOIN payment_method            g ON a.pay_method     		= g.id_pay_method

				WHERE id_reservation = '$id' ");
			return $query->result_array();
		}

		public function editGuestTentativeModal($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM hotel_registration a
				LEFT JOIN hotel_identity_tipe 		b ON a.identity_tipe 		= b.id_identity_tipe
				LEFT JOIN hotel_segmentation  		c ON a.segmentation  		= c.id_segment
				LEFT JOIN hotel_guest_type 	  		d ON a.guest_type    		= d.id_guest_type
				LEFT JOIN hotel_detail_guest_type	e ON a.detail_guest_type 	= e.id_detail_guest_type
				LEFT JOIN hotel_status_guest        f ON a.status 				= f.id_status

				LEFT JOIN payment_method            g ON a.pay_method     		= g.id_pay_method
				WHERE id_regist='$id'");
			return $query->result_array();
		}

		public function editPassword($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM hotel_user WHERE id_user = '$id' ");
			return $query->result_array();
		}

		public function removeDetailsInformation($id)
		{
			$query = $this->db->query("DELETE FROM master_tipe WHERE id_tipe='$id'");
			return $query;
		}

		public function addFasilitas($data){
			$dsc_fasilitas = $data['dsc_fasilitas'];

		    $query = $this->db->query("INSERT INTO master_fasilitas (dsc_fasilitas) VALUES ('$dsc_fasilitas')");
		    return $query;
		}

		public function getFasilitas()
		{
			$query = $this->db->query("SELECT a.id_fasilitas,a.dsc_fasilitas,b.id_detail,b.dsc_detail FROM master_fasilitas a LEFT JOIN master_detail_fasilitas b on a.id_fasilitas = b.id_fasilitas ORDER by dsc_fasilitas ASC, dsc_detail ASC");
			return $query->result_array();
		}

		public function getFasilitas2()
		{
			$query = $this->db->query("select A.FAS,A.IDFAS,A.DESCDET, CASE WHEN B.id_master_room_fasilitas IS NOT NULL THEN 'ADA' ELSE 'TIDAKADA' END AS kosong from (SELECT a.dsc_fasilitas AS FAS, b.id_detail AS IDFAS, b.dsc_detail AS DESCDET FROM `master_fasilitas` a LEFT JOIN master_detail_fasilitas b ON a.id_fasilitas = b.id_fasilitas ORDER BY `a`.`dsc_fasilitas` ASC ) A left join (SELECT id_master_room_fasilitas, id_room , id_detail FROM master_room_fasilitas where id_room='$id') B on A.IDFAS=B.id_detail");
			return $query->result_array();
		}

		public function getFasilitasMain()
		{
			$query = $this->db->query("SELECT * FROM master_fasilitas");
			return $query->result_array();
		}

		public function getDetailSubFasilitas()
		{
			$query = $this->db->query("SELECT * FROM master_detail_fasilitas ");
			return $query->result_array();
		}

		public function editFasilitas($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM master_fasilitas WHERE id_fasilitas = '$id' ");
			return $query->result_array();
		}

		public function updateFasilitas($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id_fasilitas = $data['id_fasilitas'];
			$dsc_fasilitas = $data['dsc_fasilitas_edit'];

			$query = $this->db->query("UPDATE master_fasilitas SET dsc_fasilitas ='$dsc_fasilitas' WHERE id_fasilitas = '$id_fasilitas' ");
			return $query->result_array();
		}

		public function hapusFasilitas($id)
		{
			$query = $this->db->query("DELETE FROM master_fasilitas WHERE id_fasilitas='$id'");
			return $query;
		}

		public function hapusSubFasilitas($id)
		{
			$query = $this->db->query("DELETE FROM master_detail_fasilitas WHERE id_detail='$id'");
			return $query;
		}

		public function getHrView($id){
			$query = $this->db->query("SELECT * FROM kiran_human_resources WHERE hr_id = '$id'");
			return $query->result_array();
		}

		public function getContactPerson($id){
			$query = $this->db->query("SELECT * FROM kiran_human_resources, kiran_human_resources_cp
										WHERE kiran_human_resources.hr_cp_id = kiran_human_resources_cp.hr_cp_id
										AND kiran_human_resources.hr_id = '$id' ");
			return $query->result_array();
		}

		public function get_office(){
			$query = $this->db->query("SELECT * FROM office");
			return $query->result_array();
		}

		public function get_profile($userId){
			$query = $this->db->query("SELECT * FROM employee WHERE PersNo='$userId'");
			return $query->result_array();
		}

		public function get_leavebalance($userId){
			$query = $this->db->query("SELECT * FROM leave_blnc WHERE PersNo='$userId'");
			return $query->result_array();
		}

		public function get_leavetrans_approve($userId){
			$query = $this->db->query("SELECT req_date, ltype as type, MIN(ldate) as dari, MAX(ldate) as sampai, purpose, act as status, count(*) as hari 
				FROM `leave_trans` WHERE `PersNo` = '$userId' AND act='APPROVE' GROUP BY trans_seq DESC");
			return $query->result_array();
		}	

		public function get_leavetrans_disapprove($userId){
			$query = $this->db->query("SELECT req_date, ltype as type, MIN(ldate) as dari, MAX(ldate) as sampai, purpose, act as status, count(*) as hari 
				FROM `leave_trans` WHERE `PersNo` = '$userId' AND act='DISAPPROVE' GROUP BY trans_seq DESC");
			return $query->result_array();
		}

		public function get_leavetrans_waiting($userId){
			$query = $this->db->query("SELECT req_date, ltype as type, MIN(ldate) as dari, MAX(ldate) as sampai, purpose, act as status, count(*) as hari 
				FROM `leave_trans` WHERE `PersNo` = '$userId' AND act='WAITING' GROUP BY trans_seq DESC");
			return $query->result_array();
		}

		public function get_meetingroom($officeId){
			$query = $this->db->query("SELECT * FROM meetingroom WHERE meetingroom_office_id='$officeId'");
			return $query->result_array();
		}

		public function get_today_events($today){
			$query = $this->db->query("SELECT * FROM events WHERE events_date = '$today'");
			return $query->result_array();
		}

		public function post_booking_room($data){
			$eventsDate = $data['eventsDate'];+
			$eventsTimeFrom = $data['eventsTimeFrom'];
			$eventsTimeTo = $data['eventsTimeTo'];
			$eventsOffice = $data['eventsOffice'];
			$eventsRoom = $data['eventsRoom'];
			$eventsCreator = $data['eventsCreator'];
			$eventsAgenda = $data['eventsAgenda'];
			$eventsStatus = $data['eventsStatus'];

			$query = $this->db->query("INSERT INTO events (events_date, events_time_from, events_time_to, events_office, events_room, events_creator, events_agenda, events_status)
										VALUES ('$eventsDate','$eventsTimeFrom','$eventsTimeTo','$eventsOffice','$eventsRoom','$eventsCreator','$eventsAgenda','$eventsStatus')");
			return $query;
		}

		public function get_leavetype(){
			$query = $this->db->query("SELECT * FROM leave_type");
			return $query->result_array();
		}

		public function get_events($data){
			$dates = $data['dates'];
			$room = $data['room'];

			$query = $this->db->query("SELECT * FROM events WHERE events_date = '$dates' AND events_room = '$room'");
			return $query->result_array();
		}

		public function get_attendance($id){
			$query = $this->db->query("SELECT * FROM attendance WHERE user_id = '$id' ORDER BY tr_date DESC");
			return $query->result_array();
		}

		public function post_leave_1day($data){
			$persNo = $data['persNo'];
			$leaveType = $data['leaveType'];
			$dates = $data['dates'];
			// $hours = number_format((float)$data['hours'], 1, '.','');
			// $minutes = number_format((float)$data['minutes'], 1, '.','');
			// $seconds = number_format((float)$data['seconds'], 1, '.','');
			$hours = $data['hours'];
			$minutes = $data['minutes'];
			$seconds = $data['seconds'];
			$purpose = $data['purpose'];
			$address = $data['address'];
			$phone = $data['phone'];
			$backupPerson = $data['backupPerson'];
			$transSeq = $data['transSeq'];
			$superiorComment = $data['superiorComment'];

			$reqDate = date('Y-m-d');
			$act = "WAITING";


			$newTransSeq = ++$transSeq;

			if ($hours == 8.0 || $hours == 8) {
				$subday =  1;
			} else {
				$subday = $hours/8;
			}

			
			$query = $this->db->query("INSERT INTO 
				leave_trans (PersNo, req_date, ltype, ldate, purpose, address, phone, backup_person, act, trans_seq, sub_day, sub_hour, sub_min, sub_sec)
			 						VALUES 
			 	('$persNo', '$reqDate', '$leaveType', '$dates', '$purpose', '$address', '$phone', '$backupPerson', '$act', '$newTransSeq', '$subday', '$hours', '$minutes','$seconds')");
			return $transSeq;

		}

		public function get_trans_seq(){
			$query = $this->db->query("SELECT MAX(trans_seq) as jumlah FROM leave_trans");
			return $query->result_array();
		}

		public function insert_token($data){
			$token = $data['token'];
			$persNo = $data['persNo'];

			$query = $this->db->query("UPDATE employee SET token = '$token' WHERE PersNo = '$persNo'");
			return $query;
		}

		public function get_history($id){
			$query = $this->db->query("SELECT * FROM events WHERE events_creator = '$id' ");
			return $query->result_array();
		}

		public function get_teamtrans_approve($name){
			$query = $this->db->query("
				SELECT leave_trans.PersNo, leave_trans.req_date, leave_trans.ltype, leave_trans.ldate, leave_trans.purpose,leave_trans.trans_seq, leave_trans.act ,employee.First_name, employee.Last_name, employee.Name_of_superior, MIN(leave_trans.ldate) as dari, MAX(leave_trans.ldate) as sampai, COUNT(leave_trans.trans_seq) as hari
				FROM leave_trans, employee
				WHERE leave_trans.PersNo = employee.PersNo
				AND employee.Name_of_superior LIKE '%$name%'
				AND leave_trans.act = 'APPROVE'
				GROUP BY trans_seq DESC
			");
			return $query->result_array();
		}

		public function get_teamtrans_disapprove($name){
			$query = $this->db->query("
				SELECT leave_trans.PersNo, leave_trans.req_date, leave_trans.ltype, leave_trans.ldate, leave_trans.purpose,leave_trans.trans_seq, leave_trans.act ,employee.First_name, employee.Last_name, employee.Name_of_superior, MIN(leave_trans.ldate) as dari, MAX(leave_trans.ldate) as sampai, COUNT(leave_trans.trans_seq) as hari
				FROM leave_trans, employee
				WHERE leave_trans.PersNo = employee.PersNo
				AND employee.Name_of_superior LIKE '%$name%'
				AND leave_trans.act = 'DISAPPROVE'
				GROUP BY trans_seq DESC
			");
			return $query->result_array();
		}

		public function get_teamtrans_waiting($name){
			$query = $this->db->query("
				SELECT leave_trans.PersNo, leave_trans.req_date, leave_trans.ltype, leave_trans.ldate, leave_trans.purpose,leave_trans.trans_seq, leave_trans.act ,employee.First_name, employee.Last_name, employee.Name_of_superior, MIN(leave_trans.ldate) as dari, MAX(leave_trans.ldate) as sampai, COUNT(leave_trans.trans_seq) as hari
				FROM leave_trans, employee
				WHERE leave_trans.PersNo = employee.PersNo
				AND employee.Name_of_superior LIKE '%$name%'
				AND leave_trans.act = 'WAITING'
				GROUP BY trans_seq DESC
			");
			return $query->result_array();
		}

		public function send_evidence($data){
			$trans_seq = $data['trans_seq'];
			$evidence_path = $data['evidence_path'];

			$query = $this->db->query("INSERT INTO leave_evidence (trans_seq, evidence_path) VALUES ('$trans_seq', '$evidence_path')");
			return $query;
		}

		public function get_pub_holiday(){
			$query = $this->db->query("SELECT * FROM leave_pub_holidays");
			return $query->result_array();
		}

		public function approve($transSeq){
			$query = $this->db->query("UPDATE leave_trans SET act = 'APPROVE' WHERE trans_seq = $transSeq ");
			return $query;

		}

		public function disapprove($transSeq){
			$query = $this->db->query("UPDATE leave_trans SET act = 'DISAPPROVE' WHERE trans_seq = $transSeq ");
			return $query;
		}

		public function insert_news($data){
			$db = get_instance()->db->conn_id;

			$title = $data['title'];
			$content = $data['content'];
			$path = $data['path'];
			$date = date('Y-m-d');

			$realContent = mysqli_real_escape_string($db, $content);
			$realTitle = mysqli_real_escape_string($db, $title);
			$realPath = mysqli_real_escape_string($db, $path);

			$query = $this->db->query("INSERT INTO news (news_title, news_content, news_file)
										VALUES ('$realTitle', '$realContent', '$realPath') ");
			return $query;
		}

		public function get_news(){
			$query = $this->db->query("SELECT * FROM news ORDER BY news_created_at DESC");
			return $query->result_array();
		}

		public function get_details_news($id){
			$query = $this->db->query("SELECT * FROM news WHERE news_id = '$id' ");
			return $query->result_array();
		}

		public function edit1_news($data){
			//tanpa path
			$db = get_instance()->db->conn_id;

			$title = $data['title'];
			$content = $data['content'];
			$id = $data['id'];

			$realContent = mysqli_real_escape_string($db, $content);
			$realTitle = mysqli_real_escape_string($db, $title);

			$query = $this->db->query("UPDATE news SET news_title = '$realTitle', news_content = '$realContent' WHERE news_id = '$id' ");
			return $query;

		}

		public function edit2_news($data){
			//dengan path
			$db = get_instance()->db->conn_id;

			$title = $data['title'];
			$content = $data['content'];
			$id = $data['id'];
			$path = $data['path'];

			$realContent = mysqli_real_escape_string($db, $content);
			$realTitle = mysqli_real_escape_string($db, $title);
			$realPath = mysqli_real_escape_string($db, $path);

			$query = $this->db->query("UPDATE news SET news_title = '$realTitle', news_content = '$realContent', news_file = '$realPath' WHERE news_id = '$id' ");
			return $query;
		}

		public function delete_news($id){
			$query = $this->db->query("DELETE FROM news WHERE news_id = '$id' ");
			return $query;
		}

		public function get_office_web(){
			$query = $this->db->query("SELECT * FROM office");
			return $query->result_array();
		}

		public function get_meetingroom_web(){
			$query = $this->db->query("SELECT * FROM meetingroom");
			return $query->result_array();
		}

		public function get_events_web($data){
			$start = $data['start_format'];
			$end = $data['end_format'];


			$query = $this->db->query("SELECT * FROM events WHERE events_date >= '$start' AND events_date <= '$end' ");
			return $query->result();

		}

		public function get_users_list(){
			$query = $this->db->query("SELECT user_id FROM login_user");
			return $query->result_array();
		}

		public function get_news_list(){
			$query = $this->db->query("SELECT * FROM news");
			return $query->result_array();
		}

		public function get_news_detail_list($id){
			$query = $this->db->query("SELECT * FROM news WHERE news_id = '$id' ");
			return $query->result_array();
		}

		public function update_remarks($data){
			$userId = $data['userId'];
			$date = $data['date'];
			$remarks = $data['remarks'];

			$query = $this->db->query("UPDATE attendance SET remarks = '$remarks' WHERE user_id = '$userId' AND tr_date LIKE '%$date%' ");
			return $query;
		}

		public function changeTypeRoom($typeRoomId){

			$query = $this->db->query("SELECT price FROM master_tipe WHERE id_tipe = '$typeRoomId' ");
			return $query->result_array();
		}

		public function changeTypeRoomReservation($data){

			$typeRoomIdReservation = $data['typeRoom'];
			$buildingRoomIdReservation = $data['buildingRoom'];
			$floorRoomIdReservation = $data['floorRoom'];

			// $sample = "SELECT price_room FROM master_room WHERE no_of_room = '$typeRoomIdReservation' 
			// AND building = '$buildingRoomIdReservation' AND floor = '$floorRoomIdReservation'";

			$query = $this->db->query("SELECT price_room FROM master_room WHERE no_of_room = '$typeRoomIdReservation' AND building = '$buildingRoomIdReservation' AND floor = '$floorRoomIdReservation' ");
			return $query->result_array();
		}

		public function changeTypeRoomReservationModal($typeRoomIdReservationModal){

			$query = $this->db->query("SELECT price FROM master_tipe WHERE id_tipe = '$typeRoomIdReservationModal' ");
			return $query->result_array();
		}

		public function changeTypeRoomGuestModal($typeRoomIdModal){

			$query = $this->db->query("SELECT price FROM master_tipe WHERE id_tipe = '$typeRoomIdModal' ");
			return $query->result_array();
		}

		public function getHotelInformation2(){
			$query = $this->db->query("SELECT * FROM hotel_information WHERE id_hotel = '45' ");
			return $query->result_array();
		}


		public function getDpRoom(){
			$query = $this->db->query("SELECT *, B.status as status_text FROM master_room A LEFT JOIN master_status B ON A.status = B.id ORDER BY name_room ASC");
			return $query->result_array();
		}

		public function getMasterStatusRoom(){
			$query = $this->db->query("SELECT * FROM master_status ORDER BY status ASC");
			return $query->result_array();
		}

		public function getMasterTax(){
			$query = $this->db->query("SELECT * FROM master_tax ORDER BY nama ASC");
			return $query->result_array();
		}

		public function check_old_password($id_user, $password)
		{
			$this->db->where('id_user', $id_user);
			$this->db->where('password', $password);
			$query = $this->db->get('hotel_user');
			if($query->num_rows() > 0){
				return true;
			}else{
				return false;
			} 
		}

		public function addTax($data){
			$nama = $data['nama'];
			$nominal = $data['nominal'];

			$query = $this->db->query("INSERT INTO master_tax (nama, nominal)
										VALUES ('$nama', '$nominal')");
			return $query;
		}

		public function editTax($id)
		{
			// $id = $data['id_tipe'];
			$query = $this->db->query("SELECT * FROM `master_tax` WHERE id = '$id' ");
			return $query->result_array();
		}

		public function updateTax($data)
		{
			//$dsc_tipe = $data['dsc_tipe'];
			$id = $data['id_tax'];
			$nama = $data['nama_modal'];
			$nominal = $data['nominal_modal'];

			$query = $this->db->query("UPDATE master_tax SET nama='$nama', nominal='$nominal' WHERE id  ='$id'");
			return $query->result_array();
		}

		public function hapusTax($id)
		{
			$query = $this->db->query("DELETE FROM master_tax WHERE id='$id'");
			return $query;
		}

		public function getMasterBuilding(){
			$query = $this->db->query("SELECT * FROM master_building order by name_building ASC");
			return $query->result_array();
		}

		public function getBuildingMaster(){
			$query = $this->db->query("SELECT * FROM master_building order by name_building ASC");
			return $query->result_array();
		}

		public function getTypeCardGuestRegistration(){
			$query = $this->db->query("SELECT * FROM hotel_type_card order by type_card ASC");
			return $query->result_array();
		}

		public function getDetailRoomChart($id){
			$query  = $this->db->query("SELECT *, b.status as realStatus, a.status as statusAwal 
					FROM master_room a LEFT JOIN master_status b ON a.status = b.id 
					LEFT JOIN master_building c ON a.building = c.id_building WHERE a.building = '$id' ");
			return $query->result_array();
		}

		public function updateRoomChart($data){
			$id = $data['id'];
			$status = $data['status'];

			$query = $this->db->query("UPDATE master_room SET status = '$status' WHERE id_room = '$id' ");
			return $query->result_array();
		}

		public function getFloorReserv($id){
			$query = $this->db->query("SELECT DISTINCT floor, building FROM master_room WHERE building = '$id' ");
			return $query->result_array();
		}

		public function getNoReserv($data){
			$buildingValue = $data['buildingValue'];
    		$floorValue = $data['floorValue'];

			$query = $this->db->query("SELECT no_of_room FROM master_room WHERE building = '$buildingValue' AND floor = '$floorValue' ");
			return $query->result_array();
		}

		public function getMasterRoom(){
			$query = $this->db->query("SELECT * FROM master_room");
			return $query->result_array();
		}

		public function getRoomCounter(){
			$query = $this->db->query("select  a.id,IFNULL(b.nilai,0) as counter from master_status a left join
			(SELECT status, COUNT(status) as nilai FROM `master_room` 
			group by status)b on a.id=b.status");
			return $query->result_array();
		}

		public function getPrintPdfGuest($id){
			$query = $this->db->query("SELECT * FROM hotel_registration a 
									LEFT JOIN master_room   	  b ON a.no_of_room 					= b.no_of_room AND a.building = b.building AND a.floor = b.floor
									LEFT JOIN hotel_country 	  c ON a.regist_country 				= c.id_country
									LEFT JOIN hotel_identity_tipe d ON a.identity_tipe 					= d.id_identity_tipe
									LEFT JOIN master_tipe         e ON a.guest_room_type 				= e.id_tipe 
									WHERE a.id_regist = '$id' ");
			return $query->result_array();
		}



	}
?>
