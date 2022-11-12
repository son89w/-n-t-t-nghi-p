<?php
    include 'inc/header.php';
?>
<?php

if(isset($_GET['orderid']) && $_GET['orderid']=='order'){
   $customer_id = Session::get('customer_id');
   $insertOrder = $ct->insertOrder($customer_id);
   $delCart = $ct->del_all_data_cart();
   header('Location:donhang.php');
}

?>
<section class="h-100 gradient-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-8">
            <div class="card" style="border-radius: 10px;">
                <div class="card-header px-4 py-5">
                    <h5 class="text-muted mb-0">Thanks for your Order, 
                    <?php
                    $id = Session::get('customer_id');
                    $get_customers = $cs->show_customers($id);
                    if($get_customers){
                        while($result = $get_customers->fetch_assoc()){

                    ?>
                    <span style="color: #a8729a;"><?php echo $result['name'] ?></span>
                    <?php
                        }
                    }
                    ?>
                    !</h5>
                </div>
                
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                    </div>
                    <div class="card shadow-0 border mb-4">
                        <div class="card-body">
                            <?php
                                    $get_product_cart = $ct->get_product_cart();
                                    if($get_product_cart){
                                        $subtotal = 0;
                                        $qty = 0;
                                        while($result = $get_product_cart->fetch_assoc()){
                                ?>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <img style="padding: 10px;" class="img-fluid mx-auto d-block image" src="../admin/uploads/<?php echo $result['image'] ?>">
                                </div>
                                <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                    <p class="text-muted mb-0"><?php echo $result['productName'] ?> x <?php echo $result['quantity'] ?></p>
                                </div>
                                <div class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                    <p class="text-muted mb-0 small"><?php echo $fm->format_currency($result['price']).""."VNĐ" ?></p>
                                </div>
                                
                            </div>
                            <?php
                                    $total = $result['price'] * $result['quantity'];
                                    $subtotal += $total;
                                    $qty = $qty + $result['quantity'];
                                    }
                                }
                                ?>
                            <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">  
                        </div>
                    </div>

                    <div class="d-flex justify-content-between pt-2">
                    <p class="fw-bold mb-0">Order Details</p>
                    <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> 
                                        <?php 
                                            echo $fm->format_currency($subtotal)." "."VNĐ";
                                            // Session::set('sum',$subtotal);
                                            Session::set('qty',$qty);
                                        ?></p>
                    </div>

                    <div class="d-flex justify-content-between pt-2">
                    <p class="text-muted mb-0">Invoice Number : 788152</p>
                    <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery </span>30.000 VNĐ</p>
                    </div>

                    <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Invoice Date : 20-5-2012</p>
                    </div>
                </div>
                <div class="card-footer border-0 px-4 py-5"
                    style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                    <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total
                    paid:  <span class="h2 mb-0 ms-2"> 
                                        <?php 
                                            $vat = 30000;
                                            $gtotal = $subtotal + $vat;
                                            echo $fm->format_currency($gtotal)." "."VNĐ";
                                        ?></span></h5>
                </div>
            </div>
            <div class="text-center">
            <a href="?orderid=order" class="btn btn-primary" name="order">Quay về đơn hàng</a>

            </div>
        </div>
    </div>
</section>
<?php
    include 'inc/footer.php';
?>
