<?php
    include 'inc/header.php';
?>
<?php
    $login_check = Session::get('customer_login'); 
    if($login_check==false){
        header('Location:login_register.php');
}
?>
<div class="container">
    <div class="row card mt-3 mb-3" style="width: 60%; margin: auto; border-radius: 20px;">
            <div class="mt-3">
                <h2 class="text-center">THÔNG TIN</h2>
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
                <div class="col-md-9 text-center">
                    <?php echo $result['name'] ?>
                </div>
                <div class="col-md-3">
                    <label class="labels">Số điện thoại</label>
                </div>
                <div class="col-md-9 text-center">
                    <?php echo $result['phone'] ?>
                </div>
                <div class="col-md-3">
                    <label class="labels">Địa chỉ</label>
                </div>
                <div class="col-md-9 text-center">
                    <?php echo $result['address'] ?>
                </div>
                <div class="col-md-3">
                    <label class="labels">Thành phô</label>
                </div>
                <div class="col-md-9 text-center">
                    <?php echo $result['city'] ?>
                </div>
                <div class="col-md-3">
                    <label class="labels">Quốc gia</label>
                </div>
                <div class="col-md-9 text-center">
                    <?php echo $result['country'] ?>
                </div>
                <div class="col-md-3">
                    <label class="labels">Email</label>
                </div>
                <div class="col-md-9 text-center">
                    <?php echo $result['email'] ?>
                </div>
                <div class="col-md-3">
                    <label class="labels">Zipcode</label>
                </div>
                <div class="col-md-9 text-center">
                    <?php echo $result['zipcode'] ?>
                </div>
            </div>
            <div class="mt-2 mb-2 text-center">
                <a class="btn btn-primary profile-button" href="suathongtin.php" type="button">Sửa thông tin</a>
            </div>
            <?php
                    }
                }
			?>
    </div>
</div>
<?php
    include 'inc/footer.php';
?>