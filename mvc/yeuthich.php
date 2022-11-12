<?php
    include 'inc/header.php';
?>
<?php
	 if(isset($_GET['proid'])){
	 	$customer_id = Session::get('customer_id');
         $proid = $_GET['proid']; 
         $delwlist = $product->del_wlist($proid,$customer_id);
     }
?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Yêu Thích</h1>
        </div>
    </div>
</header>
<div class="container">
    <div class="card-body">
        <p class="text-center">
        <?php
            $check_wishlist = $ct->check_wishlist($customer_id);
                if($check_wishlist){
        ?></p>
        <table class="table table-hover">
            <thead class="mdb-color darken-3">
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Hoạt động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $customer_id = Session::get('customer_id');
                $get_wishlist = $product->get_wishlist($customer_id);
                if($get_wishlist){
                    $i = 0;
                    while($result = $get_wishlist->fetch_assoc()){
                        $i++;
                ?>
                <tr>
                    <th scope="row"><?php echo $i; ?></th>
                    <td><?php echo $result['productName'] ?></td>
                    <td><img src="../admin/uploads/<?php echo $result['image'] ?>" width="100px" alt=""/></td>
                    <td><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></td>
                    <td>
                        <a  href="?proid=<?php echo $result['productId'] ?>">Xóa</a> ||
                        <a  href="chitietsp.php?proid=<?php echo $result['productId'] ?>">Xem</a>
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
            
        </table>
        <?php
            }else{
                echo 'Sản phẩm yêu thích của bạn trống trơn ! Hãy mua sắm ngay bây giờ';
                }
        ?>
    </div>
</div>

<?php
    include 'inc/footer.php';
?>
            