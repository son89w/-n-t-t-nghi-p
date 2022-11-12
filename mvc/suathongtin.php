<?php
    include 'inc/header.php';
?>
<?php
	
	$login_check = Session::get('customer_login'); 
	if($login_check==false){
		header('Location:login_register.php');
	}
		
    $id = Session::get('customer_id');
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save'])) {
       
        $UpdateCustomers = $cs->update_customers($_POST, $id);
        
    }
?>
<div class="container">
    <div class="row card" style="width: 60%; margin: auto;">
            <form action="" method="post">
                <div class="mt-3">
                    <h2 class="text-center">SỬA THÔNG TIN</h2>
                </div>
                <?php
				$id = Session::get('customer_id');
				$get_customers = $cs->show_customers($id);
				if($get_customers){
					while($result = $get_customers->fetch_assoc()){

			    ?>
                <div class="row" style="padding: 30px;">
                    <div class="col-md-3">
                        <label class="labels">Họ và tên</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="name" value="<?php echo $result['name'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="labels">Số điện thoại</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="phone" value="<?php echo $result['phone'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="labels">Địa chỉ</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="address" value="<?php echo $result['address'] ?>">
                    </div>
                    <!-- <div class="col-md-3">
                        <label class="labels">Thành phô</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" value="<?php echo $result['city'] ?>">
                    </div> -->
                    <div class="col-md-3">
                        <label class="labels">Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="email" value="<?php echo $result['email'] ?>">
                    </div>
                    <div class="col-md-3">
                        <label class="labels">Zipcode</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="zipcode" value="<?php echo $result['zipcode'] ?>">
                    </div>
                </div>
                <div class=" mb-2 text-center">
                    <input class="btn btn-primary profile-button" type="submit" name="save" value="Lưu thông tin">
                    <p>
                <?php
                    if(isset($UpdateCustomers)){
                        echo $UpdateCustomers;
                    }
				?>
                </p>
                </div>
                <?php
                    }
                }
			    ?>
            </form>
    </div>
</div>
<?php
    include 'inc/footer.php';
?>