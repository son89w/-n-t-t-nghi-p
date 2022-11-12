<?php
    include 'inc/header.php';
?>
<?php
if(isset($_GET['cartid'])){
    $cartid = $_GET['cartid']; 
    $delcart = $ct->del_product_cart($cartid);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $cartId = $_POST['cartId'];
    $quantity = $_POST['quantity'];
    $update_quantity_cart = $ct->update_quantity_cart($quantity, $cartId);
   if($quantity<=0){
       $delcart = $ct->del_product_cart($cartId);
   }
}
if(!isset($_GET['id'])){
    echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
}
?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Giỏ Hàng</h1>
        </div>
    </div>
</header>
<main class="page">
        <section class="shopping-cart dark ">
            <div class="container ">
               <div class="content">
                    <p class="text-center">
                        <?php
							$check_cart = $ct->check_cart();
								if($check_cart){
					    ?>
                    </p>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="items">
                                <div class="product">
                                    <?php
                                        $get_product_cart = $ct->get_product_cart();
                                        if($get_product_cart){
                                            $subtotal = 0;
                                            $qty = 0;
                                            while($result = $get_product_cart->fetch_assoc()){
                                    ?>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img style="padding: 10px;" class="img-fluid mx-auto d-block image" src="../admin/uploads/<?php echo $result['image'] ?>">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="col-md-5 product-name">
                                                        <div class="product-name">
                                                            <h3><?php echo $result['productName'] ?></h3>
                                                            <div class="product-info">
                                                                <div>Giá: <span class="value"><?php echo $fm->format_currency($result['price']).""."VNĐ" ?></span></div>
                                                                <div class="mt-3"><a type="button" class="btn btn-danger" onclick="return confirm('Bạn chắc xóa này không?');" href="?cartid=<?php echo $result['cartId']?>">Xóa</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <form action="" method="post" class="col-md-4 quantity">
                                                        <label for="quantity">Quantity:</label>
                                                        <input type="hidden" name="cartId" value="<?php echo $result['cartId'] ?>">
                                                        <input id="quantity" type="number" name="quantity" min="0"  value="<?php echo $result['quantity'] ?>" class="form-control quantity-input">
										                <input type="submit" name="submit" value="Update"/>
                                                    </form>
                                                    <div class="col-md-3 price">
                                                        <p>
                                                            <?php
                                                                $total = $result['price'] * $result['quantity'];
                                                                echo $fm->format_currency($total).""."VNĐ";
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $subtotal += $total;
                                        $qty = $qty + $result['quantity'];
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-lg-4">
                            <div class="summary">
                                <h3>Summary</h3>
                                <div class="summary-item">
                                    <span class="text">Subtotal</span>
                                    <span class="price">
                                        <?php 
                                            echo $fm->format_currency($subtotal)." "."VNĐ";
                                            // Session::set('sum',$subtotal);
                                            Session::set('qty',$qty);
                                        ?>
                                    </span>
                                </div>
                                <div class="summary-item">
                                    <span class="text">Delivery</span>
                                    <span class="price">30.000 VNĐ</span>
                                </div>
                                <div class="summary-item">
                                    <span class="text">Total</span>
                                    <span class="price">
                                        <?php 
                                            $vat = 30000;
                                            $gtotal = $subtotal + $vat;
                                            echo $fm->format_currency($gtotal)." "."VNĐ";
								        ?>
                                    </span>
                                </div>
                                <a type="button" href="thanhtoan.php" class="btn btn-primary btn-lg btn-block">Checkout</a>
                            </div>
                        </div>
                        
                    </div> 
                </div>
                
            </div>
            <?php
            }else{
                echo 'Giỏ hàng của bạn trống trơn ! Hãy mua sắm ngay bây giờ';
                }
            ?>
       </section>
   </main>
<?php
    include 'inc/footer.php';
?>