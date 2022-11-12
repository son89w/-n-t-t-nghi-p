<?php
    ob_start();
    include '../lib/session.php';
    Session::init();
?>
<?php
	
	include_once '../lib/database.php';
	include_once '../helpers/format.php';

	spl_autoload_register(function($className){
		include_once "../classes/".$className.".php";
	});
		

	$db = new Database();
	$fm = new Format();
	$ct = new cart();
	$us = new user();
	$cat = new category();
	$cs = new customer();
	$product = new product();
    $brand = new brand();
    $blog = new blog();
	      	 	
?>
<!doctype html>
<html lang="en">
  <head>
    <title>81 SNEAKER</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
        
    </style>
    <link rel="stylesheet" href="css/timkiem.css">
    <link rel="stylesheet" href="css/thanhtoan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="sticky-top">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
            <div class="collapse navbar-collapse container" id="collapsibleNavId">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <h5 style="color: red;">Cart:
                            <?php
                                $check_cart = $ct->check_cart();
                                    if($check_cart){
                                        // $sum = Session::get("sum");
                                        $qty = Session::get('qty');
                                        echo $qty ;
                                        }else{
                                        echo '0';
                                    }

                            ?>
                        </h5>
                    </li>
                </ul>
                <img src="./image/logo.jpg" class="rounded-circle" alt="" style="padding: 10px; margin: auto;" width="100">
                <ul class="navbar-nav">
                    <?php 
                        if(isset($_GET['customer_id'])){
                            // $customer_id = $_GET['customer_id'];
                            $delCart = $ct->del_all_data_cart();
                            // $delCompare = $ct->del_compare($customer_id);
                            Session::mvc();
                        }
                    ?>
                    <?php
                        $login_check = Session::get('customer_login'); 
                        if($login_check==false){
                        echo 
                            '<li class="nav-item">
                                <b>
                                    <a class="nav-link" href="login_register.php">Đăng nhập</a>
                                </b>
                            </li>';
                    }else{
                                echo '
                            
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h2><span class="fa fa-user"></span></h2></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="nav-link" style="color: black;" href="thongtin.php">THÔNG TIN</a>
                            <a class="nav-link" style="color: black;" href="donhang.php">ĐƠN HÀNG</a>
                            <a class="nav-link" style="color: black;" href="yeuthich.php">YÊU THÍCH</a>
                            <a class="nav-link" style="color: black;" href="?customer_id='.Session::get('customer_id').'">ĐĂNG XUẤT</a>
                        </div>
                    </li>';
                        }
                    ?>    
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-sm navbar-light bg-light ">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavId">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="trangchu.php">TRANG CHỦ<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sanpham.php">SẢN PHẨM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tintuc.php">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="lienhe.php">LIÊN HỆ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="giohang.php">GIỎ HÀNG</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        $customer_id = Session::get('customer_id');
                        $check_order = $ct->check_order($customer_id);
                        if($check_order==true){
                            echo '<a class="nav-link" href="donhang.php">ĐƠN HÀNG</a>';
                        }else{
                            echo '';
                        }
                        ?> 
                    </li>
                </ul>
                <div class="d-flex justify-content-center h-100">
                    <form autocomplete="off" action="timkiem.php" method="post">
                        <div class="searchbar">
                        <input class="search_input" type="search" name="tukhoa" placeholder="Tìm kiếm sản phẩm">
                        <!-- <a href="#" class="search_icon"><span class="fa fa-search"></span></a> -->
                        <input class="search_icon" type="submit" name="search_product" value="Tìm">
                        </div>
                    </form>
                </div>  

            </div>
        </nav>
    </div>