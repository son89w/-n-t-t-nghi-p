<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>
<?php
	/**
	 * 
	 */
	class blog
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		//admin hien thi tin tuc
        public function show_blog(){
            $query = "

			SELECT tbl_blogs.*, tbl_brand.brandName 

			FROM tbl_blogs INNER JOIN tbl_brand ON tbl_blogs.brandId = tbl_brand.brandId 

			order by tbl_blogs.id desc";
			// $query = "SELECT * FROM tbl_product order by productId desc";
			$result = $this->db->select($query);
			return $result;
		}
        //them
		public function insert_blog($data,$files){
			$title = mysqli_real_escape_string($this->db->link, $data['title']);
			$brand = mysqli_real_escape_string($this->db->link, $data['brand']);
			$desc = mysqli_real_escape_string($this->db->link, $data['desc']);
			$content = mysqli_real_escape_string($this->db->link, $data['content']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);
			//Kiem tra hình ảnh và lấy hình ảnh cho vào folder upload
			$permited  = array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;
			
			if($title=="" || $brand=="" || $desc=="" || $content=="" || $type=="" || $file_name ==""){
				$alert = "<span class='error'>Tin tức không được để trống</span>";
				return $alert;
			}else{
				move_uploaded_file($file_temp,$uploaded_image);
				$query = "INSERT INTO tbl_blogs(title,description,content,brandId,image,status) VALUES('$title','$desc','$content','$brand','$unique_image','$type')";
				$result = $this->db->insert($query);
				if($result){
					$alert = "
							<span class='success'>Chèn thành công</span><br>
							<a href='tablett.php'>Quay lại</a>
							";
					return $alert;
				}else{
					$alert = "<span class='error'>Chèn không thành công</span>";
					return $alert;
				}
			}
		}
        //sua
        public function getblogbyId($id){
			$query = "SELECT * FROM tbl_blogs where id = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
        public function update_blog($data,$files,$id){
			$title = mysqli_real_escape_string($this->db->link, $data['title']);
			$brand = mysqli_real_escape_string($this->db->link, $data['brand']);
			$desc = mysqli_real_escape_string($this->db->link, $data['desc']);
			$content = mysqli_real_escape_string($this->db->link, $data['content']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);
			//Kiem tra hình ảnh và lấy hình ảnh cho vào folder upload
			$permited  = array('jpg', 'jpeg', 'png', 'gif');

			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];

			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			// $file_current = strtolower(current($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;


			if($title=="" || $brand=="" || $desc=="" || $content=="" || $type==""){
				$alert = "<span class='error'>Tin tức không được để trống!</span>";
				return $alert;
			}else{
				if(!empty($file_name)){
					//Nếu người dùng chọn ảnh
					if ($file_size > 204800) {

		    		 $alert = "<span class='success'>Kích thước hình ảnh phải nhỏ hơn 2GB!</span>";
					return $alert;
				    } 
					elseif (in_array($file_ext, $permited) === false) 
					{
				     // echo "<span class='error'>You can upload only:-".implode(', ', $permited)."</span>";	
				    $alert = "<span class='success'>Bạn chỉ có thể tải lên:-".implode(', ', $permited)."</span>";
					return $alert;
					}
					move_uploaded_file($file_temp,$uploaded_image);
					$query = "UPDATE tbl_blogs SET
					title = '$title',
					brandId = '$brand',
					status = '$type', 
					image = '$unique_image',
					description = '$desc',
					content = '$content'
					WHERE Id = '$id'";
					
				}else{
					//Nếu người dùng không chọn ảnh
					$query = "UPDATE tbl_blogs SET
					title = '$title',
					brandId = '$brand',
					status = '$type', 

					description = '$desc',
					content = '$content'
					WHERE Id = '$id'";
					
				}
				$result = $this->db->update($query);
					if($result){
						$alert = "<span class='success'>Đã cập nhật thành công</span>";
						return $alert;
					}else{
						$alert = "<span class='error'>Cập nhật không thành công</span>";
						return $alert;
				}
				
			}

		}
        //xoa
        public function del_blog($id){
			$query = "DELETE FROM tbl_blogs where id = '$id'";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Đã xoá thành công</span>";
				return $alert;
			}else{
				$alert = "<span class='error'>Xóa không thành công</span>";
				return $alert;
			}
			
		}
		//hien thi tin tuc
		public function getblogs_ttgiay(){
			$query = "SELECT * FROM tbl_blogs order by id";
			$result = $this->db->select($query);
			return $result;
		} 
		//chi tiet tin tuc
		public function get_blog_details($id){
			$query = "

			SELECT tbl_blogs.*, tbl_brand.brandName 

			FROM tbl_blogs INNER JOIN tbl_brand ON tbl_blogs.brandId = tbl_brand.brandId WHERE tbl_blogs.id = '$id'

			";

			$result = $this->db->select($query);
			return $result;
		}
    }
?>