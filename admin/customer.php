<?php
    include 'inc/header.php';
    include 'inc/menu.php';
?>
<?php

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../classes/customer.php');
    include_once ($filepath.'/../helpers/format.php');

 ?>
<?php
   
    if(!isset($_GET['customerid']) || $_GET['customerid']==NULL){
       echo "<script>window.location ='inbox.php'</script>";
    }else{
         $id = $_GET['customerid']; 
    }
     $cs = new customer();
  

?>
<div id="layoutSidenav_content">
    <dir class="card-body row">
        <div class="container">
            <div class="row card mt-3 mb-3" style="width: 60%; margin: auto; border-radius: 20px;">
                <div class="mt-3">
                    <h2 class="text-center">ĐỊA CHỈ NHÀ</h2>
                </div>
                <?php
                    $get_customer = $cs->show_customers($id);
                    if($get_customer){
                        while($result = $get_customer->fetch_assoc()){

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
                        <label class="labels">Thành phô</label>
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
                <?php
                        }
                    }
                ?>
            </div>
            <div class="text-center">
                <a class="btn btn-dark" href="home.php">Quay về home</a>
            </div>
        </div>

    </dir>

<?php
    include 'inc/footer.php';
?>
            