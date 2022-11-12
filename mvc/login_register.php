<?php
    include 'inc/header.php';
?>
<?php
   //dang ky
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
       
       $insertCustomers = $cs->insert_customers($_POST);
       
   }
   //dang nhap
   if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
    $login_Customers = $cs->login_customers($_POST);
}
    //dang xuat
    $login_check = Session::get('customer_login'); 
		if($login_check){
			header('Location:order.php');
	}
?>
<section class="container">
    <div class="row">
        <div class="col-sm-6 mt-3 mb-3">
            <dir class="card cart1" style="width: 100%; border-radius: 50px;">
                <h1 class="text-center mb-3 mt-3">ĐĂNG NHẬP</h1>
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">EMAIL</label>
                        <div class="col-sm-9">
                        <input type="text" style="width: 88%;" name="email"  class="form-control"  placeholder="Nhập email...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">PASSWORD</label>
                        <div class="col-sm-9">
                        <input type="password" style="width: 88%;" name="password"  class="form-control"  placeholder="Nhập pass...">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" name="login" Value="Sign In" /><br>
                        <?php
                        if(isset($login_Customers)){
                            echo $login_Customers;
                        }
                        ?>
                    </div>
                </form>
            </dir>
        </div>
        <div class="col-sm-6 mt-3 mb-3">
            <dir class="card" style="width: 100%; border-radius: 50px;">
                <h1 class="text-center mb-3  mt-3">ĐĂNG KÝ</h1>
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                        <input type="text" style="width: 88%;" name="name" class="form-control"  placeholder="Nhập họ và tên...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                        <input type="text" style="width: 88%;" name="address" class="form-control"  placeholder="Nhập địa chỉ...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                        <input type="text" style="width: 88%;" name="city" class="form-control"  placeholder="Nhập thành phố...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-9">
                        <select id="inputState" style="width: 88%;" name="country" class="form-control">
                            <option selected>...Chọn quốc gia...</option>
                            <option value="Việt Nam">Việt Nam</option>
							<option value="Pháp">Pháp</option>
							<option value="Hàn Quốc">Hàn Quốc</option>
							<option value="Trung Quốc">Trung Quốc</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Zip code</label>
                        <div class="col-sm-9">
                        <input type="text" style="width: 88%;" name="zipcode" class="form-control"  placeholder="Nhập zip code...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                        <input type="text" style="width: 88%;" name="phone" class="form-control"  placeholder="Nhập số điện thoại...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                        <input type="email" style="width: 88%;" name="email" class="form-control"  placeholder="Nhập email...">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                        <input type="password" style="width: 88%;" name="password" class="form-control"  placeholder="Nhập mật khẩu ...">
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" name="submit" Value="Create Account" />
                        <br>
                        <?php
                        if(isset($insertCustomers)){
                            echo $insertCustomers;
                        }
                        ?>
                    </div>
                </form>
            </dir>
        </div>
    </div>
</section>


<?php
    include 'inc/footer.php';
?>