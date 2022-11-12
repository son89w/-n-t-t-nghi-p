<?php 
	$filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/../lib/database.php');
	include_once ($filepath.'/../helpers/format.php');
?>
<?php
/**
	 * 
	 */
	class category
	{
		private $db;
		private $fm;
		
		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}
		// stt
		public function show_category(){
			$query = "SELECT * FROM tbl_category order by catId desc";
			$result = $this->db->select($query);
			return $result;
		}
		// them
		public function insert_category($catName){

			$catName = $this->fm->validation($catName);
			$catName = mysqli_real_escape_string($this->db->link, $catName);
			
			if(empty($catName)){
				$alert = "<span class='error'>Danh mục không được để trống</span>";
				return $alert;
			}else{
				$query = "INSERT INTO tbl_category(catName) VALUES('$catName')";
				$result = $this->db->insert($query);
				if($result){
					$alert = "
							<span class='success'>Chèn thành công</span><br>
							<a href='tabledm.php'>Quay lại</a>
							";
					return $alert;
				}else{
					$alert = "<span class='error'>Chèn không thành công</span>";
					return $alert;
				}
			}
		}
		//sua
		public function getcatbyId($id){
			$query = "SELECT * FROM tbl_category where catId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_category($catName,$id){

			$catName = $this->fm->validation($catName);
			$catName = mysqli_real_escape_string($this->db->link, $catName);
			$id = mysqli_real_escape_string($this->db->link, $id);

			if(empty($catName)){
				$alert = "<span class='error'>Danh mục không được để trống</span>";
				return $alert;
			}else{
				$query = "UPDATE tbl_category SET catName = '$catName' WHERE catId = '$id'";
				$result = $this->db->update($query);
				if($result){
					$alert = "
							<span class='success'>Đã cập nhật thành công</span><br>
							<a href='tabledm.php'>Quay lại</a>
							";
					return $alert;
				}else{
					$alert = "<span class='error'>Cập nhật không thành công</span>";
					return $alert;
				}
			}

		}
		//xoa
		public function del_category($id){
			$query = "DELETE FROM tbl_category where catId = '$id'";
			$result = $this->db->delete($query);
			if($result){
				$alert = "<span class='success'>Đã xóa thành công</span>";
				return $alert;
			}else{
				$alert = "<span class='error'>Xóa không thành công</span>";
				return $alert;
			}
			
		}
		
	}
?>