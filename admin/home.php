<?php
    include 'inc/header.php';
    include 'inc/menu.php';
?>
<?php 

    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../classes/cart.php');
    include_once ($filepath.'/../helpers/format.php');
    $ct = new cart();
    $fm = new Format();
?>
<?php
	$ct = new cart();
	if(isset($_GET['shiftid'])){
     	$id = $_GET['shiftid'];
     	$time = $_GET['time'];
     	$price = $_GET['price'];
     	$shifted = $ct->shifted($id,$time,$price);
    }

    if(isset($_GET['delid'])){
     	$id = $_GET['delid'];
     	$time = $_GET['time'];
     	$price = $_GET['price'];
     	$del_shifted = $ct->del_shifted($id,$time,$price);
    }
?>
<div id="layoutSidenav_content">
    <div class="card-body row">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tables</h1>
                <?php 
                if(isset($shifted)){
                	echo $shifted;
                }

                ?>  
                <?php 
                if(isset($del_shifted)){
                	echo $del_shifted;
                }
                
                ?>    
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        ĐƠN HÀNG
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>NGÀY</th>
                                    <th>TÊN SẢN PHẨM</th>
                                    <th>HÌNH ẢNH</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>GIÁ</th>
                                    <th>ID KHÁCH HÀNG</th>
                                    <th>ĐỊA CHỈ NHÀ</th>
                                    <th>HOẠT ĐỘNG</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $get_inbox_cart = $ct->get_inbox_cart();
                                    if($get_inbox_cart){
                                        $i = 0;
                                        while($result = $get_inbox_cart->fetch_assoc()){
                                            $i++;
                                ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $fm->formatDate($result['date_order']) ?></td>
                                    <td><?php echo $result['productName'] ?></td>
                                    <td><img width="100px"  src="uploads/<?php echo $result['image'] ?>"></td>
                                    <td><?php echo $result['quantity'] ?></td>
                                    <td><?php echo $result['price'].' '.'VNĐ' ?></td>
                                    <td><?php echo $result['customer_id'] ?></td>
                                    <td><a href="customer.php?customerid=<?php echo $result['customer_id'] ?>">Xem khách hàng</a></td>
                                    <td>
                                        <?php 
                                        if($result['status']==0){
                                        ?>

                                            <a href="?shiftid=<?php echo $result['id'] ?>&price=<?php echo $result['price'] ?>&time=<?php echo $result['date_order'] ?>">Chưa giải quyết</a>

                                            <?php
                                        }elseif($result['status']==1){
                                            ?>
                                            <?php
                                            echo 'Dịch chuyển...';
                                            ?>
                                        <?php
                                        }elseif($result['status']==2){
                                        ?>

                                        <a href="?delid=<?php echo $result['id'] ?>&price=<?php echo $result['price'] ?>&time=<?php echo $result['date_order'] ?>">Loại bỏ</a>

                                        <?php
                                            }
                                         
                                        ?>
							        </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

<?php
    include 'inc/footer.php';
?>
            