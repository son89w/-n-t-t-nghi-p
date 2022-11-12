<?php
    include 'inc/header.php';
?>
<?php
    $login_check = Session::get('customer_login'); 
	if($login_check==false){
		header('Location:login_register.php');
	}
?>
<?php
	if(isset($_GET['confirmid'])){
     	$id = $_GET['confirmid'];
     	$time = $_GET['time'];
     	$price = $_GET['price'];
     	$shifted_confirm = $ct->shifted_confirm($id,$time,$price);
    }
?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Đơn Hàng</h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="card-body">
        <p class="text-center">
        <?php
            $check_order = $ct->check_order($customer_id);
                if($check_order){
        ?></p>
        <table class="table table-hover">
            <thead class="mdb-color darken-3">
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Ngày</th>
                    <th>Trạng thái</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $customer_id = Session::get('customer_id');
                    $get_cart_ordered = $ct->get_cart_ordered($customer_id);
                    if($get_cart_ordered){
                        $i = 0;
                        $qty = 0;
                        $total = 0;
                        while($result = $get_cart_ordered->fetch_assoc()){
                            $i++;
                            $total = $result['price']*$result['quantity'];
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $result['productName'] ?></td>
                    <td><img src="../admin/uploads/<?php echo $result['image'] ?>" width="100px" alt=""/></td>
                    <td><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></td>
                    <td><?php echo $result['quantity'] ?></td>
                    <td><?php echo $fm->formatDate($result['date_order']) ?></td>
                    <td>
                        <?php
                            if($result['status']=='0'){
                                echo 'Chưa giải quyết';
                            }elseif($result['status']==1){ 
                            ?>
                            <span>Đã giao hàng</span>
                            
                            <?php
                            }elseif($result['status']==2){
                                echo 'Đã nhận hàng';
                            }
                        ?>
                    </td>
                    <?php
                        if($result['status']=='0'){
                    ?>
                    <td>
                        <?php echo 'N/A';?>
                    </td>
					<?php		
						}elseif($result['status']=='1'){	
					?>
					<td>
                        <a href="?confirmid=<?php echo $customer_id ?>&price=<?php echo $result['price'] ?>&time=<?php echo $result['date_order'] ?>">
                            Đã xác nhận
                        </a>
                    </td>
					<?php
						}else{
					?>
					<td>
                        <?php echo 'Nhận'; ?>
                    </td>
					<?php
                        }	
                    ?>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
            
        </table>
        <?php
            }else{
                echo 'Đơn hàng của bạn trống trơn ! Hãy mua sắm ngay bây giờ';
                }
        ?>
    </div>
</div>

<?php
    include 'inc/footer.php';
?>
            