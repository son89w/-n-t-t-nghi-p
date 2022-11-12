<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>
<?php
	/**
	 * 
	 */
	class customer
	{
        private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		//dang ky
		public function insert_customers($data){
			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$city = mysqli_real_escape_string($this->db->link, $data['city']);
			$zipcode = mysqli_real_escape_string($this->db->link, $data['zipcode']);
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);
			$country = mysqli_real_escape_string($this->db->link, $data['country']);
			$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
			$password = mysqli_real_escape_string($this->db->link, md5($data['password']));
			if($name=="" || $city=="" || $zipcode=="" || $email=="" || $address=="" || $country=="" || $phone =="" || $password ==""){
				$alert = "<span class='error'>Đăng ký không được để trống</span>";
				return $alert;
			}else{
				$check_email = "SELECT * FROM tbl_customer WHERE email='$email' LIMIT 1";
				$result_check = $this->db->select($check_email);
				if($result_check){
					$alert = "<span class='error'>Email đã tồn tại! Vui lòng nhập một email khác</span>";
					return $alert;
				}else{
					$query = "INSERT INTO tbl_customer(name,city,zipcode,email,address,country,phone,password) VALUES('$name','$city','$zipcode','$email','$address','$country','$phone','$password')";
					$result = $this->db->insert($query);
					if($result){
						$alert = "<span class='success'>Khách hàng được tạo thành công</span>";
						return $alert;
					}else{
						$alert = "<span class='error'>Khách hàng tạo không thành công</span>";
						return $alert;
					}
				}
			}
		}
		//dang nhap
		public function login_customers($data){
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$password = mysqli_real_escape_string($this->db->link, md5($data['password']));
			if($email=='' || $password==''){
				$alert = "<span class='error'>Mật khẩu và Email không được để trống</span>";
				return $alert;
			}else{
				$check_login = "SELECT * FROM tbl_customer WHERE email='$email' AND password='$password'";
				$result_check = $this->db->select($check_login);
				if($result_check){
					$value = $result_check->fetch_assoc();
					Session::set('customer_login',true);
					Session::set('customer_id',$value['id']);
					Session::set('customer_name',$value['name']);
					header('Location:order.php');
				}else{
					$alert = "<span class='error'>Email hoặc mật khẩu không khớp</span>";
					return $alert;
				}
			}
		}
		//hien thi thong tin
		public function show_customers($id){
			$query = "SELECT * FROM tbl_customer WHERE id='$id'";
			$result = $this->db->select($query);
			return $result;
		}
		//sua thong tin
		public function update_customers($data, $id){
			$name = mysqli_real_escape_string($this->db->link, $data['name']);
			$zipcode = mysqli_real_escape_string($this->db->link, $data['zipcode']);
			$email = mysqli_real_escape_string($this->db->link, $data['email']);
			$address = mysqli_real_escape_string($this->db->link, $data['address']);
			$phone = mysqli_real_escape_string($this->db->link, $data['phone']);
			
			if($name=="" || $zipcode=="" || $email=="" || $address=="" || $phone ==""){
				$alert = "<span class='error'>Thông tin không được để trống</span>";
				return $alert;
			}else{
				$query = "UPDATE tbl_customer SET name='$name',zipcode='$zipcode',email='$email',address='$address',phone='$phone' WHERE id ='$id'";
				$result = $this->db->insert($query);
				if($result){
						$alert = "<span class='success'>Đã cập nhật thành công</span>";
						return $alert;
				}else{
						$alert = "<span class='error'>Cập nhật không thành công</span>";
						return $alert;
				}
				
			}
		}
		//binh luan
		public function insert_binhluan(){

			$product_id= $_POST['product_id_binhluan'];
			$tenbinhluan= $_POST['tennguoibinhluan'];
			$binhluan= $_POST['binhluan'];
			$email= $_POST['email'];
			if($tenbinhluan==''||$binhluan==''||$email==''){
				$alert = "<span class='error'>Bình luận không được để trống</span>";
				return $alert;
			}else{
				$query = "INSERT INTO tbl_comment(tenbinhluan,binhluan,email,product_id) VALUES('$tenbinhluan','$binhluan','$email','$product_id')";
				$result = $this->db->insert($query);
				if($result){
					$alert = "
							<span class='success'>Đã gửi bình luận thành công</span><br>
							";
					return $alert;
				}else{
					$alert = "<span class='error'>Gửi bình luận không thành công</span>";
					return $alert;
				}
			}
		}
    }
?>